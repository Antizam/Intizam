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
      font-size: 130%;
      color: #404040;
      text-decoration: none;
    }

    .txt-custom1 {
      color: #262626;
    }

    .bg-colour1 {
      background-color: #ffffff !important;
    }

    body {
      background-image: url('/img/Original.png');
      background-repeat: no-repeat;
      background-size: cover;
      margin: auto;
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
      <h4><a class="btn btn-link1" href="{{ url('/') }}">Home</a></h4>
    </nav>
  </div>
</header>

<!-- Page content -->
<br><br><br><br><br>

<body>
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col">
        <div class="card-header w-100 bg-colour1">
          <!-- Card Title -->
          <h4>
            <div class="text-center font-weight-bold">
              {{ __('CS 499 Graduation Project') }}
            </div>
          </h4>
          <hr>
          <h3>Story of the project</h3>
          <h5>In this era, and the expansion of the technology across the world has led the Saudi Arabia to be one of the most encouraging and supportive country to participate in technology, and that starts with the education since it's the core of the developed countries. Hence, the problem arose with the females' schools, leaving traditional system that is hard to comply. We have created Intizam an electronic system for leaving the school in the easiest way possible.
            It started as an idea, and here we publish it as a graduation project for two students from Qassim University that they wanted to make a change and solve one this issue in a way that comply with this era.</h5>
          <hr>
          <h3>Schools</h3>
          <h5>The admin can do the following: login, registrations, add new students, modify student information, edit and view the student leaving schedule, and communicate with the student relatives.</h5>
          <br>
          <h3>Drivers</h3>
          <h5>The student's relatives (Drivers) can do the following: login, view the student leaving schedule, confirm arriving, change the password, and communicate with the admin.</h5>
          <br>
          <h3>Students</h3>
          <h5>The student can also log in and view the student leaving schedule, change the password and more.</h5>

        </div>
      </div>
    </div>
  </div>


</body>


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