@extends('layouts.app')

@section('content')

    <div class="container h-100">
        <div class="row justify-content-center align-items-center">
            <div class="container mt-5">
                <div class="text-center">
                    <img src="{{url('/images/alcala_logo.png')}}" width="200vh">
                    <h5 class="h5 mt-3"><b>ALCALA E-SERVICES</b></h5>
                </div>
            </div>
            <div class="col-md-5">
                    <h2 class="text-center">LOGIN</h2>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>

                            <button type="submit" class="btn btn-primary btn-block" style="padding-top: .5em; padding-bottom: .5em">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
