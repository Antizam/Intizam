<!DOCTYPE html>

<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intizam</title>

    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <script src="https://use.fontawesome.com/252bd1c412.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- carousel Movement-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .navbar-custom {
            background-color: #0c8676;
        }

        .btn-link1 {
            font-size: 130%;
            color: #404040;
            text-decoration: none;
        }

        .txt-custom1 {
            color: #262626;
        }

        .hover {
            color: white;
        }


        body {
            background-image: url('/img/mainpage.png');
            background-repeat: no-repeat;
            background-size: cover;
            margin: auto;
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
    </style>

</head>



<!-- Header -->
<header>

    <!-- Navbar content -->
    <div class="container-fluid">
        <br><br>
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col align-self-end">
            </div>

            <li class="btn">
                <h4><a class="btn btn-link1 " href="/about ">About</a></h4>
                @if (Route::has('login'))
                @auth
            </li>

            <li class="btn">
                <h4><a class="btn btn-link1" href="{{ url('/home') }}">Home</a></h4>
                @else
            </li>

            <li class="btn">
                <h4><a class="btn btn-link1" href="{{ route('login') }}">Login</a></h4>
                @if (Route::has('register'))

            </li>
            <li class="btn">
                <h4><a class="btn btn-link1 " href="{{ route('register') }}">Register</a></h4>
                @endif
                @endauth
                @endif
            </li>

        </nav>
    </div>
    </div>
</header>


<!-- Body -->

<body>

    <div class="container">
        <br><br><br><br><br><br><br><br><br><br>
        <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li class="test01 active"></li>
                <li class="item2"></li>
                <li class="item3"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/test01.png" width="700" height="500">
                </div>
                <div class="carousel-item">
                    <img src="../img/item2.png" width="700" height="500">
                </div>
                <div class="carousel-item">
                    <img src="../img/item3.png" width="700" height="500">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </div>




    <!-- carousel-->
    <script>
        $(document).ready(function() {
            // Activate Carousel
            $("#myCarousel").carousel();

            // Enable Carousel Indicators
            $(".item1").click(function() {
                $("#myCarousel").carousel(0);
            });
            $(".item2").click(function() {
                $("#myCarousel").carousel(1);
            });
            $(".item3").click(function() {
                $("#myCarousel").carousel(2);
            });

            // Enable Carousel Controls
            $(".carousel-control-prev").click(function() {
                $("#myCarousel").carousel("prev");
            });
            $(".carousel-control-next").click(function() {
                $("#myCarousel").carousel("next");
            });
        });
    </script>


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