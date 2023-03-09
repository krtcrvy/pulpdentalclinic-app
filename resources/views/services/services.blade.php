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
                <img src="/images/extraction_image.jpeg"
                    class="services-img justify-content-center align-items-center d-block mx-lg-auto img-fluid"
                    alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Tooth Extraction</h1>
                <p class="lead">The removal of teeth from the dental alveolus in the alveolar bone is known as a dental
                    extraction. One of the most prevalent uses for extractions is to remove teeth that have gotten impacted.
                </p>
            </div>
        </div>
    </div>

    <section class="bg-primary">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="/images/filling_image.jfif" class="services-img d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6 text-light">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Tooth Extraction</h1>
                    <p class="lead">The removal of teeth from the dental alveolus in the alveolar bone is known as a
                        dental
                        extraction. One of the most prevalent uses for extractions is to remove teeth that have gotten
                        impacted.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/images/orthodontics_image.jpg" class="services-img d-block mx-lg-auto img-fluid"
                    alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Orthodontics</h1>
                <p class="lead">The dental speciality that deals with the diagnosis, prevention, interception, guidance,
                    and correction of poor bites is known formally as orthodontics and dentofacial orthopedics. A healthy
                    bite is achieved through orthodontic treatment, which results in straight teeth that properly contact
                    opposing teeth in the opposing jaw.
                </p>
            </div>
        </div>
    </div>

    <section class="bg-primary">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="/images/veeners_image.jpg" class="services-img d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6 text-light">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Veeners</h1>
                    <p class="lead">Custom-made covers for your teeth's front surfaces are called dental veneers. They
                        cover up stains, chips, cracks, and other visual flaws. One of the most popular cosmetic dentistry
                        procedures is veneer placement. Several veneer varieties are available, based on your unique
                        objectives.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/images/whitening_image.jpeg" class="services-img d-block mx-lg-auto img-fluid"
                    alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Whitening</h1>
                <p class="lead">The technique of lightening the shade of a person's teeth is known as tooth whitening or
                    tooth bleaching. When teeth turn yellow over time for a variety of causes, whitening is frequently
                    desired. Whitening can be accomplished by altering the intrinsic or extrinsic color of the tooth enamel.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-primary">
        <div class="container">
            <footer class="py-5 text-light">
                <div class="row">
                    <div class="col-2">
                        <h5 class="mb-3">Navigation</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Services</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5 class="mb-3">Services</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Orthodontics</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Veeners</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Dental
                                    Filling</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Extraction</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Whitening</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5 class="mb-3">Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">249 Yakal St. 8th
                                    Avenue</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Caloocan City</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Call: 3660878</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Text: +63 945 713
                                    8127</a></li>
                        </ul>
                    </div>

                    <div class="col-4 offset-1">
                        <form>
                            <h5>Subscribe to our clinic</h5>
                            <p>Monthly digest of whats new and exciting from us.</p>
                            <div class="d-flex w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p>&copy; Pulp Dental Clinic, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#twitter" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#instagram" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#facebook" />
                                </svg></a></li>
                    </ul>
                </div>
            </footer>
        </div>

    </div>


@endsection
