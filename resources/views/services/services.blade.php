@extends('layouts.app')

@section('title', 'Pulp Dental Clinic | Home')

@section('content')
    <section class="hero">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4 mt-5" src="/images/pulp-light.png" alt="" width="72" height="70">
            <h1 class="display-5 fw-bol text-light">SERVICES</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4 text-light">Here are the services that we offer for you</p>

            </div>
        </div>
    </section>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/images/extraction_image.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                    width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Tooth Extraction</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
            </div>
        </div>
    </div>
@endsection
