<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <!-- Navbar Start -->
    @include('layouts.nav')
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Our Projects</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Our Projects</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/hero-img.png" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Case Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Case Study</div>
                <h1 class="mb-4">Explore Our Recent AI Case Studies</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-1.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Robotic Automation</small>
                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-2.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Machine learning</small>
                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-3.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Case End -->


    <!-- FAQs Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Popular FAQs</div>
                <h1 class="mb-4">Frequently Asked Questions</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ1">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How to build a website?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                    diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long will it take to get a new website?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                    diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Do you only create HTML websites?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                    diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Will my website be mobile-friendly?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                    diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    Will you maintain my site for me?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                    diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    I’m on a strict budget. Do you have any low cost options?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                    diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    Will you maintain my site for me?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="headingSeven" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                    diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    I’m on a strict budget. Do you have any low cost options?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                aria-labelledby="headingEight" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna
                                    diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Start -->


    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary newsletter py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/newsletter.png" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                    <h1 class="text-white mb-4">Let's subscribe the newsletter</h1>
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                    <small class="text-white-50">Diam sed sed dolor stet amet eirmod</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
