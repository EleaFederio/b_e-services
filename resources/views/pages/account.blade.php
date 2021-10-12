@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center mb-4">
            <h3>My Account</h3>
        </div>

        <div class="main-body">

            <div class="row gutter-sm">
            <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ url('images/spider.jpg') }}" alt="Admin" class="rounded-circle" width="150" />
                    <div class="mt-3">
                        <h4>Juan de la Cruz</h4>
                        <p class="text-secondary mb-1">Brgy. Secretary</p>
                        <p class="text-muted font-size-sm">Bonifacio Street, Gubat, Sorosogon</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        Email:
                    </h6>
                    <span class="text-secondary">admin@admin.com</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        Address:
                    </h6>
                    <span class="text-secondary">Bonifacio Street, Gubat, Sorosogon</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        Mobile Number:
                    </h6>
                    <span class="text-secondary">09123456789</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">
                        Barangay ID:
                    </h6>
                    <span class="text-secondary">2021-000022</span>
                </li>
            </ul>
        </div>


    </div>


    <div class="col-md-8">
        <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{ route('logout') }}"
                       class="btn btn-danger btn-sm"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    </div>

    </div>

    </div>
@endsection
