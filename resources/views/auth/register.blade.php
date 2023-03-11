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

@section('title', ' Pulp Dental Clinic | Sign Up')

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
                <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="{{ route('register') }}"
                    id="registerForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">{{ __('First Name') }}</label>

                                <input id="first_name" type="text"
                                    class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                    value="{{ old('first_name') }}">

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
                                    value="{{ old('last_name') }}">

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
                                    value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="contact_number" class="form-label">{{ __('Contact Number') }}</label>

                                <input id="contact_number" type="text"
                                    class="form-control @error('contact_number') is-invalid @enderror" name="contact_number"
                                    value="{{ old('contact_number') }}">

                                @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="birthday" class="form-label">{{ __('Birthday') }}</label>
                                <input type="date" class="form-control @error('birthday') is-invalid @enderror"
                                    id="birthday" name="birthday" value="{{ old('birthday') }}">

                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gender" class="form-label">{{ __('Gender') }}</label>

                                <select class="form-select @error('gender') is-invalid @enderror" id="gender"
                                    name="gender" form="registerForm">
                                    <option selected disabled>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="nonbinary">Non-binary</option>
                                    <option value="transgender">Transgender</option>
                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="address" class="form-label">{{ __('Address') }}</label>

                                <input id="address" type="text"
                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                    value="{{ old('address') }}">

                                @error('address')
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
                                    value="{{ old('username') }}">

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
                                    class="form-control @error('password') is-invalid @enderror" name="password">

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
                                    name="password_confirmation">

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
