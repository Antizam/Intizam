@extends('layouts.app')

<head>
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
  </style>
</head>

@section('content')

<body>
  <div class="wrapper d-flex align-items-stretch">
    <nav class="sidebar">

      <li class="container-custom btn">
        <h4><a class="btn btn-link-intizam" href="{{ url('/') }}">{{ config('Intizam', 'Intizam') }}</a></h4>
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

  <div class="container">
    <h2 class="mb-4">Main Page</h2>
  </div>

</body>
@endsection