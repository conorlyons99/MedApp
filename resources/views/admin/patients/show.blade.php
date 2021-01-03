@extends('layouts.app')

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
                <td>First Name</td>
                <td>{{$patient->firstName}}</td>
              </tr>
              <tr>
                <tr>
                  <td>Last Name</td>
                  <td>{{$patient->lastName}}</td>
                </tr>
                <tr>
                <td>Email</td>
                <td>{{$patient->email}}</td>
              </tr>
              <tr>
              <td>Phone No.</td>
              <td>{{$patient->phone}}</td>
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
