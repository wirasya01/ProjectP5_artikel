@extends('layout.layout')

@section('content')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">{{ __('Login') }}</h2>
                                <p class="text-white-50 mb-5">{{ __('Please enter your login and password!') }}</p>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>
                                        <label class="form-label" for="typeEmailX">{{ __('Email') }}</label>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password">
                                        <label class="form-label" for="typePasswordX">{{ __('Password') }}</label>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50"
                                            href="{{ route('password.request') }}">{{ __('Forgot password?') }}</a></p>

                                    <button class="btn btn-outline-light btn-lg px-5"
                                        type="submit">{{ __('Login') }}</button>
                                </form>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>

                            </div>

                            <div>
                                <p class="mb-0">{{ __("Don't have an account?") }} <a href="#!"
                                        class="text-white-50 fw-bold">{{ __('Sign Up') }}</a></p>
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
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
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
