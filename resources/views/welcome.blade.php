<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
        .navbar-custom { 
    background-color: #0c8676; 
    } 

    </style>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
        <!-- <link rel="stylesheet" href="{{ asset('css/_variables.css')  }}"> -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Navbar content -->
        <nav class="navbar navbar-expand-sm navbar-custom fixed-top justify-content-end">
                <a class="nav-link" href="#">About</a>
                @if (Route::has('login'))
                    @auth
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a  class="nav-link" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    @endif
         </nav>
    </head>

<body>
  <p>This is a paragraph.</p>
</body>

<!-- Footer -->

<fotter class=" footer fixed-bottom navbar-custom">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: Intizam
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</html>
