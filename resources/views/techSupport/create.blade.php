@extends('layouts.app')
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
    padding-left: 40% !important;

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

    <br><br>
    <div class="container">
      <section class="jumbotron text-center navbar-custom">
        <div class="container">
          <div class="card card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <h5>
              <div class="text-center font-weight-bold">
                <h4><strong>{{ __('Create a query') }}</strong></h4>
              </div>
            </h5>

            <form method="post" action="{{ route('Tech_Support.store') }}">
              {{csrf_field()}}

              <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                  {{session('success')}}
                  @endif
                </div>

                <div class="form-group row">
                  <label>
                    <h4>Title</h4>
                  </label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="title" name="title">
                  @error('title')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="form-group row">
                  <label>
                    <h4>Description</h4>
                  </label>
                  <input type="text" class="form-control @error('description') is-invalid @enderror" placeholder="description" name="description">
                  @error('description')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <br>
              <div class="container">
                <div class="row">
                  <div class="col-sm text-center">
                    <button type="submit" class="btn btn-primary mb-4" href="#">Submit a query</button>
                  </div>
                </div>
              </div>
          </div>
          </form>

          <div class="row">
            <div class="col-sm text-left">
              <div class="btn  mb1 black bg-white">
                <a href="{{ route('student.index', Auth::user()->id) }}"><i class="fas fa-arrow-left"></i> Back</a>
              </div>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>
</body>
@endsection