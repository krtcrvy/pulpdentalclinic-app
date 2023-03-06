@extends('layouts.app')

@section('title', 'Pulp Dental Clinic | Home')

@section('content')
    <section class="banner-image vh-100 d-flex justify-content-center align-items-center">
        <div class="container text-light">
            <h2>Welcome to</h2>
            <h1 class="display-1">Pulp Dental Clinic</h1>
            <h2>Your Trusted Dental Care Provider</h2>
        </div>
    </section>
    <section class="container col-xxl-12 px-4 py-5 mb-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/images/clinic_pic.jpg" class="img-fluid rounded" alt="A picture of a dentist treating a patient"
                    width="550">
            </div>
            <div class="col-lg-6 blue-text text-primary">
                <h2 class="display-5">Hello! This is</h2>
                <h3 class="mb-4 display-3">PULP Dental Clinic</h3>
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
    </section>
    <section class="bg-primary">
        <div class="container px-4 py-5">
            <h2 class="display-4 pb-2 text-center text-light">How could we help you?</h2>
            <div class="row row-cols-1 row-cols-lg-4 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm h-100">
                        <div class="card-body d-flex justify-content-between align-items-center flex-column p-5">
                            <h2 class="text-primary">
                                Time for a checkup?
                            </h2>
                            <p class="lead">We've got you covered with personalized cleanings, painless fillings, crowns,
                                dentures, and
                                bridges.</p>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Learn more</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm h-100">
                        <div class="card-body d-flex justify-content-between align-items-center flex-column p-5">
                            <h2 class="text-primary">
                                Fix damaged teeth
                            </h2>
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
                        <div class="card-body d-flex justify-content-between align-items-center flex-column p-5">
                            <h2 class="text-primary">
                                Improve your smile
                            </h2>
                            <p class="lead">We'll help you understand high-tech cosmetic options, like Invisalign,
                                veneers, teeth
                                whitening, and Botox.</p>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Learn more</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm h-100">
                        <div class="card-body d-flex justify-content-between align-items-center flex-column p-5">
                            <h2 class="text-primary">
                                Get to know us
                            </h2>
                            <p class="lead">Led by Dr. Raul Arganza, our team is proud to offer a fresh take on going to
                                the dentist in
                                Liberty.</p>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Learn more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

            <header class="section-header mt-4 mb-4" align="center">
                <h2 class="display-5 text-primary">Our Services</h2>
                <p>Here is what we can offer for you</p>
            </header>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="post-box">
                        <div class="post-img"><img src="images/extraction_image.jpeg" class="img-fluid"alt="PICTURE">
                        </div>
                        <h3 class="post-title">Extraction</h3>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="post-box">
                        <div class="post-img"><img src="images/filling_image.jfif" class="img-fluid" alt="PICTURE"></div>
                        <h3 class="post-title">Dental Filling</h3>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="post-box">
                        <div class="post-img"><img src="images/whitening_image.jpeg" class="img-fluid" alt="PICTURE">
                        </div>
                        <h3 class="post-title">Whitening</h3>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <div class="row mb-5">

                <div class="col-lg-6">
                    <div class="post-box">
                        <div class="post-img"><img src="images/veeners_image.jpg" class="img-fluid"alt="PICTURE">
                        </div>
                        <h3 class="post-title">Dental Veeners</h3>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="post-box">
                        <div class="post-img"><img src="images/orthodontics_image.jpg" class="img-fluid" alt="PICTURE">
                        </div>
                        <h3 class="post-title">Orthodontics</h3>
                        <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- End Recent Blog Posts Section -->
    <div class="bg-primary">
        <br><br>
        <div class="container">
            <h3 class="display-4 pb-2 mb-4 text-center text-light">What they are saying about us</h3>
            <div class="row g-2">
                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">

                        <div class="user-image mt-3">

                            <img src="https://scontent.fmnl30-1.fna.fbcdn.net/v/t39.30808-6/333585319_208741521827830_5714215223769808672_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGGDvyb01-yetsyuAV0RRZPBzhIs9HCnmQHOEiz0cKeZK0pKXvGCNcRogehI6h_VC2O35r-QqBLRNxcJnZ9GB85&_nc_ohc=tma-dKAcrBAAX-c64pd&_nc_ht=scontent.fmnl30-1.fna&oh=00_AfDKnk-72NHAlCYQxGPYPKaQCiA08iXxeKiYy0AbgW8sVQ&oe=6408E0F1"
                                class="rounded-circle" width="80" height="80">

                        </div>

                        <div class="user-content">

                            <h5 class="mb-2 mt-3">Denisse Bispo</h5>
                            <span>Software Developer</span>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <div class="ratings">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>

                    </div>

                </div>

                <div class="col-md-4">
                    <div class="card p-3 text-center px-4">

                        <div class="user-image mt-3">

                            <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/334917454_595985242079043_3199177330187104861_n.png?stp=dst-png_p228x119&_nc_cat=102&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeEHm052f8xop69ua7p4WJU_MjV2JPzrmvsyNXYk_Oua-6OyzAxgoWBZrZG6ufw8zGkbW84Le9K3knoKdmKl14lj&_nc_ohc=rqJyFP_11Q0AX_jnb7a&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQYsDM02iqmrIMckf-R7XBWOzoJBw39g1TbZdQYRMTbcw&oe=642C1A4D"
                                class="rounded-circle" width="80" height="80">
                        </div>

                        <div class="user-content">

                            <h5 class="mb-2 mt-3">Wilbert Baybay</h5>
                            <span>Software Developer</span>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <div class="ratings">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">

                    <div class="card p-3 text-center px-4">

                        <div class="user-image mt-3">

                            <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/334916381_226701616477136_1494061051426964842_n.png?stp=dst-png_p206x206&_nc_cat=111&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeGHIxhKuGjfxZhmFRBpNuToK-qYiGfoDmkr6piIZ-gOaatCn5dIcEvU7QKiauHGvaTHQUFlA19mEcDvgBRTm4JU&_nc_ohc=rpxW_os_76YAX9e_1HF&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQdzEaXZb40FJ2RiMtWFSvtEXHMh7fWmtu74fFDiHmmbg&oe=642C24F9"
                                class="rounded-circle" width="80" height="80">

                        </div>

                        <div class="user-content">

                            <h5 class="mb-2 mt-3">Ali Bustamante</h5>
                            <span>Software Architect</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>

                        </div>

                        <div class="ratings">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <br><br>
    </div>

    <section class="container col-xxl-12 px-4 py-5 mb-5">
        <div class="row flex-lg-row-reverse g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6 text-primary">
                <h3 class="mb-4 display-5">Hours</h3>
                <div class="d-flex justify-content-between">
                    <div>
                        <h4>Monday</h4><br>
                        <h4>Tuesday</h4><br>
                        <h4>Thursday</h4><br>
                        <h4>Sunday</h4><br>
                    </div>
                    <div>
                        <h4 class="hours">10AM-6PM</h4><br>
                        <h4 class="hours">10AM-6PM</h4><br>
                        <h4 class="hours">10AM-6PM</h4><br>
                        <h4 class="hours">10AM-6PM</h4><br>
                    </div>
                </div>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d482.5171857146846!2d120.97749234328602!3d14.648135961354658!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b5d216479c83%3A0x88363864dfa38a05!2sDr.%20Raul%20C.%20Arganza!5e0!3m2!1sen!2sph!4v1678076673814!5m2!1sen!2sph"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-6 blue-text text-primary">
                <div class="row mb-5">
                    <div class="col">
                        <h3 class="mb-4 display-5">PULP Dental Clinic</h3>
                        <h3>249 Yakal St. 8th Avenue</h3>
                        <h3 class="mb-3">Caloocan City</h3>
                        <p class="lead">
                            PULP Dental Clinic is conveniently located right off of Yakal Street. Enjoy our spa-like
                            atmosphere
                            and
                            family-friendly approach. We look forward to seeing you!
                        </p>
                        <p class="lead">
                            Everything you need, plus a little extra.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4 class="mb-3"><i class="bi bi-map me-3"></i>Get Directions</h4>
                        <h4 class="mb-3"><i class="bi bi-telephone me-3"></i>Call 3660878</h4>
                        <h4 class="mb-3"><i class="bi bi-table me-3"></i>Call +649 2744 84584</h4>
                    </div>
                </div>

            </div>
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
