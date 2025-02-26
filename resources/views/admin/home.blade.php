@extends('inc.adminNav')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Welcome back <span>{{ Auth::user()->name }}</span></h4>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
