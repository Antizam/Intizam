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
      <a href="#home"><i class="fas fa-home"></i> Home</a>
      <a href="#profile"><i class="fas fa-user"></i> Profile</a>
      <a href="#student"><i class="fas fa-users"></i> Students</a>
      <a href="#Leaving_schedule"><i class="far fa-clock"></i> Leaving Schedule</a>
      <a href="#Screening_table"><i class="fas fa-tv"></i> Screen Table</a>
    </div>


    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card w-100 bg-colour1">
            <div class="card-body">
              <div class="text-center font-weight-bold">{{ __('Profile') }}</div>
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                  <div class="col-md-6">
                    <lable id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                  <div class="col-md-6">
                    <lable id="phone" type="tel" name="phone" pattern="[0-9]{10}" class="form-control @error('number') is-invalid @enderror">

                      @error('number')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                  <div class="col-md-6">
                    <label id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                </div>

                <div class="form-group row">
                  <label for="exampleFormControlSelect1" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                  <div class="col-md-6">
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Riyadh</option>
                      <option>Buraydah</option>
                      <option>Dammam</option>
                      <option>Jeddah</option>
                      <option>Makkah</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="exampleFormControlSelect1" class="col-md-4 col-form-label text-md-right">{{ __('Neighborhood') }}</label>
                  <div class="col-md-6">
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Neighborhood 1</option>
                      <option>Neighborhood 2</option>
                      <option>Neighborhood 3</option>
                      <option>Neighborhood 4</option>
                      <option>Neighborhood 5</option>
                    </select>
                  </div>
                </div>

                <div class="container">
                  <div class="row">
                    <div class="col-sm text-justify text-left1">
                      <button type="submit" class="btn btn-primary mb-4" href="#">Edit Profile</button>
                      <button type="submit" class="btn btn-primary mb-4" href="#">Change Password</button>
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