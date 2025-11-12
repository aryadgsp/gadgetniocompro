@extends('layouts.app')
@section('content')

<!--  Page Wrapper -->
<div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section position-relative d-flex align-items-end min-vh-100">
        <video class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" autoplay muted loop playsinline>
            <source src="../assets/images/backgrounds/banner-video.mp4" type="video/mp4" />
        </video>
        <div class="container">
            <div class="d-flex flex-column gap-4 pb-8 position-relative z-1">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <img src="../assets/images/logos/logo for spin.svg" alt="" class="img-fluid animate-spin">
                            <p class="mb-0 text-white fs-5 text-opacity-70">We <span
                                    class="text-primary">Empowering Your Digital Lifestyle.</span> Your trusted electronic and gadget distributor,
                                connecting world-class brands with the Indonesian market.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <h1 class="mb-0 fs-16 text-white lh-1">Gadgetnio Group.</h1>
                </div>
            </div>
        </div>
    </section>

    <!--  Stats & Facts Section -->
    <section class="stats-facts py-5 py-lg-11 py-xl-12 position-relative overflow-hidden">
        <div class="container">
            <div class="row gap-7 gap-xl-0">
                <div class="col-xl-4 col-xxl-4">
                    <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000">
                        <span
                            class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">01</span>
                        <hr class="border-line">
                        <span class="badge text-bg-dark">Stats & facts</span>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-7">
                    <div class="d-flex flex-column gap-9">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0">Our Numbers Speaks for Themselves.</h2>
                                    <p class="fs-5 mb-0">We deliver innovative gadgets and high-quality
                                        electronics to help people and businesses stay ahead in a fast-changing digital world.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                                <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up" data-aos-delay="200"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0 fs-14"><span class="count" data-target="40">500</span>+</h2>
                                    <p class="mb-0">Business Partners</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                                <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up" data-aos-delay="300"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0 fs-14"><span class="count" data-target="238">50</span>K+</h2>
                                    <p class="mb-0">Products Distributed</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                                <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up" data-aos-delay="400"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0 fs-14"><span class="count" data-target="3">10</span>+</h2>
                                    <p class="mb-0">Years of Experience</p>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="about-us.html" class="btn" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                            <span class="btn-text">Who we are</span>
                            <iconify-icon icon="lucide:arrow-up-right"
                                class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
                        </a> -->
                    </div>
                </div>
                <div class="d-flex flex-column gap-8 mt-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="marquee w-100 d-flex align-items-center overflow-hidden">
                        <div class="marquee-content d-flex align-items-center gap-8">
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-ugreen.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-vention.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-ugreen.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-vention.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-ugreen.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-vention.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-ugreen.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-vention.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-ugreen.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-vention.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-ugreen.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-vention.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-ugreen.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-vention.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-ugreen.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-vention.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-ugreen.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-vention.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-ugreen.svg" alt="partners" class="img-fluid">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="../assets/images/pricing/running-vention.svg" alt="partners" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 start-0" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
            <img src="../assets/images/backgrounds/stats-facts-bg.svg" alt="" class="img-fluid">
        </div>
    </section>

    <!--  Featured Projects Section -->
    <!-- <section class="featured-projects py-5 py-lg-11 py-xl-12 bg-light-gray">
        <div class="d-flex flex-column gap-5 gap-xl-11">
            <div class="container">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">02</span>
                            <hr class="border-line">
                            <span class="badge text-bg-dark">Brands</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0 fs-11">Trusted By Leading Brands</h2>
                                    <p class="fs-5 mb-0">We proudly distribute and collaborate with top-tier
                                        brands in the electronics and gadget industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featured-projects-slider px-3">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="portfolio d-flex flex-column gap-6">
                            <div class="portfolio-img position-relative overflow-hidden">
                                <img src="../assets/images/portfolio/portfolio-img-1.jpg" alt="" class="img-fluid">
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
                    <div class="item">
                        <div class="portfolio d-flex flex-column gap-6">
                            <div class="portfolio-img position-relative overflow-hidden">
                                <img src="../assets/images/portfolio/portfolio-img-2.jpg" alt="" class="img-fluid">
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
                    <div class="item">
                        <div class="portfolio d-flex flex-column gap-6">
                            <div class="portfolio-img position-relative overflow-hidden">
                                <img src="../assets/images/portfolio/portfolio-img-3.jpg" alt="" class="img-fluid">
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
                    <div class="item">
                        <div class="portfolio d-flex flex-column gap-6">
                            <div class="portfolio-img position-relative overflow-hidden">
                                <img src="../assets/images/portfolio/portfolio-img-4.jpg" alt="" class="img-fluid">
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
                    <div class="item">
                        <div class="portfolio d-flex flex-column gap-6">
                            <div class="portfolio-img position-relative overflow-hidden">
                                <img src="../assets/images/portfolio/portfolio-img-5.jpg" alt="" class="img-fluid">
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
                    <div class="item">
                        <div class="portfolio d-flex flex-column gap-6">
                            <div class="portfolio-img position-relative overflow-hidden">
                                <img src="../assets/images/portfolio/portfolio-img-6.jpg" alt="" class="img-fluid">
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
                                    <span class="badge text-dark border">SMARTHOME</span>
                                    <span class="badge text-dark border">WIFI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!--  Services Section -->
    <section class="services py-5 py-lg-11 py-xl-12 bg-light-gray" id="services">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-10">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">02</span>
                            <hr class="border-line bg-white">
                            <span class="badge text-white bg-dark">What We Do</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0">Delivering Technology, Connecting People</h2>
                                    <p class="fs-5 mb-0 text-opacity-70">Gadgetnio Group offers comprehensive distribution and supply solutions
                                        for both businesses and consumers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="services-tab">
                    <div class="row gap-5 gap-xl-0">
                        <div class="col-xl-4">
                            <div class="tab-content" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                                <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="one-tab" tabindex="0">
                                    <img src="../assets/images/services/services-img-1.jpg" alt="services" class="img-fluid">
                                </div>
                                <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab" tabindex="0">
                                    <img src="../assets/images/services/services-img-2.jpg" alt="services" class="img-fluid">
                                </div>
                                <div class="tab-pane" id="three" role="tabpanel" aria-labelledby="three-tab" tabindex="0">
                                    <img src="../assets/images/services/services-img-3.jpg" alt="services" class="img-fluid">
                                </div>
                                <div class="tab-pane" id="four" role="tabpanel" aria-labelledby="four-tab" tabindex="0">
                                    <img src="../assets/images/services/services-img-4.jpg" alt="services" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="d-flex flex-column gap-5">
                                <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-delay="200"
                                    data-aos-duration="1000">
                                    <li
                                        class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 active text-black"
                                                    id="one-tab" data-bs-toggle="tab" data-bs-target="#one" type="button" role="tab"
                                                    aria-controls="one" aria-selected="true">Gadget & Electronics Distribution</button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-black text-opacity-70 mb-0">
                                                    We connect leading technology brands with the market through a reliable, 
                                                    scalable, and data-driven distribution network — ensuring every innovation 
                                                    reaches the right hands.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 text-black" id="two-tab"
                                                    data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab" aria-controls="two"
                                                    aria-selected="false">Retail & Wholesale Partnerships</button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-black text-opacity-70 mb-0">
                                                    From retail chains to independent resellers, we build strong partnerships 
                                                    that empower business growth and enhance market reach with flexible and profitable collaboration models.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 text-black"
                                                    id="three-tab" data-bs-toggle="tab" data-bs-target="#three" type="button" role="tab"
                                                    aria-controls="three" aria-selected="false">Efficient Logistics & After-Sales Support</button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-black text-opacity-70 mb-0">
                                                    With streamlined logistics and responsive after-sales service, we guarantee on-time delivery, 
                                                    product integrity, and customer satisfaction across every touchpoint.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 text-black"
                                                    id="four-tab" data-bs-toggle="tab" data-bs-target="#four" type="button" role="tab"
                                                    aria-controls="four" aria-selected="false">Corporate Procurement Solutions</button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-black text-opacity-70 mb-0">
                                                    We provide tailored procurement services for corporations — delivering high-quality gadgets, 
                                                    competitive pricing, and seamless processes to meet your organizational needs.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="/portfolio" class="btn border border-white border-opacity-25" data-aos="fade-up"
                                    data-aos-delay="300" data-aos-duration="1000">
                                    <span class="btn-text text-white">See Our Partners</span>
                                    <iconify-icon icon="lucide:arrow-up-right"
                                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="services-tab">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="d-flex flex-column gap-5">
                                <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-delay="200"
                                    data-aos-duration="1000">
                                    <li
                                        class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 active text-black"
                                                    id="one-tab" data-bs-toggle="tab" data-bs-target="#one" type="button" role="tab"
                                                    aria-controls="one" aria-selected="true">Gadget & Electronics Distribution</button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-black text-opacity-70 mb-0">
                                                    We connect leading technology brands with the market through a reliable,
                                                    scalable, and data-driven distribution network — ensuring every innovation
                                                    reaches the right hands.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 text-black"
                                                    id="two-tab" data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab"
                                                    aria-controls="two" aria-selected="false">Retail & Wholesale Partnerships</button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-black text-opacity-70 mb-0">
                                                    From retail chains to independent resellers, we build strong partnerships
                                                    that empower business growth and enhance market reach with flexible and profitable collaboration models.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 text-black"
                                                    id="three-tab" data-bs-toggle="tab" data-bs-target="#three" type="button" role="tab"
                                                    aria-controls="three" aria-selected="false">Efficient Logistics & After-Sales Support</button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-black text-opacity-70 mb-0">
                                                    With streamlined logistics and responsive after-sales service, we guarantee on-time delivery,
                                                    product integrity, and customer satisfaction across every touchpoint.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                                        role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 text-black"
                                                    id="four-tab" data-bs-toggle="tab" data-bs-target="#four" type="button" role="tab"
                                                    aria-controls="four" aria-selected="false">Corporate Procurement Solutions</button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-black text-opacity-70 mb-0">
                                                    We provide tailored procurement services for corporations — delivering high-quality gadgets,
                                                    competitive pricing, and seamless processes to meet your organizational needs.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <!-- Tombol di tengah -->
                                <div class="d-flex justify-content-center">
                                    <a href="/portfolio" class="btn border border-white border-opacity-25" data-aos="fade-up"
                                        data-aos-delay="300" data-aos-duration="1000">
                                        <span class="btn-text text-white">See Our Partners</span>
                                        <iconify-icon icon="lucide:arrow-up-right"
                                            class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Why choose us Section -->
    <section class="why-choose-us py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="row justify-content-between gap-5 gap-xl-0">
                <div class="col-xl-3 col-xxl-3">
                    <div class="d-flex flex-column gap-7">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">03</span>
                            <hr class="border-line">
                            <span class="badge text-bg-dark">Why Choose Us</span>
                        </div>
                        <h2 class="mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Why Trust Gadgetnio Group</h2>
                        <p class="mb-0 fs-5" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">At Gadgetnio Group,
                            we believe trust is earned through consistency, quality, and commitment.</p>
                    </div>
                </div>
                <div class="col-xl-9 col-xxl-8">
                    <div class="row">
                        <div class="col-lg-4 mb-7 mb-lg-0">
                            <div class="card position-relative overflow-hidden bg-primary h-100" data-aos="fade-up"
                                data-aos-delay="100" data-aos-duration="1000">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div class="d-flex flex-column gap-3 position-relative z-1">
                                        <ul class="list-unstyled mb-0 hstack gap-1">
                                            <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                                        class="fs-6 text-white"></iconify-icon></a></li>
                                            <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                                        class="fs-6 text-white"></iconify-icon></a></li>
                                            <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                                        class="fs-6 text-white"></iconify-icon></a></li>
                                            <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                                        class="fs-6 text-white"></iconify-icon></a></li>
                                            <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                                        class="fs-6 text-white"></iconify-icon></a></li>
                                        </ul>
                                        <p class="mb-0 fs-6 text-white">Responsive, dedicated, and customer-focused.
                                        </p>
                                    </div>
                                    <div class="position-relative z-1">
                                        <div class="pb-6 border-bottom">
                                            <h2 class="mb-0 text-white">98.6%</h2>
                                            <p class="mb-0 text-white">Customer satisfaction</p>
                                        </div>
                                        <div class="hstack gap-6 pt-6">
                                            <img src="../assets/images/profile/avatar-1.png" alt=""
                                                class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="64" height="64">
                                            <div>
                                                <h5 class="mb-0 text-white">Wade Warren</h5>
                                                <p class="mb-0 text-white">Gadgetnio Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-absolute bottom-0 end-0">
                                        <img src="../assets/images/backgrounds/customer-satisfaction-bg.svg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-7 mb-lg-0">
                            <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <div class="position-relative">
                                    <img src="../assets/images/services/services-img-2.jpg" alt="" class="img-fluid w-100">
                                </div>

                                <div class="card bg-dark">
                                    <div class="card-body d-flex flex-column gap-7">
                                        <div>
                                            <h2 class="mb-0 text-white">500+</h2>
                                            <p class="mb-0 text-white text-opacity-80">Business Partners</p>
                                        </div>
                                        <ul class="d-flex align-items-center mb-0">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <img src="../assets/images/profile/user-1.jpg" width="44" height="44"
                                                        class="rounded-circle border border-2 border-dark" alt="user-1">
                                                </a>
                                            </li>
                                            <li class="ms-n2">
                                                <a href="javascript:void(0)">
                                                    <img src="../assets/images/profile/user-2.jpg" width="44" height="44"
                                                        class="rounded-circle border border-2 border-dark" alt="user-2">
                                                </a>
                                            </li>
                                            <li class="ms-n2">
                                                <a href="javascript:void(0)">
                                                    <img src="../assets/images/profile/user-3.jpg" width="44" height="44"
                                                        class="rounded-circle border border-2 border-dark" alt="user-3">
                                                </a>
                                            </li>
                                            <li class="ms-n2">
                                                <a href="javascript:void(0)">
                                                    <img src="../assets/images/profile/user-4.jpg" width="44" height="44"
                                                        class="rounded-circle border border-2 border-dark" alt="user-4">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-7 mb-lg-0">
                            <div class="card border h-100 position-relative overflow-hidden" data-aos="fade-up" data-aos-delay="300"
                                data-aos-duration="1000">
                                <span
                                    class="border rounded-circle round-490 d-block position-absolute top-0 start-50 translate-middle"></span>
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <h2 class="mb-0 text-dark">238+</h2>
                                        <p class="mb-0 text-dark">Brands served worldwide</p>
                                    </div>
                                    <div class="d-flex flex-column gap-3">
                                        <a href="/" class="logo-dark text-decoration-none fw-bold text-dark" style="font-size: 2.2rem;">
                                            Gadgetnio Group.
                                        </a>
                                        <p class="mb-0 fs-5 text-dark">We value long-term collaboration built on trust and performance.</p>
                                    </div>
                                </div>
                                <span
                                    class="border rounded-circle round-490 d-block position-absolute top-100 start-50 translate-middle"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Testimonial Section -->
    <section class="testimonial py-5 py-lg-11 py-xl-12 bg-light-gray">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-11">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">04</span>
                            <hr class="border-line bg-white">
                            <span class="badge text-bg-dark">Testimonial</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0">What Our Partners Say</h2>
                                    <p class="fs-5 mb-0 text-opacity-70">Real experiences, genuine feedback—discover how our creative
                                        solutions have transformed brands and elevated businesses.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gap-7 gap-lg-0">
                    <div class="col-lg-4 col-xl-3 d-flex align-items-stretch">
                        <div class="card w-100" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <div class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between">
                                <div class="d-flex flex-column gap-4">
                                    <p class="mb-0 text-black">Hear from them</p>
                                    <h4 class="mb-0 text-black">Support team is responsive and helpful, it feels like we’re working with a true partner!</h4>
                                </div>
                                <div class="hstack gap-3">
                                    <img src="../assets/images/testimonial/testimonial-1.jpg" alt=""
                                        class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="60" height="60">
                                    <div>
                                        <h5 class="mb-1 text-black fw-normal">Albert Flores</h5>
                                        <p class="mb-0 text-black">Affiliate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-6 d-flex align-items-stretch">
                        <div class="card bg-dark w-100" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <div class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between">
                                <div class="d-flex flex-column gap-4">
                                    <p class="mb-0 text-white text-opacity-70">Hear from them</p>
                                    <h4 class="mb-0 text-white pe-xl-2">Gadgetnio Group has been an incredible distribution partner. Their reliability and professionalism make our business smoother than ever!</h4>
                                    <!-- <div class="hstack gap-2">
                                        <ul class="list-unstyled mb-0 hstack gap-1">
                                            <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                                        class="fs-6 text-white"></iconify-icon></a></li>
                                            <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                                        class="fs-6 text-white"></iconify-icon></a></li>
                                            <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                                        class="fs-6 text-white"></iconify-icon></a></li>
                                            <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                                                        class="fs-6 text-white"></iconify-icon></a></li>
                                            <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                                                        class="fs-6 text-white"></iconify-icon></a></li>
                                        </ul>
                                        <h6 class="mb-0 text-white fw-medium">4.0</h6>
                                    </div> -->
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3">
                                        <img src="../assets/images/testimonial/testimonial-2.jpg" alt=""
                                            class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="60" height="60">
                                        <div>
                                            <h5 class="mb-1 fw-normal text-white">Robert Fox</h5>
                                            <p class="mb-0 text-white text-opacity-70">TechMart Indonesia</p>
                                        </div>
                                    </div>
                                    <span><img src="../assets/images/testimonial/quete.svg" alt="quete"
                                            class="img-fluid flex-shrink-0"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3 d-flex align-items-stretch">
                        <div class="card w-100" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <div class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between">
                                <div class="d-flex flex-column gap-4">
                                    <p class="mb-0">Hear from them</p>
                                    <h4 class="mb-0">Partnering with Gadgetnio Group helped us expand faster across multiple regions!</h4>
                                </div>
                                <div class="hstack gap-3">
                                    <img src="../assets/images/testimonial/testimonial-3.jpg" alt=""
                                        class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="60" height="60">
                                    <div>
                                        <h5 class="mb-1 fw-normal">Jenny Wilson</h5>
                                        <p class="mb-0">TechPro Indonesia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  FAQ Section -->
    <section class="faq py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-11">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">05</span>
                            <hr class="border-line bg-white">
                            <span class="badge text-bg-dark">FAQs</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-9">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0">Frequently asked questions</h2>
                                    <p class="fs-5 mb-0 text-opacity-70">Discover how we tailor our solutions to meet unique needs,
                                        delivering impactful strategies, personalized branding, and exceptional customer experiences.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-xl-8">
                        <div class="accordion accordion-flush" id="accordionFlushExample" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1000">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fs-8 fw-bold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Do you sell directly to consumers?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0 fs-5 text-black">We primarily serve as a distributor for retailers
                                        and corporations. However, selected consumer purchases may be available through our partners.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fs-8 fw-bold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        How can I become a partner?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0 fs-5 text-black">Simply contact us through our website form or email.
                                        Our partnership team will guide you through the onboarding process.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fs-8 fw-bold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Where does Gadgetnio Group operate?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0 fs-5 text-black">We serve partners and customer across all major cities in Indonesia. We’re open for partnerships with global brands.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fs-8 fw-bold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        What types of products do you distribute?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0 fs-5 text-black">We distribute a wide range of electronics and gadgets
                                        — including Phone Accessories and Smart Devices from leading global brand.</div>
                                </div>
                            </div>
                            <div class="accordion-item border-bottom">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fs-8 fw-bold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Does Gadgetnio Group offer an affiliate program?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0 fs-5 text-black">Yes. We provide an affiliate partnership program that allows
                                        individuals and businesses to earn commissions by promoting and referring our products.
                                        Contact our team to learn more about the registration process and commission structure.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Get in touch Section -->
    <section class="get-in-touch py-5 py-lg-11 py-xl-12 bg-light-gray">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-10">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000">
                            <span
                                class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">06</span>
                            <hr class="border-line bg-white">
                            <span class="badge text-bg-dark">Contact us</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0">Get in touch</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between gap-7 gap-xl-0">
                    <div class="col-xl-3">
                        <p class="mb-0 fs-5" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Let’s collaborate
                            and create something amazing! Tell me about your product—We all
                            ears.</p>
                    </div>
                    <div class="col-xl-8">
                        <form class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <div>
                                <input type="text" class="form-control border-bottom border-dark" id="formGroupExampleInput"
                                    placeholder="Name">
                            </div>
                            <div>
                                <input type="tel" class="form-control border-bottom border-dark"
                                    id="exampleInputPhone" placeholder="Phone" aria-describedby="phoneHelp">
                            </div>
                            <div>
                                <input type="email" class="form-control border-bottom border-dark" id="exampleInputEmail1"
                                    placeholder="Email" aria-describedby="emailHelp">
                            </div>
                            <div>
                                <textarea class="form-control border-bottom border-dark" id="exampleFormControlTextarea1"
                                    placeholder="Tell us about your project/offer" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn w-100 justify-content-center">
                                <span class="btn-text text-white">Submit message</span>
                                <iconify-icon icon="lucide:arrow-up-right"
                                    class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection