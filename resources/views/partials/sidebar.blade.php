<!-- Vertical Navbar -->
<div class="vertical-nav  bg-white" id="sidebar">

    <div class="py-4 px-3  mb-4 bg-light text-center">

        <img src="{{ url('/images/spider.jpg') }}" height="80" width="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
            <h4 class="m-0">Juan de la  Cruz</h4>
            <p  class="font-weight-normal text-muted mb-0">Barangay Secretary</p>
        </div>
    </div>

    <p class="text-gray font-weight-bold  text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

    <ul  class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="{{ '/' }}" class="nav-link text-dark bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('my_account') }}" class="nav-link text-dark bg-light">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                My Account
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-folder-open mr-3 text-primary fa-fw"></i>
                Records
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-certificate mr-3 text-primary fa-fw"></i>
                Certificates
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-briefcase mr-3 text-primary fa-fw"></i>
                Officials
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark bg-light">
                <i class="fa fa-bullhorn mr-3 text-primary fa-fw"></i>
                Report
            </a>
        </li>

    </ul>

    <hr style="margin-bottom: auto">

    <div class="container">
        <footer>
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
        </footer>
    </div>

</div>


{{--Page  Content--}}
<div class="page-content p-5" id="content">


    <!-- Toggle Button -->
    <button id="sidebarCollapse" onclick="change()" type="button" class="btn btn-light btn-sm bg-white rounded-pill shadow-sm px-4 mb-4">
        <i class="fa fa-bars mr-2"></i>
        <small class="text-uppercase font-weight-bold"></small>
    </button>

    <div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

</div>

{{--@section('script')--}}
    <script type="text/javascript">

        function change(){
            var element = document.getElementById('sidebar');
            var element2 = document.getElementById('content');
            element.classList.toggle("active");
            element2.classList.toggle("active");
        }
    </script>
{{--@endsection--}}
