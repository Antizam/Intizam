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
                    <!-- Card Title -->
                    <h4>
                        <div class="text-center font-weight-bold">
                            {{ __('Relation Information') }}
                        </div>
                    </h4>
                    <hr>
                    <div class="card-body">

                        @if (session('danger'))
                        <div class="alert alert-danger">
                            {{ session('danger') }}
                        </div>
                        @endif
                        <div class="form-group row">
                            <label for="relation" class="col-md-4 col-form-label text-md-right">{{ __('Relation Type') }}</label>

                            <div class="col-md-6">
                                <label for="relation"></label>
                                <input id="relation" type="text" class="form-control @error('relation') is-invalid @enderror" name="relation" value="{{ $relation['relation'] }}" readonly required autocomplete="relation" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="relation_name" class="col-md-4 col-form-label text-md-right">{{ __('Relation Name') }}</label>

                            <div class="col-md-6">
                                <label for="relation_name"></label>
                                <input id="relation_name" type="text" class="form-control @error('relation_name') is-invalid @enderror" name="relation_name" value="{{ $relation['relation_name'] }}" readonly required autocomplete="relation_name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="relation_number" class="col-md-4 col-form-label text-md-right">{{ __('Relation phone number') }}</label>

                            <div class="col-md-6">
                                <input id="relation_number" type="email" class="form-control @error('relation_number') is-invalid @enderror" name="relation_number" value="{{ $relation['relation_number'] }}" readonly required autocomplete="relation_number">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="created_at" class="col-md-4 col-form-label text-md-right">{{ __('Relation created at') }}</label>

                            <div class="col-md-6">
                                <label for="created_at"></label>
                                <input id="created_at" type="text" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{ $relation['created_at'] }}" readonly required autocomplete="created_at" autofocus>
                            </div>
                        </div>
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
</body>
@endsection