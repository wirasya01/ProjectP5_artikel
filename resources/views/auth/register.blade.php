@extends('layout.layout')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">{{ __('Register') }}</h2>
                                <p class="text-white-50 mb-5">{{ __('Create an account') }}</p>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="name"
                                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required autocomplete="name"
                                            autofocus>
                                        <label class="form-label" for="name">{{ __('Name') }}</label>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email">
                                        <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password">
                                        <label class="form-label" for="password">{{ __('Password') }}</label>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password-confirm" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                        <label class="form-label"
                                            for="password-confirm">{{ __('Confirm Password') }}</label>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5"
                                        type="submit">{{ __('Register') }}</button>
                                </form>

                            </div>

                            <div>
                                <p class="mb-0">{{ __('Already have an account?') }} <a href="{{ route('login') }}"
                                        class="text-white-50 fw-bold">{{ __('Login') }}</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        .gradient-custom {
            background: #6a11cb;
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
        }

        .card {
            border: none;
            border-radius: 1rem;
            background-color: #495057;
        }

        .card-body {
            padding: 40px;
        }

        .form-outline .form-control {
            background-color: #343a40;
            color: #ffffff;
        }

        .form-outline .form-label {
            color: #ffffff;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }

        .invalid-feedback {
            color: #ff6b6b;
        }

        .btn-outline-light {
            border-color: #ffffff;
            color: #ffffff;
        }

        .btn-outline-light:hover {
            background-color: #ffffff;
            color: #007bff;
        }

        .text-white-50 {
            color: rgba(255, 255, 255, 0.5);
        }
    </style>
@endsection
