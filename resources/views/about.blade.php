<!DOCTYPE html>

<head>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Intizam</title>

        <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
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
    
    </style>
    
</head>

<!-- Body -->
<body>

<!-- Header -->
<header>

        <<br><br><br><br><br><br><br><br><br>

 <!-- Navbar content -->
 <nav class="navbar navbar-expand-sm navbar-custom fixed-top justify-content-end">
        <nav class="navbar navbar-expand-sm navbar-light bg-custom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="btn btn-link1" href="{{ url('/') }}">Home</a>
         </nav>
    </nav>
</header>

<!-- Card -->

<div class="container">
<div class="row justify-content-md-center">
        <div class = "row">
        <div class="col-7">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
         <h5 class="card-title">For Schools</h5>
        <p class="card-text">Its helps in organizing the process of students leaving the school and avoiding the crowding.</p>
      </div>
    </div>
  </div>
</div>

        <div class = "row-8">
        <div class="col-7">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
         <h5 class="card-title">For Student Drivers</h5>
        <p class="card-text">its helps by reducing the time of waiting for students to comes out from school.</p>
     </div>
  </div>
 </div>
</div>
        <div class = "row">
        <div class="col-7">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
         <h5 class="card-title">For Students</h5>
        <p class="card-text">it help by organize them and avoid the crowds of students in the school main gates.</p>
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
  <div class="footer-copyright text-center py-3">© 2020 Copyright: Intizam
  </div>
  <!-- Copyright -->
</footer>
<!-- End Footer -->
</html>