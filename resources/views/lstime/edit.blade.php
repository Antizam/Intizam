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
            <a href="{{ route('user.profile', Auth::user()->id) }}"><i class="fas fa-user"></i> Profile</a>
            <a href="{{ route('student.index', Auth::user()->id) }}"><i class="fas fa-users"></i> Students</a>
            <a href="#Leaving_schedule"><i class="far fa-clock"></i>Leaving Schedule</a>
            <a href="#Screening_table"><i class="fas fa-tv"></i> Screen Table</a>
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
                            </div>
                            @endif
                            <h5>
                                <div class="text-center font-weight-bold">{{ __('Leaving Schedule') }}</div>
                            </h5>

                            <form method="POST" action="{{ route('lstime.update') }}">
                                @csrf


                                <div class="card-body">
                                    @if(session('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('success')}}
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <label for="sun" class="col-md-4 col-form-label text-md-right">{{ __('Sunday') }}</label>

                                        <div class="col-md-6">
                                            <input id="sun" type="tel" class="form-control @error('sun') is-invalid @enderror" name="sun" value="{{ $user->sun->format('H:i') }}" autocomplete="sun" autofocus>

                                            @error('sun')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="mon" class="col-md-4 col-form-label text-md-right">{{ __('Monday') }}</label>

                                        <div class="col-md-6">
                                            <input id="mon" type="tel" class="form-control @error('mon') is-invalid @enderror" name="mon"  value="{{ $user->mon->format('H:i') }}" autocomplete="mon" autofocus>

                                            @error('mon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="tue" class="col-md-4 col-form-label text-md-right">{{ __('Tuesday') }}</label>

                                        <div class="col-md-6">
                                            <input id="tue" type="text" class="form-control @error('tue') is-invalid @enderror" name="tue" value="{{ $user->tue->format('H:i') }}" autocomplete="tue" autofocus>

                                            @error('tue')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="wed" class="col-md-4 col-form-label text-md-right">{{ __('Wednesday') }}</label>

                                        <div class="col-md-6">
                                            <input id="wed" type="text" class="form-control @error('wed') is-invalid @enderror" name="wed" value="{{ $user->wed->format('H:i') }}" autocomplete="wed" autofocus>

                                            @error('wed')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="thu" class="col-md-4 col-form-label text-md-right">{{ __('Thursday') }}</label>

                                        <div class="col-md-6">
                                            <input id="thu" type="text" class="form-control @error('thu') is-invalid @enderror" name="thu" value="{{ $user->thu->format('H:i') }}" autocomplete="thu" autofocus>

                                            @error('thu')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm text-justify text-left1">
                                                <button type="submit" class="btn btn-primary mb-4" href="#">Edit Leaving Schedule</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <div class="btn  mb1 black bg-white">
                                        <a href="{{ route('lstime.index', Auth::user()->id) }}"><i class="fas fa-arrow-left"></i> Back</a>
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