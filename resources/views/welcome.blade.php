<!DOCTYPE html>

<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intizam</title>

    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <script src="https://use.fontawesome.com/252bd1c412.js"></script>
    <!-- <link rel="stylesheet" href="{{ asset('css/_variables.css')  }}"> -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        .navbar-custom {
            background-color: #0c8676;
        }

        .btn-link1 {
            font-size: 100%;
            color: #ffffff;
            text-decoration: none;
        }

        .txt-custom1 {
            color: #262626;
        }
    </style>

</head>



<!-- Header -->
<header>

    <br><br><br><br><br><br><br><br><br>
    <!-- Navbar content -->
    <nav class="navbar navbar-expand-sm navbar-expand-md navbar-expand-lg navbar-custom fixed-top justify-content-end">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="btn btn-link1" href="/about ">About</a>
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
    </nav>
</header>

<!-- Body -->

<body>

    <!-- Card -->
    <div class="container">
        <section class="jumbotron text-center navbar-custom">
            <div class="container">
                <h1><strong>Intizam</strong></h1>
                <p class="lead txt-custom1"> <strong>Intizam is an electronic exit system for females student that simplifies the leaving process from schools during
                        the leaving time, it's simple, fast and reliable for every student, driver and school
                    </strong></p>
                <p>
                    <div class="row justify-content-md-center">
                        <div class="row">
                            <div class="col-7">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{URL('/storage/app/S1.jpg')}}" class="card-img-top" alt="School logo">
                                    <div class="card-body">
                                        <h5 class="card-title"> <i class="fas fa-building"></i> For Schools</h5>
                                        <i class="material-icons pmd-list-icon align-middle"></i>
                                        <p class="card-text">It helps in organizing the process of students leaving the school and avoiding the crowding</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-8">
                            <div class="col-7">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{URL('/storage/app/S1.jpg')}}" class="card-img-top" alt="Drivers logo">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class='fas fa-car-side'></i> For Student Drivers</h5>
                                        <p class="card-text">It helps by reducing the time of waiting for students to come out from school</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4 shadow-sm">
                            <div class="col-7">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{URL('/storage/app/S1.jpg')}}" class="card-img-top" alt="School logo">
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-users"></i> For Students</h5>
                                        <p class="card-text">It helps by organize them and avoid the crowds of students in the at school main gates</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>



</body>

<!-- Footer -->

<fotter class=" footer fixed-bottom navbar-custom">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3"> All rights reserved for <strong>Intizam</strong> © 2020
    </div>
    <!-- Copyright -->
    </footer>
    <!-- End Footer -->

    </html>