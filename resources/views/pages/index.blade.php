@extends('layouts.app')

@section('title', 'Pulp Dental Clinic | Home')

@section('content')
    <div class="banner-image vh-100 d-flex justify-content-center align-items-center">
        <div class="container text-light">
            <h2>Welcome to</h2>
            <h1 class="display-1">Pulp Dental Clinic</h1>
            <h2>Your Trusted Dental Care Provider</h2>
        </div>
    </div>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/images/clinic_pic.jpg" class="img-fluid rounded" alt="Pic">
            </div>
            <div class="col-lg-6 blue-text text-primary">
                <h2 class="display-5">Hello This is</h2>
                <h3 class="mb-4 display-5">PULP Dental Clinic</h3>
                <p class="lead">
                    Our Liberty dentist office was built for people of all ages and celebrates the joy of a happy, healthy
                    smile. We combine cutting-edge dentistry with a team who treats you like family, a relaxing environment,
                    and amenities that delight. Enjoy personalized appointments and all-encompassing dental care from
                    top-rated
                    professionals.
                </p>
                <p class="lead">
                    Everything you need, plus a little extra.
                </p>
            </div>
        </div>
    </div>
@endsection
