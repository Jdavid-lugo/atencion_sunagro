@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (Auth::check())
                        <div class="alert alert-success" role="alert">
                            {{ Auth::user()->name }}
                        </div>
                        You are logged in!
                    @else
                        You are not logged
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
