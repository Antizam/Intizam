@extends('layouts.app')

<head>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
    .sidebar {
      height: 100%;
      /* Full-height: remove this if you want "auto" height */
      width: 15%;
      /* Set the width of the sidebar */
      position: fixed;
      /* Fixed Sidebar (stay in place on scroll) */
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #333333;
      overflow-x: hidden;
      /* Disable horizontal scroll */
      padding-top: 50px;
    }

    /* The navigation menu links */
    .sidebar a {
      padding: 15px 15px 15px 16px;
      text-decoration: none;
      /*Font color on the sidebar*/
      color: white;
      /*Font size on the sidebar*/
      font-size: 18px;
      display: block;
    }

    /* When you mouse over the navigation links, change their color */
    .sidebar a:hover {
      color: white;
      text-decoration: none;
      cursor: pointer;
    }

    .sidebar a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
    @media screen and (max-height: 400px) {
      .sidebar {
        padding-top: 15px;
      }

      .sidebar a {
        font-size: 18px;
      }

    }

    .bg-colour1 {
      background-color: #ffffff !important;
    }

    .btn-link-intizam {
      font-size: 45px;
      color: #ffffff;
      text-decoration: none;
    }

    .btn-link1 {
      font-size: 100%;
      color: #ffffff;
      text-decoration: none;
    }

    .text-left1 {
      padding-left: 35% !important;

    }

    .container-custom a {
      font-size: 30px;
      margin-left: 100px;
      background-color: none;
      color: white;
    }

    body {
      margin-top: 20px;
      background: #FAFAFA;
    }

    .order-card {
      color: #fff;
    }


    .bg-c-blue {
      background: linear-gradient(45deg, #86b2c1, #86b2c1);
    }

    .bg-c-pink {
      background: linear-gradient(45deg, #eee3e0, #eee3e0);
    }

    /* Changed the color to black*/
    .card {
      border-radius: 5px;
      -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
      box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
      border: none;
      color: black;
      margin-bottom: 30px;
      -webkit-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    .card .card-block {
      padding: 25px;
    }

    .order-card i {
      font-size: 26px;
    }

    .f-left {
      float: left;
    }

    .f-right {
      float: right;
    }
  </style>
</head>

@section('content')

<!--Side bar -->
<div class="wrapper d-flex align-items-stretch">
  <nav class="sidebar">

    <li class="container-custom btn">
      <h4><a class="btn btn-link-intizam" href="{{ route('home')}}" }}>{{ config('Intizam', 'Intizam') }}</a></h4>
    </li>

    <ul class="list-unstyled components mb-5">
      <li class="active">
        <a href="{{ route('home')}}"><i class="fa fa-home mr-3"></i> Home</a>
      </li>
      <li>
        <a href="{{ route('user.profile', Auth::user()->id) }}"><i class="fas fa-user mr-3"></i> Profile</a>
      </li>
      <li>
        <a href="{{ route('student.index', Auth::user()->id) }}"><i class="fas fa-users mr-2"></i> Students</a>
      </li>
      <li>
        <a href="{{ route('lstime.index', Auth::user()->id) }}"><i class="fas fa-clock mr-3"></i> Leaving Schedule</a>
      </li>
      <li>
        <a href="{{ route('screenTable.screen', Auth::user()->id) }}"><i class="fas fa-tv mr-3"></i> Screen Table</a>
      </li>
      <li>
        <a href="{{ route('Tech_Support.create', Auth::user()->id) }}"><i class="far fa-question-circle mr-3"></i> Technical Support</a>
      </li>
      <li>
        <a href="#Settings"><i class="fas fa-cog mr-3"></i> Settings</a>
      </li>
    </ul>
  </nav>
</div>


<!--Body -->

<body>
  <div class="container">
    <h2 class="mb-4">School Statistics</h2>
    <div class="row">
      <div class="col-md-4 col-xl-3">
        <div class="card bg-c-blue order-card">
          <div class="card-block">
            <h6 class="m-b-20">Total number of students</h6>
            <i class="fas fa-chart-pie fa-3x f-left"></i>
            <h2 class="text-right"><span>426</span></h2>
            <h4 class="text-uppercase font-weight-bold my-4">Details</h4>
            <p class="m-b-0">This is the number of students this your school, including all level and grades.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-xl-3">
        <div class="card bg-c-blue order-card">
          <div class="card-block">
            <h6 class="m-b-20">Crowding rate</h6>
            <h2 class="text-right"><span></span></h2>
            <div class="progress md-progress">
              <div class="progress-bar cyan lighten-1" role="progressbar" style="width: 7%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="text" style="color: green;">Better than last week by (70%)</p>
            <h4 class="text-uppercase font-weight-bold my-4">Details</h4>
            <p class="m-b-0">This is the congestion rate in this school competing in the past week.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-xl-3">
        <div class="card bg-c-pink order-card">
          <div class="card-block">
            <h6 class="m-b-20">Most crowded day of the week</h6>
            <i class="fas fa-calendar-week f-left"></i>
            <h2 class="text-right"><span>Monday</span></h2>
            <h4 class="text-uppercase font-weight-bold my-4">Details</h4>
            <p class="m-b-0">This is the most crowded day this week for this school based on real data.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-xl-3">
        <div class="card bg-c-pink order-card">
          <div class="card-block">
            <h6 class="m-b-20">Time remaining for leaving</h6>
            <i class="fas fa-clock f-left"></i>
            <h2 class="text-right" style="color: red;"><span>40 Minutes</span></h2>
            <h4 class="text-uppercase font-weight-bold my-4">Details</h4>
            <p class="m-b-0">The remaining time for students to leave the school, please be ready.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>
@endsection