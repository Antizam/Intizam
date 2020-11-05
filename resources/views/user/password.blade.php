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
            <a href="{{ route('Tech_Support.create', Auth::user()->id) }}"><i class="far fa-question-circle"></i> Technical Support</a>
        </div>

        <br><br>
        <div class="container">
            <br><br><br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card w-100 bg-colour1">
                        <div class="card-body">
                            <div style="font-size:25" class="text-center font-weight-bold">
                                <h5><strong>{{ __('Change Passsword') }}</strong></h5>
                            </div>
                            <br>

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
    </div>

</body>
@endsection