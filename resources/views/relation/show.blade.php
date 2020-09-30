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

                            @if (session('danger'))
                            <div class="alert alert-danger">
                                {{ session('danger') }}
                            </div>
                            @endif
                            <h5>
                                <div class="text-center font-weight-bold">{{ __('Student Relation Information') }}</div>
                            </h5>
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
                                <label for="relation_number" class="col-md-4 col-form-label text-md-right">{{ __('Relation Phone Number') }}</label>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
@endsection