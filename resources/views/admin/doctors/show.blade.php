@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
            Doctor: {{$doctor->lastName}}
        </div>

        <div class="card-body">
          <table class="table table-hover">
            <tbody>
              <tr>
                <td>First Name</td>
                <td>{{$doctor->firstName}}</td>
              </tr>
              <tr>
                <tr>
                  <td>Last Name</td>
                  <td>{{$doctor->lastName}}</td>
                </tr>
                <tr>
                <td>Email</td>
                <td>{{$doctor->email}}</td>
              </tr>
            </tbody>
          </table>
          <a href="{{route('admin.doctors.index') }}" class="btn btn-default">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
