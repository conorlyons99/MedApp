@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
            Patient: {{$visit->patientName}}
        </div>

        <div class="card-body">
          <table class="table table-hover">
            <tbody>
              <tr>
                <td>Doctors Name</td>
                <td>Dr.{{$visit->doctor->lastName}}</td>
              </tr>
              <tr>
                <td>Time and Date</td>
                <td>{{$visit->dateTime}}</td>
              </tr>
            </tbody>
          </table>
          <a href="{{route('patient.visits.index') }}" class="btn btn-default">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
