@extends('layouts.app')
@section('content')
<style>
    .portfolio-img {
        position: relative;
        overflow: hidden;
    }

    .portfolio-img img {
        transition: transform 0.6s ease;
    }

    .portfolio-img:hover img {
        transform: scale(1.1);
    }

    /* overlay background */
    .portfolio-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.6);
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    /* teks dan tombol */
    .portfolio-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) translateY(20px);
        text-align: center;
        opacity: 0;
        transition: all 0.5s ease;
    }

    .portfolio-content h5 {
        color: #ffffff;
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 6px;
        letter-spacing: 0.3px;
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
    }

    .portfolio-content a {
        margin-top: 10px;
    }

    /* hover state */
    .portfolio-img:hover .portfolio-overlay {
        opacity: 1;
    }

    .portfolio-img:hover .portfolio-content {
        opacity: 1;
        transform: translate(-50%, -50%) translateY(0);
    }
</style>
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
                            <img src="../assets/images/logos/logo for spin.svg" alt="" class="img-fluid animate-spin">
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
                <p class="text-white fw-semibold mb-2" style="
                    background-color: #008CFF;
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
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/ugreen"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UGREEN</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection