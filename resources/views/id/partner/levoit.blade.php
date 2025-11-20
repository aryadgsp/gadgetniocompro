@extends('layoutsindo.app')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-0">
            <source src="../../assets/images/portfolio/levoit-banner.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Overlay (opsional agar teks tetap terbaca) -->
        <div class="container position-relative z-2">
            <div class="d-flex flex-column gap-4 pb-5 pb-xl-10">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <img src="../../assets/images/logos/logo for spin.svg" alt="" class="img-fluid animate-spin">
                            <p class="mb-0 text-white fs-5 text-opacity-70">
                                Di Gadgetnio Group, <span class="text-primary">kami bangga berkolaborasi dengan berbagai brand ternama.</span>
                                Kami menghadirkan solusi inovatif ini lebih dekat kepada konsumen dan pelaku bisnis di seluruh Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <h1 class="mb-0 fs-16 text-white lh-1">LEVOIT</h1>
                    <a href="https://levoit.com/" class="p-1 ps-7 bg-primary rounded-pill">
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
                        <span class="btn-text pe-1 text-white">Kembali</span>
                        <iconify-icon icon="lucide:arrow-up-right"
                            class="btn-icon bg-white text-dark round-36 rounded-circle hstack justify-content-center fs-5 shadow-sm"></iconify-icon>
                    </a>
                    <div class="d-md-flex align-items-center gap-4 gap-lg-8" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <div class="d-flex flex-column gap-2 py-2 pe-4 pe-lg-8 border-end">
                            <p class="mb-0">Cakupan Produk</p>
                            <p class="mb-0 text-dark fs-5 fw-medium">Air Purifier</p>
                        </div>
                        <div class="d-flex flex-column gap-2 py-2">
                            <p class="mb-0">Website</p>
                            <p class="mb-0 fs-5 fw-medium">
                                <a href="https://www.levoit.com" target="_blank" class="text-dark text-decoration-none link-hover">
                                    levoit.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row gap-4 gap-lg-0">
                    <div class="col-lg-4">
                        <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                            Menghirup Udara Lebih Bersih dengan Levoit
                        </h2>
                    </div>
                    <div class="col-lg-8">
                        <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <p class="fs-5 mb-6">
                                Levoit adalah brand global yang dikenal dengan teknologi pemurni udaranya, dirancang untuk meningkatkan kualitas udara dalam ruangan
                                dan mendukung gaya hidup yang lebih sehat. Melalui Gadgetnio, pemurni udara Levoit yang berperforma tinggi kini dapat diakses oleh rumah,
                                kantor, dan bisnis di seluruh Indonesia—membawa udara yang lebih bersih, segar, dan terfilter dengan sempurna di setiap lingkungan.
                            </p>

                            <h4>1. Filtrasi Canggih untuk Hidup Lebih Sehat</h4>
                            <p class="fs-5 mb-6">
                                Pemurni udara Levoit dilengkapi sistem filtrasi multi-layer, termasuk filter True HEPA,
                                yang mampu menangkap debu, alergen, asap, bulu hewan, hingga polutan udara lainnya.
                                Dirancang dengan operasi senyap dan tampilan modern, Levoit membantu menciptakan ruang yang lebih aman, bersih, dan nyaman.
                            </p>

                            <h4>2. Performa Terpercaya dengan Distribusi Seluruh Indonesia</h4>
                            <p class="fs-5 mb-0">
                                Didukung jaringan distribusi Gadgetnio yang terpercaya, produk Levoit tersedia secara nasional—menjamin keaslian perangkat,
                                pengiriman cepat, serta layanan purna jual yang dapat diandalkan bagi retailer maupun konsumen akhir.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-7" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <img src="../../assets/images/portfolio/portfolio-img-4.jpg" alt="services" class="w-100 object-fit-cover">
                    </div>
                    <div class="col-lg-6 mb-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <img src="../../assets/images/portfolio/portfolio-img-2.jpg" alt="services" class="w-100 object-fit-cover">
                    </div>
                    <div class="col-lg-6 mb-7" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <img src="../../assets/images/portfolio/portfolio-img-3.jpg" alt="services" class="w-100 object-fit-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection