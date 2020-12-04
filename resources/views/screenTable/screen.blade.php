@extends('layouts.app')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script type="text/javascript">
  setTimeout(function() {
    location.reload();
  }, 30000);
</script>

<style>
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
  <div class="container">


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif

    <div id="res">
      <!-- Page content -->
      <br><br><br><br>
      <div class="container-fulid">
        <div class="row">
          <div class="col">
            <div class="card-header w-100 bg-colour1">
              <!-- Card Title -->
              <h4>
                <div class="text-center font-weight-bold">
                  {{ __('Arrivals Screen') }}
                </div>
              </h4>
              <hr>
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
      </div>
    </div>
</body>
@endsection