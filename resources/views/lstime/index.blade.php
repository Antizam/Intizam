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
    background-color: #0c8676;
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
    <div class="sidebar">
      <br>
      <a href="{{ route('home')}}"><i class="fas fa-home"></i> Home</a>
      <a href="{{ route('user.profile', Auth::user()->id) }}"><i class="fas fa-user"></i> Profile</a>
      <a href="{{ route('student.index', Auth::user()->id) }}"><i class="fas fa-users"></i> Students</a>
      <a href="{{ route('lstime.index', Auth::user()->id) }}"><i class="far fa-clock"></i> Leaving Schedule</a>
      <a href="{{ route('screenTable.screen', Auth::user()->id) }}"><i class="fas fa-tv"></i> Screen Table</a>
      <a href="#Settings"><i class="fas fa-cog"></i> Settings</a>
      <a href="#Technical Support"><i class="far fa-question-circle"></i> Technical Support</a>
    </div>




    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
      <div class="col-lg-12 margin-tb">
        <a class="btn btn-info" href="{{ route('lstime.edit', Auth::user()->id) }}">Edit Leaving Schedule</a>
      </div>
    </div>


    <br>

    <div class="row">
      <table class="table table-bordered table-striped table-sm text-center">
        <tr class="table-dark text-dark">
          <td> <strong> Day </strong> </td>
          <td> <strong> Time </strong> </td>
        </tr>
        <tbody>
          <tr>
            <td>
              <h2><br> Sunday </h2>
            </td>
            <td><br>
              <h5> {{ $user->sun->format('H:i') }}</h5>
            </td>
          </tr>
        </tbody>
      </table>
      <table class="table table-bordered table-striped table-sm text-center">

        <tr class="table-success">
          <td></td>
          <td></td>
        </tr>
        <tbody>
          <tr>
            <td>
              <h2> <br> Monday </h2>
            </td>
            <td><br>
              <h5> {{ $user->mon->format('H:i') }}</h5>

            </td>
          </tr>
        </tbody>
      </table>

      <table class="table table-bordered table-striped table-sm text-center">

        <tr class="table-primary">
          <td></td>
          <td></td>

        </tr>
        <tbody>
          <tr>
            <td>
              <h2> <br> Tuesday </h2>
            </td>
            <td><br>
              <h5> {{ $user->tue->format('H:i') }}</h5>
            </td>

          </tr>
        </tbody>
      </table>

      <table class="table table-bordered table-striped table-sm text-center">
        <tr class="table-warning">
          <td></td>
          <td></td>

        </tr>
        <tbody>
          <tr>
            <td>
              <h3> <br> Wednesday </h3>
            </td>
            <td><br>
              <h5> {{ $user->wed->format('H:i') }}</h5>
            </td>

          </tr>
        </tbody>
      </table>

      <table class="table table-bordered table-striped table-sm text-center">
        <tr class="table-active">
          <td></td>
          <td></td>

        </tr>
        <tbody>
          <tr>
            <td>
              <h2><br>Thursday </h2>
            </td>
            <td><br>
              <h5>{{ $user->thu->format('H:i') }}</h5>
            </td>
        </tbody>
      </table>
    </div>
</body>
@endsection