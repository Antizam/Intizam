@extends('layouts.app')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
  function fullScreenTgl() {

    let doc = document,
      elm = doc.documentElement;
    if (elm.requestFullscreen) {
      (!doc.fullscreenElement ? elm.requestFullscreen() : doc.exitFullscreen())
    } else if (elm.mozRequestFullScreen) {
      (!doc.mozFullScreen ? elm.mozRequestFullScreen() : doc.mozCancelFullScreen())
    } else if (elm.msRequestFullscreen) {
      (!doc.msFullscreenElement ? elm.msRequestFullscreen() : doc.msExitFullscreen())
    } else if (elm.webkitRequestFullscreen) {
      (!doc.webkitIsFullscreen ? elm.webkitRequestFullscreen() : doc.webkitCancelFullscreen())
    } else {
      console.log("Fullscreen support not detected.");
    }

  }
</script>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<script type="text/javascript">
  setTimeout(function() {
    location.reload();
  }, 5000);
</script>

<style>
  .bg-colour1 {
    background-color: #0c8676 !important;
  }

  .btn-link1 {
    font-size: 100%;
    color: #ffffff;
    text-decoration: none;
  }

  span>i {
    color: white;
  }

  span>input {
    background: none;
    color: white;
    padding: 0;
    border: 0;
  }

  .text-left1 {
    padding-left: 35% !important;
  }
</style>

@section('content')

<body>
  <div class="container">


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <span class="btn btn-info">
      <i class="fas fa-tv"></i> <input id="show_button" type="button" value="Full Screen" onclick="fullScreenTgl()">
    </span>
    <br><br>
    <div id="res">
      <div class="container-fluid">
        <div class="row">
          <table class="table table-bordered table-striped table-sm text-center">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
                <th>Student Name</th>
                <th>Relation</th>
                <th>Relation Name</th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $student)
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{$student->std_name}}</td>

              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
        <div class="container">
          <div class="row justify-content-center">
            {{ $students->links() }}
          </div>
        </div>
      </div>
    </div>
</body>
@endsection