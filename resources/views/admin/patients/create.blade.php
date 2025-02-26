@extends('inc.adminNav')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <div class="card">
              <div class="card-header">
                  Add new patient
              </div>

              <div class="card-body">
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <form method="POST" action="{{ route('admin.patients.store') }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                          <label for="user_id">User ID</label>
                          <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id') }}" />
                      </div>
                      <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" />
                      </div>
                      <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" />
                      </div>
                      <div class="float-right">
                        <a href="{{ route('admin.patients.index') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
