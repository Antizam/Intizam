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

@section('content')

<body>
    <!-- Sidebar content -->
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

    <!-- Page content -->
    <br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card-header w-100 bg-colour1">
                    <h4>
                        <div class="text-center font-weight-bold">
                            <strong>{{ __('Change Passsword') }}</strong>
                        </div>
                    </h4>
                    <hr>
                    <div class="card-body">
                        <div class="panel-body">
                            @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                                {{ csrf_field() }}


                                <div class="form-group row{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                    <label for="new-password" class="col-md-4 col-form-label text-md-right">Current Password</label>

                                    <div class="col-md-6">
                                        <input id="current-password" type="password" class="form-control" name="current-password" required>

                                        @if ($errors->has('current-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('current-password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                    <label for="new-password" class="col-md-4 col-form-label text-md-right">New Password</label>

                                    <div class="col-md-6">
                                        <input id="new-password" type="password" class="form-control" name="new-password" required>

                                        @if ($errors->has('new-password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('new-password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="new-password-confirm" class="col-md-4 col-form-label text-md-right">Confirm New Password</label>

                                    <div class="col-md-6">
                                        <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm text-justify text-left1">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Confirm') }}
                                            </button>
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


</body>
@endsection