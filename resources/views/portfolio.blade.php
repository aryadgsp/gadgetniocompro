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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const items = document.querySelectorAll("#portfolioRow .col-lg-4");
        const loadMoreBtn = document.getElementById("loadMore");
        const itemsPerClick = 6;
        let visibleCount = itemsPerClick;

        // Sembunyikan item selain yang pertama
        items.forEach((item, index) => {
            if (index >= visibleCount) item.style.display = "none";
        });

        loadMoreBtn.addEventListener("click", function() {
            const hiddenItems = Array.from(items).slice(visibleCount, visibleCount + itemsPerClick);

            hiddenItems.forEach((item) => {
                item.style.display = "block";
                item.style.animation = "fadeIn 0.4s ease"; // animasi ringan
            });

            visibleCount += itemsPerClick;

            // Jika semua item sudah tampil, sembunyikan tombol
            if (visibleCount >= items.length) {
                loadMoreBtn.style.display = "none";
            }
        });
    });
</script>

<style>
    /* Animasi muncul halus */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!--  Page Wrapper -->
<div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
        style="background-image: url(../assets/images/backgrounds/portfolio-banner.jpg);">
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
            <div class="row" id="portfolioRow">
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ugreen.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable</h5>
                                <h5>Powerbank</h5>
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
                            <img src="../assets/images/portfolio/lenovo.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Wireless Speaker</h5>
                                <a href="/partner/lenovo"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">LENOVO</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/vention.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>USB Cable & Dongle</h5>
                                <h5>HDMI Cable</h5>
                                <a href="/partner/vention"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">VENTION</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/aqua.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Vacuum Cleaner</h5>
                                <a href="/partner/aqua"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">AQUA</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/baseus.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Earphone & TWS</h5>
                                <h5>USB Cable</h5>
                                <a href="/partner/baseus"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">BASEUS</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/bodimax.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Treadmill Pad</h5>
                                <h5>Static Bike</h5>
                                <h5>Gym Accessories</h5>
                                <a href="/partner/bodimax"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">BODIMAX</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/deerma.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Vacuum Cleaner</h5>
                                <h5>Dehumidifier</h5>
                                <a href="/partner/deerma"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">DEERMA</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/kiip.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger & USB Cable</h5>
                                <h5>Earphone</h5>
                                <h5>Powerbank</h5>
                                <a href="/partner/kiip"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">KIIP</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/ksmith.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Treadmill</h5>
                                <h5>Gym Equipment</h5>
                                <a href="/partner/ksmith"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">KING SMITH</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/lenyes.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Powerbank</h5>
                                <h5>Audio Gadget</h5>
                                <h5>Tripod</h5>
                                <a href="/partner/lenyes"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">LENYES</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/levoit.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Air Purifier</h5>
                                <a href="/partner/levoit"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">LEVOIT</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/mcdodo.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger & USB Cable</h5>
                                <h5>Powerbank</h5>
                                <h5>Earphone</h5>
                                <a href="/partner/mcdodo"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">MCDODO</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/memo.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Cooling Fan</h5>
                                <h5>Game Pad</h5>
                                <h5>Gaming Gadget</h5>
                                <a href="/partner/memo"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">MEMO</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/notale.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Vacuum Cleaner</h5>
                                <h5>Dehumidifier</h5>
                                <h5>Air Purifier</h5>
                                <a href="/partner/notale"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">NOTALE</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/philips.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Massage Equipment</h5>
                                <a href="/partner/philips"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">PHILIPS</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/rabit.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>CCTV</h5>
                                <h5>Smart Bulb</h5>
                                <h5>Memory Card</h5>
                                <a href="/partner/rabit"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">RABIT</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/rapa.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Charger</h5>
                                <h5>Powerbank</h5>
                                <h5>Tempered Glass</h5>
                                <a href="/partner/rapa"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">RAPA TECH</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/rtaylors.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Toaster</h5>
                                <h5>Hair Dryer</h5>
                                <h5>Body Fat Scale</h5>
                                <a href="/partner/rtaylors"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">RUSSEL TAYLORS</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/taffware.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Home Appliances</h5>
                                <h5>Computer Peripherals & Accessories</h5>
                                <a href="/partner/taffware"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">TAFFWARE</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/thinkplus.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Earphone</h5>
                                <h5>Speaker</h5>
                                <a href="/partner/thinkplus"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">THINKPLUS</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/uwant.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Vacuum Cleaner</h5>
                                <a href="/partner/uwant"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">UWANT</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/wanbo.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Projector</h5>
                                <a href="/partner/wanbo"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">WANBO</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/welby.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Electric Toothbrush</h5>
                                <a href="/partner/welby"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">WELBY</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-7">
                    <div class="portfolio d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <div class="portfolio-img position-relative">
                            <img src="../assets/images/portfolio/yesoul.png" alt="" class="img-fluid w-100">

                            <div class="portfolio-overlay"></div>

                            <div class="portfolio-content">
                                <h5>Treadmill</h5>
                                <h5>Spinning Bike</h5>
                                <h5>Gym Equipment</h5>
                                <a href="/partner/yesoul"
                                    class="bg-primary round-64 rounded-circle hstack justify-content-center d-inline-flex"
                                    style="width:48px; height:48px;">
                                    <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-white"></iconify-icon>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-details d-flex flex-column gap-3">
                            <h3 class="mb-0">YESOUL</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <button id="loadMore" class="btn btn-primary px-4 py-2 rounded-3 text-white">
                    Load More
                </button>
            </div>
        </div>
    </section>

</div>

@endsection