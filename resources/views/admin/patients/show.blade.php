@extends('inc.adminNav')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
            Patient: {{$patient->firstName}}
        </div>

        <div class="card-body">
          <table class="table table-hover">
            <tbody>
              <tr>
                <td>Name</td>
                <td>{{$patient->user->name}}</td>
              </tr>
                <tr>
                <td>Email</td>
                <td>{{$patient->user->email}}</td>
              </tr>
              <tr>
              <td>Phone No.</td>
              <td>{{$patient->phone}}</td>
            </tr>
            <tr>
            <td>Address</td>
            <td>{{$patient->address}}</td>
          </tr>
            </tbody>
          </table>
          <a href="{{route('admin.patients.index') }}" class="btn btn-default">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
