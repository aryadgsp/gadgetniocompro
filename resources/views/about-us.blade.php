@extends('layouts.app')
@section('content')

<!--  Page Wrapper -->
<div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
        style="background-image: url(../assets/images/backgrounds/aboutus-banner.jpg);">
        <div class="container">
            <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <img src="../assets/images/logos/logo for spin.svg" alt="" class="img-fluid animate-spin">
                            <p class="mb-0 text-white fs-5 text-opacity-70">We <span class="text-primary">Empowering Your Digital Lifestyle.</span> Your trusted electronic and gadget distributor,
                                connecting world-class brands with the Indonesian market.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <h1 class="mb-0 fs-16 text-white lh-1">About us</h1>
                </div>
            </div>
        </div>
    </section>

    <!--  About Content Section -->
    <section class="about-content py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-11 gap-xxl-12">
                <div class="row gap-4 gap-lg-0">
                    <div class="col-lg-4">
                        <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Gadgetnio.</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1000">
                            <p class="mb-0 fs-5 text-dark">
                                Gadgetnio Group is a leading electronics and gadget distributor in Indonesia,
                                connecting world-class brands with local markets. We specialize in delivering
                                high-quality products, efficient logistics, and long-term partnerships that empower
                                retailers, resellers, and corporate clients to grow in today’s digital era.
                            </p>
                            <p class="mb-0 fs-5 text-dark">
                                With years of experience and a strong nationwide network, we’ve built our reputation on trust,
                                authenticity, and innovation. Whether it’s the latest smartphones or essential electronic devices,
                                Gadgetnio Group ensures every product and partnership meets the highest standards of reliability.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gx-xl-5">
                    <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                        <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="45">500</span>+</h2>
                            <div class="d-flex flex-column gap-3">
                                <h4 class="mb-0">Business Partners</h4>
                                <p class="mb-0">Collaborating with more than 500 retailers, resellers, and corporate clients nationwide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                        <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="15">500</span>K+</h2>
                            <div class="d-flex flex-column gap-3">
                                <h4 class="mb-0">Products Distributed</h4>
                                <p class="mb-0">Delivering over a thousand high-quality gadgets and electronic devices to the market.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                        <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="158">10</span>+</h2>
                            <div class="d-flex flex-column gap-3">
                                <h4 class="mb-0">Years of Experience</h4>
                                <p class="mb-0">Over a decade of trusted service in Indonesia’s electronics and gadget distribution industry.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  About Img Section -->
    <section class="about-img">
        <img src="../assets/images/about/about-img.jpg" alt="" class="w-100 object-fit-cover">
        <div class="marquee w-100 d-flex align-items-center overflow-hidden bg-primary py-4">
            <div class="marquee-content d-flex align-items-center gap-8">
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Integrity</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Innovation</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Partnership</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Customer Focus</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Integrity</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Innovation</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Partnership</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Customer Focus</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Integrity</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Innovation</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Partnership</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Customer Focus</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Integrity</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Innovation</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Partnership</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Customer Focus</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Integrity</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Innovation</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Partnership</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Customer Focus</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Integrity</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Innovation</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Partnership</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0">Customer Focus</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection