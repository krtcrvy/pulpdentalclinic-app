@extends('layouts.app')

@section('title', 'Pulp Dental Clinic | Home')

@section('content')

    <section class="banner-login vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <!-- Section: Design Block -->
            <section class="">
                <!-- Jumbotron -->
                <div class="px-4 py-5 px-md-5 text-center text-lg-start">
                    <div class="container">
                        <div class="row gx-lg-5 align-items-center">
                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <h1 class="my-5 display-3 fw-bold ls-tight text-light">
                                    Welcome to <br />
                                    <span class="text-light">Pulp Dental Clinic</span>
                                </h1>
                                <p style="color: hsl(0, 0%, 100%)">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                                    quibusdam tempora at cupiditate quis eum maiores libero
                                    veritatis? Dicta facilis sint aliquid ipsum atque?
                                </p>
                            </div>

                            <div class="col-lg-6 mb-2 mb-lg-0">
                                <div class="card">
                                    <div class="login-logo mt-5">
                                        <img src="/images/pulp-blue.png" height="90px" width="100px">
                                    </div>

                                    <div class="card-body py-5 px-md-5">

                                        <form>
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example1" class="form-control" />
                                                        <label class="form-label" for="form3Example1">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-outline">
                                                        <input type="text" id="form3Example2" class="form-control" />
                                                        <label class="form-label" for="form3Example2">Last name</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                                <input type="email" id="form3Example3" class="form-control" />
                                                <label class="form-label" for="form3Example3">Email address</label>
                                            </div>

                                            <!-- Password input -->
                                            <div class="form-outline mb-4">
                                                <input type="password" id="form3Example4" class="form-control" />
                                                <label class="form-label" for="form3Example4">Password</label>
                                            </div>


                                            <!-- Submit button -->
                                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                                Sign up
                                            </button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Jumbotron -->
            </section>
            <!-- Section: Design Block -->
        </div>
    </section>

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

                <div class="d-flex justify-content-between border-top">
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
