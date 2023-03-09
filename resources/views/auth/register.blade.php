@extends('layouts.home-master')

@section('style')
    <style>
        body {
            padding-top: 80px
        }
    </style>
@endsection

@section('navbar')
    @include('layouts.partials.navbar')
@endsection

@section('title', 'Sign Up | Pulp Dental Clinic')

@section('content')
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5">
            <div class="col-lg-5 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3 text-primary">Register</h1>
                <img src="{{ asset('images/undraw_sign__up_nm4k.svg') }}" alt="" class="img-fluid mb-3" width="450">
                <p class="col-lg-10 lead text-primary">Please fill out the form below to book your appointment with our
                    skilled and experienced dental team.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-7">
                <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">{{ __('First Name') }}</label>

                                <input id="first_name" type="text"
                                    class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                    value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="last_name" class="form-label">{{ __('Last Name') }}</label>

                                <input id="last_name" type="text"
                                    class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                    value="{{ old('last_name') }}" required autocomplete="last_name">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>

                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="contact_number" class="form-label">{{ __('Contact') }}</label>

                                <input id="contact" type="text"
                                    class="form-control @error('contact_number') is-invalid @enderror" name="contact_number"
                                    value="{{ old('contact_number') }}" required autocomplete="contact_number">

                                @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="username" class="form-label">{{ __('Username') }}</label>

                                <input id="username" type="text"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    value="{{ old('password') }}" required autocomplete="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">

                            </div>
                        </div>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Sign Up') }}</button>
                    <hr class="my-4">
                    <small class="text-muted"><a href="#">Forgot Password</a>,</small>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.partials.footer')
@endsection
