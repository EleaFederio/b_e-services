<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            background: #599fd9;
            background-image: linear-gradient(135.9deg, rgba(109,25,252,1)  16.4%, rgba(125,31,165,1)  56.1%);
            min-height: 100vh;
            overflow-x: hidden;
        }
        .vertical-nav{
            min-width: 17rem;
            width: 17rem;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 3px 3px 10px   rgba(0, 0,0,0.1);
            transition: all  0.4s;
        }
        .page-content{
            width: calc(100% - 17rem);
            margin-left: 17rem;
            transition: all 0.4s;
        }
        #sidebar.active{
            margin-left: -17rem;
        }
        #content-active{
            width: 100%;
            margin: 0;
        }
        .separator{
            margin: 3rem 0;
            border-bottom: 1px dashed  #fff;
        }
        .text-uppercase{
            letter-spacing: 0.1em;
        }
        .text-gray{
            color: #aaa;
        }
        .nav-link{
            text-transform: capitalize;
        }
        .nav-link:hover{
            background: #f3f2f2;
        }
        .text-primary{
            color: #7579e7 !important;
        }
        @media (max-width: 768px) {
            #sidebar{
                margin-left: -17rem;
            }
            #sidebar.active{
                margin-left: 0;
            }
            #content{
                width: 100%;
                margin: 0;
            }
            #content.active{
                margin-left: 17rem;
                width: calc(100% - 17rem);
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
{{--                    {{ config('app.name') }}--}}
                    Barangay E-Services
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @auth()
            @include('partials.sidebar')
        @endauth

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
