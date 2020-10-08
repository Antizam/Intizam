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


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card w-100 bg-colour1">
                        <div class="card-body">

                            @if (session('danger'))
                            <div class="alert alert-danger">
                                {{ session('danger') }}
                            </div>
                            @endif
                            <h5>
                                <div class="text-center font-weight-bold">{{ __('Profile') }}</div>
                            </h5>
                            <div class="form-group row">
                                <label for="std_id" class="col-md-4 col-form-label text-md-right">{{ __('std_id') }}</label>

                                <div class="col-md-6">
                                    <label for="std_id"></label>
                                    <input id="std_id" type="text" class="form-control @error('std_id') is-invalid @enderror" name="std_id" value="{{ $student['std_id'] }}" readonly required autocomplete="std_id" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="std_name" class="col-md-4 col-form-label text-md-right">{{ __('std_name') }}</label>

                                <div class="col-md-6">
                                    <label for="std_name"></label>
                                    <input id="std_name" type="text" class="form-control @error('std_name') is-invalid @enderror" name="std_name" value="{{ $student['std_name'] }}" readonly required autocomplete="std_name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="std_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="std_email" type="email" class="form-control @error('std_email') is-invalid @enderror" name="std_email" value="{{ $student['std_email'] }}" readonly required autocomplete="std_email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="std_password" class="col-md-4 col-form-label text-md-right">{{ __('std_password') }}</label>

                                <div class="col-md-6">
                                    <label for="std_password"></label>
                                    <input id="std_password" type="text" class="form-control @error('std_password') is-invalid @enderror" name="std_password" value="{{ $student['std_password'] }}" readonly required autocomplete="student" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <div class="btn  mb1 black bg-white">
                                        <a href="{{ route('student.index', Auth::user()->id) }}"><i class="fas fa-arrow-left"></i> Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
@endsection