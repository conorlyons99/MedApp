@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
        <p id="alert-message" class="alert-collapse"></p>

        <div class="card">
          <div class="card-header">
            Doctors
            <a href="{{route('admin.doctors.create')}}" class="btn btn-primary float-right">Add</a>
          </div>

          <div class="card-body">
            @if (count($doctor) ===0)
              <p>No Doctors</p>
            @else
              <table id="table-doctors" class="table table-hover">
                <thead>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                </thead>
                <tbody>
              @foreach ($doctor as $doctor)
                      <tr data-id="{{$doctor->id}}">
                        <td>{{$doctor->firstName}}</td>
                        <td>{{$doctor->lastName}}</td>
                        <td>{{$doctor->email}}</td>
                        <td>
                          <a href="{{route('admin.doctors.show', $doctor->id)}}" class="btn btn-primary">View</a>
                          <a href="{{route('admin.doctors.edit', $doctor->id)}}" class="btn btn-warning">Edit</a>
                          <form style="display:inline-block" method="POST" action="{{route('admin.doctors.delete', $doctor->id)}}">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="form-control btn btn-danger>">Delete</button>
                          </form>
                        </td>
                      </tr>
              @endforeach
                </tbody>
              </table>

            @endif
            <a href="{{route('admin.home')}}" class="btn btn-primary">Back</a>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
