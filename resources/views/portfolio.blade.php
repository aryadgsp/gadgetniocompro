@extends('layouts.app')
@section('content')

<!--  Page Wrapper -->
<div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
        style="background-image: url(../assets/images/backgrounds/projects-banner.jpg);">
        <div class="container">
            <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <img src="../assets/images/svgs/primary-leaf.svg" alt="" class="img-fluid animate-spin">
                            <p class="mb-0 text-white fs-5 text-opacity-70">We <span
                                    class="text-primary">Empowering Your Digital Lifestyle.</span> Your trusted electronic and gadget distributor,
                                connecting world-class brands with the Indonesian market.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <h1 class="mb-0 fs-16 text-white lh-1">Portfolio</h1>
                </div>
            </div>
        </div>
    </section>

    <!--  Project Section -->
    <section class="project py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="text-center mb-8" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800">
                <p class="text-primary fw-semibold mb-2" style="
                    background-color: black;
                    color: white;
                    display: inline-block;
                    padding: 2px 6px;
                    border-radius: 4px;
                ">
                    Our Portfolio
                </p>
                <h2 class="fw-bold mb-0">Trusted by Leading Brands</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="../assets/images/portfolio/portfolio-img-5.jpg" alt="" class="img-fluid w-100">
                            <div class="portfolio-overlay">
                                <a href="projects-detail.html"
                                    class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">BRAND 1</h3>
                            <div class="hstack gap-2">
                                <span class="badge text-dark border">CCTV</span>
                                <span class="badge text-dark border">CCTV ACCESSORIES</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="../assets/images/portfolio/portfolio-img-4.jpg" alt="" class="img-fluid w-100">
                            <div class="portfolio-overlay">
                                <a href="projects-detail.html"
                                    class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">BRAND 2</h3>
                            <div class="hstack gap-2">
                                <span class="badge text-dark border">CABLE</span>
                                <span class="badge text-dark border">GADGET ACCESSORIES</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="../assets/images/portfolio/portfolio-img-6.jpg" alt="" class="img-fluid w-100">
                            <div class="portfolio-overlay">
                                <a href="projects-detail.html"
                                    class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">BRAND 3</h3>
                            <div class="hstack gap-2">
                                <span class="badge text-dark border">CHARGER</span>
                                <span class="badge text-dark border">CABLE</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="400"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="../assets/images/portfolio/portfolio-img-3.jpg" alt="" class="img-fluid w-100">
                            <div class="portfolio-overlay">
                                <a href="projects-detail.html"
                                    class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">BRAND 4</h3>
                            <div class="hstack gap-2">
                                <span class="badge text-dark border">VACUUM CLEANER</span>
                                <span class="badge text-dark border">VACUUM CLEANER ACCESSORIES</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="500"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="../assets/images/portfolio/portfolio-img-1.jpg" alt="" class="img-fluid w-100">
                            <div class="portfolio-overlay">
                                <a href="projects-detail.html"
                                    class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">BRAND 5</h3>
                            <div class="hstack gap-2">
                                <span class="badge text-dark border">SMARTWATCH</span>
                                <span class="badge text-dark border">SMARTWATCH CHARGER</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="600"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative overflow-hidden">
                            <img src="../assets/images/portfolio/portfolio-img-2.jpg" alt="" class="img-fluid w-100">
                            <div class="portfolio-overlay">
                                <a href="projects-detail.html"
                                    class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">BRAND 6</h3>
                            <div class="hstack gap-2">
                                <span class="badge text-dark border">SMART HOME</span>
                                <span class="badge text-dark border">WIFI</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection