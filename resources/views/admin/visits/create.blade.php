@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          Add New Visit
        </div>

        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                     <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form method="POST" action="{{route('admin.visits.store')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
              <label for="patientName">Patient Name</label>
              <input type="text" class="form-control" id="patientName" name="patientName" value="{{old('patientName')}}"/>
            </div>
            <div class="form-group">
              <label for="doctorName">Doctor</label>
              <select name="doctor_id" class="form-control">
                @foreach ($doctors as $doctor)
                  <option value="{{$doctor->id}}"{{ (old('doctor_id') == $doctor->id) ? "selected" : "" }}>{{$doctor->lastName}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="dateTime">Time and Date</label>
              <input type="text" class="form-control" id="dateTime" name="dateTime" value="{{old('dateTime')}}"/>
            </div>
            <div class="float-right">
              <a href="{{route ('admin.visits.index')}}" class="btn btn-default">Cancel</a>
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
