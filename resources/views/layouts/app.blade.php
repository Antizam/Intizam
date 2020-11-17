<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Intizam', 'Intizam') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color: #0c8676;
        }

        .btn-link1 {
            font-size: 130%;
            color: #404040;
            text-decoration: none;
        }

        body {
            background-image: url('/img/test02.png');
            background-repeat: no-repeat;
            background-size: cover;
            margin: auto;
        }

        .font-custom {
            font-size: 16px;
            font-family: "Times New Roman", Times, serif;

        }

        .dropdown-menu a:hover {
            background-color: #555;
        }
    </style>

</head>

<body>
    <div id="app">
        <!-- Top Navbar content -->
        <div class="container-fluid">
            <br><br>

            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Left Side Navbar " NOT IMPORTANT-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- Right Side Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="btn">
                            <h4><a class="btn btn-link1" href="{{ route('login') }}">{{ __('Login') }}</a></h4>
                        </li>
                        @if (Route::has('register'))
                        <li class="btn">
                            <h4><a class="btn btn-link1" href="{{ route('register') }}">{{ __('Register') }}</a></h4>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="btn btn-link1 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <!-- Right Side Of Navbar -->
                            <div class="dropdown-menu dropdown-menu-right bg-dark " aria-labelledby="navbarDropdown">

                                <a class="dropdown-item text-white font-custom" href="{{ route('user.profile', Auth::user()->id) }}">
                                    {{ __('View Profile') }}
                                </a>

                                <a class="dropdown-item text-white font-custom" href="{{ route('user.edit')}}">
                                    {{ __('Edit Profile') }}
                                </a>

                                <a class="dropdown-item text-white font-custom" href="{{ route('student.index', Auth::user()->id) }}">
                                    {{ __('Student Profile') }}
                                </a>

                                <a class="dropdown-item text-white font-custom" href="{{ route('logout') }}" onclick="event.preventDefault();
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- Footer -->

<fotter class=" footer fixed-bottom">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        <h5>All rights reserved for <strong>Intizam</strong> © 2020</h5>
    </div>
    <!-- Copyright -->
</fotter>
<!-- End Footer -->

</html>