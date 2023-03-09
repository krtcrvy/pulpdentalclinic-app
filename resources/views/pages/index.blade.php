@extends('layouts.home-master')

@section('title', 'Pulp Dental Clinic | Home')

@section('navbar')
    @include('layouts.partials.navbar-transparent')
@endsection

@section('content')
    <!-- Parallax hero section -->
    <section class="parallax-hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="text-light">
                    <h2>Welcome to</h2>
                    <h1 class="display-1">Pulp Dental Clinic</h1>
                    <h2>Your Trusted Dental Care Provider</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Parallax hero section -->

    <section class="container col-xxl-12 px-4 py-5 mb-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{ asset('images/clinic_pic.jpg') }}" class="img-fluid rounded"
                    alt="A picture of a dentist treating a patient" width="500">
            </div>
            <div class="col-lg-6 blue-text text-primary">
                <h3 class="display-5">Hello! This is</h3>
                <h2 class="mb-4 display-3">PULP Dental Clinic</h2>
                <p class="lead">
                    Our Liberty dentist office was built for people of all ages and celebrates the joy of a happy,
                    healthy
                    smile. We combine cutting-edge dentistry with a team who treats you like family, a relaxing
                    environment,
                    and amenities that delight. Enjoy personalized appointments and all-encompassing dental care
                    from
                    top-rated
                    professionals.
                </p>
                <p class="lead">
                    Everything you need, plus a little extra.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-primary">
        <div class="container px-4 py-5">
            <h2 class="display-5 pb-2 text-center text-light">How could we help you?</h2>
            <div class="row row-cols-1 row-cols-lg-4 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm h-100">
                        <div class="card-body d-flex justify-content-between flex-column p-5">
                            <h3 class="text-primary">
                                Time for a checkup?
                            </h3>
                            <p class="lead">We've got you covered with personalized cleanings, painless fillings,
                                crowns,
                                dentures, and
                                bridges.</p>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Learn more</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm h-100">
                        <div class="card-body d-flex justify-content-between flex-column p-5">
                            <h3 class="text-primary">
                                Fix damaged teeth
                            </h3>
                            <p class="lead">Expert surgical care from the team you know and trust. Implants, canals,
                                extractions and
                                more.
                            </p>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Learn more</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm h-100">
                        <div class="card-body d-flex justify-content-between flex-column p-5">
                            <h3 class="text-primary">
                                Improve your smile
                            </h3>
                            <p class="lead">We'll help you understand high-tech cosmetic options, like Invisalign,
                                veneers, teeth
                                whitening, and Botox.</p>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Learn more</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm h-100">
                        <div class="card-body d-flex justify-content-between flex-column p-5">
                            <h3 class="text-primary">
                                Get to know us
                            </h3>
                            <p class="lead">Led by Dr. Raul Arganza, our team is proud to offer a fresh take on
                                going to
                                the dentist in
                                Liberty.</p>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Learn more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('layouts.partials.footer')
@endsection
