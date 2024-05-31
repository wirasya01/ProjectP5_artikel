@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-dark text-white">
                    <h4>{{ __('Dashboard') }}</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center">
                        <h5 class="mb-4">Welcome back!</h5>
                        <p class="fs-5">You are logged in!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .card {
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        border-bottom: none;
    }

    .alert {
        border-radius: 15px;
    }
</style>
