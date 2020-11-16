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

    body {
      background-image: url('/img/mainpage.png');
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


<!-- Body -->

<body>

  <div class="container">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="row justify-content-md-center">
      <div class="row">
        <div class="col-7">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">For Schools</h5>
              <p class="card-text">Its helps in organizing the process of students leaving the school and avoiding the crowding.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row-8">
        <div class="col-7">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">For Student Drivers</h5>
              <p class="card-text">its helps by reducing the time of waiting for students to comes out from school.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
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