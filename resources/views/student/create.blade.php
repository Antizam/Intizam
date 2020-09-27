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
    padding-left: 40% !important;

  }
</style>

@section('content')

<body>
  <div class="container">
    <div class="sidebar">
      <a href="{{ route('home')}}"><i class="fas fa-home"></i> Home</a>
      <a href="{{ route('user.profile', Auth::user()->id) }}"><i class="fas fa-user"></i> Profile</a>
      <a href="{{ route('student.index', Auth::user()->id) }}"><i class="fas fa-users"></i> Students</a>
      <a href="#Leaving_schedule"><i class="far fa-clock"></i> Leaving Schedule</a>
      <a href="#Screening_table"><i class="fas fa-tv"></i> Screen Table</a>
      <a href="#Settings"><i class="fas fa-cog"></i> Settings</a>
      <a href="#Technical Support"><i class="far fa-question-circle"></i> Technical Support</a>
    </div>


    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card w-100 bg-colour1">
            <div class="card-body">

              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div><br />
              @endif
              <h5>
                <div class="text-center font-weight-bold">{{ __('create new Students') }}</div>
              </h5>
              <form action="{{ route('student.store', Auth::user()->id) }}" method="post">
                @csrf


                <div class="card-body">
                  @if(session('success'))
                  <div class="alert alert-success" role="alert">
                    {{session('success')}}
                    @endif
                  </div>


                  <div class="form-group row">
                    <label for="std_id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                    <div class="col-md-6">

                      <input type="digits" class="form-control @error('std_id') is-invalid @enderror" name="std_id" value="{{ old("std_id") }}" required autocomplete="std_id" autofocus>

                      @error('std_id')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="std_name" class="col-md-4 col-form-label text-md-right">{{ __('name') }}</label>

                    <div class="col-md-6">

                      <input type="text" class="form-control @error('std_name') is-invalid @enderror" name="std_name" value="{{ old("std_name") }}" required autocomplete="std_name" autofocus>

                      @error('std_name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="std_email" class="col-md-4 col-form-label text-md-right">{{ __('EMAIL') }}</label>

                    <div class="col-md-6">

                      <input type="std_email" class="form-control @error('std_email') is-invalid @enderror" name="std_email" value="{{ old("std_email") }}" required autocomplete="std_email" autofocus>

                      @error('std_email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="std_password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>
                    <div class="col-md-6">

                      <input type="text" class="form-control @error('std_password') is-invalid @enderror" name="std_password" value="{{ old("std_password") }}" required autocomplete="std_password" autofocus>

                      @error('std_password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col-sm text-justify text-left1">
                        <button type="submit" class="btn btn-primary mb-4" href="#">New Student</button>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</body>
@endsection