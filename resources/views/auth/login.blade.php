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

@section('title', 'Login | Pulp Dental Clinic')

@section('content')
    <div class="container col-xl-10 col-xxl-8 px-4 py-5 vh-100">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3 text-primary">Welcome to Pulp Dental Clinic!</h1>
                <img src="{{ asset('images/undraw_login_re_4vu2.svg') }}" alt="" class="img-fluid mb-3" width="450">
                <p class="col-lg-10 lead">Please log in to schedule or manage your dental appointments with our
                    expert team
                    of dentists.</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    <hr class="my-4">
                    <small class="text-muted">By clicking <a href="">Sign up</a>, you agree to the terms of
                        use.</small>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.partials.footer')
@endsection
