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



    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row">
      <div class="col-lg-12 margin-tb">
        <a class="btn btn-success" href="{{ route('relation.create',  $student->std_id) }}"> Create New Relation</a>
      </div>
    </div>

    <div class="row">
      <h3>{{ $student->std_name }}</h3>
      <table class="table table-bordered table-striped table-sm text-center">
        <thead class="thead-dark">
          <tr>
            <th>No</th>
            <th>The Relation</th>
            <th>Relation Name</th>
            <th>Relation Phone number</th>
            <th width="280px">Action</th>
          </tr>
        </thead>
        @foreach($relations as $relation)
        <tbody>
          <tr>
            <td>{{ ++$i }}</td>
            <td>{{$relation->relation}}</td>
            <td>{{$relation->relation_name}}</td>
            <td>{{$relation->relation_number}}</td>
            <td>
              <form action="{{ route('relation.destroy',$relation->relation_id) }}" method="POST">


                <a class="btn btn-info" href="{{ route('relation.show',$relation->relation_id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('relation.edit',$relation->relation_id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Student Relation ?')">Delete</button>
              </form>
            </td>
          </tr>

          @endforeach
        </tbody>
      </table>
      <div class="col-lg-12 margin-tb">
        <div class="btn  mb1 black bg-white">
          <a href="{{ route('student.index', Auth::user()->id) }}"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        {{ $relations->links() }}
      </div>
    </div>
</body>
@endsection