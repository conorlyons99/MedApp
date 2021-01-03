@extends('layouts.app')

@section('content')
    @include('inc.navbar')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as an Administrator!') }}
                    <br>
                    <a href="{{route('admin.visits.index')}}">Visits</a>
                    <br>
                    <a href="{{route('admin.doctors.index')}}">Doctors</a>
                    <br>
                    <a href="{{route('admin.patients.index')}}">Patients</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
