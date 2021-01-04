@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <p id="alert-message" class="alert-collapse"></p>

        <div class="card">
          <div class="card-header">
            Visits
          </div>

          <div class="card-body">
            @if (count($visits) ===0)
              <p>No Visits</p>
            @else
              <table id="table-visits" class="table table-hover">
                <thead>
                  <th>Patient Name</th>
                  <th>Doctor Name</th>
                  <th>Date and Time</th>
                </thead>
                <tbody>
              @foreach ($visits as $visit)
                      <tr data-id="{{$visit->id}}">
                        <td>{{$visit->patientName}}</td>
                        <td>Dr.{{$visit->doctor->lastName}}</td>
                        <td>{{$visit->dateTime}}</td>
                        <td>
                          <a href="{{route('patient.visits.show', $visit->id)}}" class="btn btn-primary">View</a>
                        </td>
                      </tr>
              @endforeach
                </tbody>
              </table>
              <a href="{{route('patient.home')}}" class="btn btn-primary">Back</a>
            @endif
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
