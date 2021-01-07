@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          Edit Visit Details
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
          <form method="POST" action="{{route('admin.visits.update', $visit->id)}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
              <label for="name">Patient Name</label>
              <select name="user_id" class="form-control">
                @foreach ($users as $user)
                  <option value="{{$user->id}}"{{ (old('user_id', $visit->user->id) == $user->id) ? "selected" : "" }}>{{$user->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="doctorName">Doctor Name</label>
              <select name="doctor_id" class="form-control">
                @foreach ($doctors as $doctor)
                  <option value="{{$doctor->id}}"{{ (old('doctor_id', $visit->doctor->id) == $doctor->id) ? "selected" : "" }}>{{$doctor->lastName}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="dateTime">Time and Date</label>
              <input type="text" class="form-control" id="dateTime" name="dateTime" value="{{old('dateTime', $visit->dateTime)}}"/>
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
