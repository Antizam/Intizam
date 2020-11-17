@extends('layouts.app')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
    font-size: 16px;
    color: white;
    display: block;
  }

  /* When you mouse over the navigation links, change their color */
  .sidebar a:hover {
    color: white;
    text-decoration: none;
    cursor: pointer;
  }

  .bg-colour1 {
    background-color: #0c8676 !important;
  }

  .bg-colour2 {
    background-color: #ffffff !important;
  }

  .btn-link1 {
    font-size: 100%;
    color: #ffffff;
    text-decoration: none;
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

  .text-left1 {
    padding-left: 35% !important;
  }
</style>

@section('content')

<body>
  <div class="container">
    <div class="wrapper d-flex align-items-stretch">
      <nav class="sidebar">
        <li class="btn">
          <h4><a class="btn btn-link1" href="{{ url('/') }}">{{ config('Intizam', 'Intizam') }}</a></h4>
        </li>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="{{ route('home')}}"><i class="fa fa-home mr-3"></i> Home</a>
          </li>
          <li>
            <a href="{{ route('user.profile', Auth::user()->id) }}"><i class="fas fa-user mr-3"></i> Profile</a>
          </li>
          <li>
            <a href="{{ route('student.index', Auth::user()->id) }}"><i class="fas fa-users mr-3"></i> Students</a>
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


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif


    <br><br><br>
    <div class="container-fluid">
      <section class="jumbotron text-center navbar-custom">
        <div class="card card-body">
          <span style="font-size: 40px; color:white;">
            <i class="fas fa-calendar-week"></i>
          </span>
          <br>
          <table class="table table-hover bg-colour2">
            <h4><strong>{{ __('Leaving Schedule') }}</strong></h4>
            <br>
            <thead>
              <tr>
                <th scope="col"> Day of Week </th>
                <th scope="col"> </th>
                <th scope="col"> </th>
                <th scope="col-right">Leaving Time</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Sunday<br><br></th>
                <td> </td>
                <td> </td>
                <th scope="col-right">
                  <h5> {{ $user->sun->format('H:i') }}</h5>
                </th>
              </tr>
              <tr>
                <th scope="row">Monday<br><br></th>
                <td> </td>
                <td> </td>
                <th scope="col-right">
                  <h5> {{ $user->mon->format('H:i') }}</h5>
                </th>
              </tr>
              <tr>
                <th scope="row">Tuesday<br><br></th>
                <td> </td>
                <td> </td>
                <th scope="col-right">
                  <h5> {{ $user->tue->format('H:i') }}</h5>
                </th>
              </tr>
              <tr>
                <th scope="row">Wednesday<br><br></th>
                <td> </td>
                <td> </td>
                <th scope="col-right">
                  <h5> {{ $user->wed->format('H:i') }}</h5>
                </th>
              </tr>
              <tr>
                <th scope="row">Thursday<br><br></th>
                <td> </td>
                <td> </td>
                <th scope="col-right">
                  <h5> {{ $user->thu->format('H:i') }}</h5>
                </th>
              </tr>
            </tbody>
          </table>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-12 margin-tb">
            <a class="btn btn-info" href="{{ route('lstime.edit', Auth::user()->id) }}">Edit Leaving Schedule</a>
          </div>
        </div>
      </section>
    </div>
  </div>
</body>
@endsection