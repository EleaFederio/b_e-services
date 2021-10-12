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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            background: #599fd9;
            background-image: linear-gradient(135.9deg, rgba(255, 244, 224,1)  16.4%, rgba(224, 233, 255 ,1)  56.1%);
            min-height: 100vh;
            overflow-x: hidden;
        }
        .display-text{
            font-family: 'Work Sans';
        }
        .nav-item active{
            background-color: #1b4b72;
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
        .bg-dark{
            background-color: #3e6196 !important;
            color: white;
        }
        .page-content{
            width: calc(100% - 17rem);
            margin-left: 17rem;
            transition: all 0.4s;
        }
        #sidebar.active{
            margin-left: -17rem;
        }
        #content.active{
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
            color: #000 !important;
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

        @auth()
            @include('partials.sidebar')
        @endauth

        @guest
            <main class="py-4">
                @yield('content')
            </main>
        @endguest


    </div>
{{--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
