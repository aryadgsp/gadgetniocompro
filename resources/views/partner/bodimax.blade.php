@extends('layouts.app')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
        style="background-image: url(../assets/images/portfolio/bodimax-banner.webp);">
        <div class="container position-relative z-2">
            <div class="d-flex flex-column gap-4 pb-5 pb-xl-10">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <img src="../assets/images/logos/logo for spin.svg" alt="" class="img-fluid animate-spin">
                            <p class="mb-0 text-white fs-5 text-opacity-70">
                                At Gadgetnio Group, <span class="text-primary">we’re proud to collaborate with many Brands.</span>
                                We bring these innovative solutions closer to consumers and businesses across Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <h1 class="mb-0 fs-16 text-white lh-1">BODIMAX</h1>
                    <a href="https://bodimax.co.id/" class="p-1 ps-7 bg-primary rounded-pill">
                        <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                            <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--  Project Detail Section -->
    <section class="project-detail py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-11">
                <div class="d-flex flex-column gap-8">
                    <a href="/portfolio" class="btn py-2 ps-3 pe-5" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <span class="btn-text pe-1 text-white">Back</span>
                        <iconify-icon icon="lucide:arrow-up-right"
                            class="btn-icon bg-white text-dark round-36 rounded-circle hstack justify-content-center fs-5 shadow-sm"></iconify-icon>
                    </a>
                    <div class="d-md-flex align-items-center gap-4 gap-lg-8" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <div class="d-flex flex-column gap-2 py-2 pe-4 pe-lg-8 border-end">
                            <p class="mb-0">Scope of Product</p>
                            <p class="mb-0 text-dark fs-5 fw-medium">Treadmill Pad, Static Bike, Gym Accessories</p>
                        </div>
                        <div class="d-flex flex-column gap-2 py-2 pe-4 pe-lg-8 border-end">
                            <p class="mb-0">Origin</p>
                            <p class="mb-0 text-dark fs-5 fw-medium">South Korea</p>
                        </div>
                        <div class="d-flex flex-column gap-2 py-2 pe-4 pe-lg-8 border-end">
                            <p class="mb-0">Partnership since</p>
                            <p class="mb-0 text-dark fs-5 fw-medium">2019</p>
                        </div>
                        <div class="d-flex flex-column gap-2 py-2">
                            <p class="mb-0">Website</p>
                            <p class="mb-0 fs-5 fw-medium">
                                <a href="https://www.bodimax.co.id" target="_blank" class="text-dark text-decoration-none link-hover">
                                    bodimax.co.id
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gap-4 gap-lg-0">
                    <div class="col-lg-4">
                        <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                            Elevating Fitness & Lifestyle Comfort with Bodimax
                        </h2>
                    </div>
                    <div class="col-lg-8">
                        <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <p class="fs-5 mb-6">
                                Bodimax is a versatile fitness and lifestyle brand committed to helping people stay active, healthy,
                                and connected. Through Gadgetnio, Bodimax brings its curated range of reliable products—USB cables,
                                earphones, TWS audio devices, treadmill pads, static bikes, and gym accessories—closer to customers
                                across Indonesia, offering a complete mix of technology and wellness solutions in one brand.
                            </p>
                            <h4>1. Essential Gear for Active Living</h4>
                            <p class="fs-5 mb-6">
                                From durable fitness equipment to high-quality audio and charging accessories,
                                Bodimax products are designed to support daily routines—whether you're working out, staying productive,
                                or simply enjoying your day. Practical, comfortable, and built to last.
                            </p>
                            <h4>2. Trusted Quality with Nationwide Availability</h4>
                            <p class="fs-5 mb-0">
                                With Gadgetnio’s reliable distribution network, Bodimax products are accessible across Indonesia,
                                ensuring genuine quality, fast delivery, and professional after-sales service for both retailers
                                and end consumers.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-7" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <img src="../assets/images/portfolio/portfolio-img-4.jpg" alt="services" class="w-100 object-fit-cover">
                    </div>
                    <div class="col-lg-6 mb-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <img src="../assets/images/portfolio/portfolio-img-2.jpg" alt="services" class="w-100 object-fit-cover">
                    </div>
                    <div class="col-lg-6 mb-7" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <img src="../assets/images/portfolio/portfolio-img-3.jpg" alt="services" class="w-100 object-fit-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection