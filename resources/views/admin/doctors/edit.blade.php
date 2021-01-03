@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          Edit Doctor Details
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
          <form method="POST" action="{{route('admin.doctors.update', $doctor->id)}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" value="{{old('firstName', $doctor->firstName)}}"/>
            </div>
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" value="{{old('lastName', $doctor->lastName)}}"/>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="{{old('email', $doctor->email)}}"/>
            </div>
            <div class="float-right">
              <a href="{{route ('admin.doctors.index')}}" class="btn btn-default">Cancel</a>
              <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
