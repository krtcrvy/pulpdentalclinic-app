@extends('layouts.app')

@section('title', 'Pulp Dental Clinic | Home')

@section('content')
    <section class="banner-extraction vh-100 d-flex justify-content-center align-items-center">
        <div class="container text-light">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <h1>Tooth Extraction</h1><br>
                    <h5>The removal of teeth from the dental alveolus in the alveolar bone is known as a
                        dental extraction.
                        One of the most prevalent uses for extractions is to remove teeth that have gotten impacted.</h5>
                </div>
                <div class="col-lg-6">
                    <div class="image-extraction">
                        <img src="/images/extraction_image.jpeg" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
