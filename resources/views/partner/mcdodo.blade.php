@extends('layouts.app')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
        style="background-image: url(../assets/images/portfolio/mcdodo-banner.jpg);">
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
                    <h1 class="mb-0 fs-16 text-white lh-1">MCDODO</h1>
                    <a href="https://mcdodo.com/" class="p-1 ps-7 bg-primary rounded-pill">
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
                            <p class="mb-0 text-dark fs-5 fw-medium">Powerbank, Earphone, Charger, USB Cable, Gadget Accessories, ETC</p>
                        </div>
                        <div class="d-flex flex-column gap-2 py-2">
                            <p class="mb-0">Website</p>
                            <p class="mb-0 fs-5 fw-medium">
                                <a href="https://mcdodo.com/" target="_blank" class="text-dark text-decoration-none link-hover">
                                    mcdodo.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gap-4 gap-lg-0">
                    <div class="col-lg-4">
                        <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                            Smarter, Faster Charging with Mcdodo
                        </h2>
                    </div>
                    <div class="col-lg-8">
                        <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <p class="fs-5 mb-6">
                                Mcdodo is a forward-thinking tech accessories brand known for its smart charging innovations,
                                modern design, and high durability. Through Gadgetnio, Mcdodo’s lineup of powerbanks,
                                earphones, chargers, USB cables, and gadget accessories is now accessible across Indonesia—bringing
                                reliable performance and stylish functionality to everyday users.
                            </p>
                            <h4>1. Smart Technology for Everyday Convenience</h4>
                            <p class="fs-5 mb-6">
                                From intelligent fast-charging cables with auto power-off features to high-capacity powerbanks
                                and premium audio accessories, Mcdodo products are engineered to enhance your daily digital life.
                                Durable, practical, and designed with modern users in mind.
                            </p>
                            <h4>2. Quality You Can Trust, Distributed Nationwide</h4>
                            <p class="fs-5 mb-0">
                                With Gadgetnio’s extensive distribution network, Mcdodo products are available nationwide—ensuring
                                authentic quality, fast availability, and dependable after-sales support for both retailers and end consumers.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-7" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <img src="../assets/images/portfolio/mcdodo-product-1.jpg" alt="services" class="w-100 object-fit-cover">
                    </div>
                    <div class="col-lg-6 mb-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <img src="../assets/images/portfolio/mcdodo-product-2.jpg" alt="services" class="w-100 object-fit-cover">
                    </div>
                    <div class="col-lg-6 mb-7" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <img src="../assets/images/portfolio/mcdodo-product-3.jpg" alt="services" class="w-100 object-fit-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection