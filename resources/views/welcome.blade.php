@extends('layouts.app')

@section('content')
  @include('inc.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Medical App</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to the MedApp ⚕️
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
