<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    </style>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
        <!-- <link rel="stylesheet" href="{{ asset('css/_variables.css')  }}"> -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Navbar content -->
        <nav class="navbar navbar-expand-sm navbar-custom fixed-top justify-content-end">
        <nav class="navbar navbar-expand-sm navbar-light bg-custom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
                <div class="btn btn-link1" href="#">
                <a class="btn btn-link1" href="{{ url('/#') }}">About</a>
                @if (Route::has('login'))
                    @auth
                        <a class="btn btn-link1" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-link1" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="btn btn-link1" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    @endif
         </nav>
    
         <style>
        .navbar-custom { 
    background-color: #0c8676; 
    } 

        .btn-link1 {
    font-size: 100%;
    color: #ffffff;
    text-decoration: none;
        }
    
    </style>
</head>


<!-- Footer -->

<fotter class=" footer fixed-bottom navbar-custom">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: Intizam
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</html>
