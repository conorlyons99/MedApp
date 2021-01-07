@extends('layouts.app')

@section('content')
  @include('inc.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Patient Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome Back {{Auth::User()->name}}
                </div>
                <div class="card-body">
                  Click <a href="{{route('patient.visits.index')}}">here</a> to view your Appointments
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
