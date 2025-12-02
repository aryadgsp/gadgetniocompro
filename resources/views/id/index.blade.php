@extends('layoutsindo.app')
@section('content')

@php
use Illuminate\Support\Facades\File;
$images = File::files(public_path('assets/images/pricing'));
@endphp

<style>
    .marquee {
        position: relative;
        width: 100%;
        overflow: hidden;
        mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }

    .marquee-content {
        display: flex;
        align-items: center;
        gap: 4rem;
        animation: scroll-marquee 25s linear infinite;
    }

    @keyframes scroll-marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .marquee-tag img {
        max-height: 60px;
        object-fit: contain;
    }
</style>

<div class="page-wrapper overflow-hidden">

    <!-- Banner Section -->
    <section class="banner-section position-relative d-flex align-items-end min-vh-100">
        <video class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" autoplay muted loop playsinline>
            <source src="../assets/images/backgrounds/home-banner.mp4" type="video/mp4" />
        </video>
        <div class="container">
            <div class="d-flex flex-column gap-4 pb-8 position-relative z-1">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <img src="../assets/images/logos/logo for spin.svg" alt="" class="img-fluid animate-spin">
                            <p class="mb-0 text-white fs-5 text-opacity-70">
                                Kami <span class="text-primary">membawa pengalaman gaya hidup digital yang lebih praktis dan menyenangkan.</span>
                                Sebagai distributor elektronik dan gadget terpercaya, kami menghubungkan berbagai brand kelas dunia dengan pasar Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <h1 class="mb-0 fs-16 text-white lh-1">Gadgetnio Group.</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats & Facts Section -->
    <section class="stats-facts py-5 py-lg-11 py-xl-12 position-relative overflow-hidden">
        <div class="container">
            <div class="row gap-7 gap-xl-0">
                <div class="col-xl-4 col-xxl-4">
                    <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000">
                        <span
                            class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">01</span>
                        <hr class="border-line">
                        <span class="badge text-bg-dark">Statistik</span>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-7">
                    <div class="d-flex flex-column gap-9">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0">Data yang Berbicara.</h2>
                                    <p class="fs-5 mb-0">
                                        Kami menghadirkan gadget inovatif dan elektronik berkualitas, membantu individu maupun bisnis
                                        tetap maju dan relevan di tengah perkembangan dunia digital yang begitu cepat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                                <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up" data-aos-delay="200"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0 fs-14"><span class="count" data-target="40">20</span>+</h2>
                                    <p class="mb-0">Partner Bisnis</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                                <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up" data-aos-delay="300"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0 fs-14"><span class="count" data-target="238">5</span>Jt+</h2>
                                    <p class="mb-0">Produk Terdistribusi</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                                <div class="d-flex flex-column gap-6 pt-9 border-top" data-aos="fade-up" data-aos-delay="400"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0 fs-14"><span class="count" data-target="3">10</span>+</h2>
                                    <p class="mb-0">Tahun Pengalaman</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column gap-8 mt-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="marquee w-100 d-flex align-items-center overflow-hidden">
                        <div class="marquee-content d-flex align-items-center gap-8">
                            {{-- Loop pertama --}}
                            @foreach ($images as $image)
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('assets/images/pricing/' . $image->getFilename()) }}" alt="pricing image" class="img-fluid">
                            </div>
                            @endforeach

                            {{-- Loop kedua (duplikasi agar mulus saat transisi) --}}
                            @foreach ($images as $image)
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('assets/images/pricing/' . $image->getFilename()) }}" alt="pricing image" class="img-fluid">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 start-0" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
            <img src="../assets/images/backgrounds/stats-facts-bg.svg" alt="" class="img-fluid">
        </div>
    </section>

    <!-- Services Section -->
    <section class="services py-5 py-lg-11 py-xl-12 bg-light-gray" id="services">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-10">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2"
                            data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">02</span>
                            <hr class="border-line bg-white">
                            <span class="badge text-white bg-dark">Apa yang Kami Lakukan</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6"
                                    data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                    <h2 class="mb-0">Menghadirkan Teknologi, Menghubungkan Orang</h2>
                                    <p class="fs-5 mb-0 text-opacity-70">
                                        Gadgetnio Group menyediakan layanan distribusi dan suplai yang lengkap,
                                        mendukung kebutuhan bisnis maupun konsumen dengan solusi yang terpercaya.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="services-tab">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="d-flex flex-column gap-5">
                                <ul class="nav nav-tabs" id="myTab" role="tablist"
                                    data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">

                                    <!-- Tab 1 -->
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100" role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 active text-black"
                                                    id="one-tab" data-bs-toggle="tab" data-bs-target="#one" type="button"
                                                    role="tab" aria-controls="one" aria-selected="true">
                                                    Distribusi Gadget & Elektronik
                                                </button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-black text-opacity-70 mb-0">
                                                    Kami membantu brand teknologi terkemuka untuk menjangkau pasar melalui jaringan distribusi yang andal,
                                                    fleksibel, dan berbasis data — memastikan setiap inovasi sampai ke tangan yang tepat.
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Tab 2 -->
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100" role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 text-black"
                                                    id="two-tab" data-bs-toggle="tab" data-bs-target="#two" type="button"
                                                    role="tab" aria-controls="two" aria-selected="false">
                                                    Kemitraan Retail & Grosir
                                                </button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-black text-opacity-70 mb-0">
                                                    Mulai dari jaringan ritel hingga reseller independen, kami membangun kemitraan kuat
                                                    untuk mendorong pertumbuhan bisnis dan memperluas jangkauan pasar melalui model kolaborasi yang fleksibel dan menguntungkan.
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Tab 3 -->
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100" role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 text-black"
                                                    id="three-tab" data-bs-toggle="tab" data-bs-target="#three" type="button"
                                                    role="tab" aria-controls="three" aria-selected="false">
                                                    Logistik Efisien & Dukungan Purna Jual
                                                </button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-black text-opacity-70 mb-0">
                                                    Dengan sistem logistik yang efisien dan layanan purna jual yang responsif,
                                                    kami memastikan produk tiba tepat waktu, kualitas tetap terjaga, dan pelanggan mendapatkan pengalaman terbaik di setiap layanan.
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Tab 4 -->
                                    <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100" role="presentation">
                                        <div class="row w-100 align-items-center gx-3">
                                            <div class="col-lg-6 col-xxl-5">
                                                <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 text-black"
                                                    id="four-tab" data-bs-toggle="tab" data-bs-target="#four" type="button"
                                                    role="tab" aria-controls="four" aria-selected="false">
                                                    Solusi Pengadaan untuk Korporasi
                                                </button>
                                            </div>
                                            <div class="col-lg-6 col-xxl-7">
                                                <p class="text-black text-opacity-70 mb-0">
                                                    Kami menawarkan layanan pengadaan yang dirancang khusus untuk kebutuhan perusahaan —
                                                    menyediakan gadget berkualitas, harga yang kompetitif, dan proses yang mudah bagi organisasi Anda.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <!-- Button Center -->
                                <div class="d-flex justify-content-center">
                                    <a href="/id/portfolio" class="btn border border-white border-opacity-25"
                                        data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                                        <span class="btn-text text-white">Cek Partner Kami</span>
                                        <iconify-icon icon="lucide:arrow-up-right"
                                            class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                                        </iconify-icon>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Why choose us Section -->
    <section class="why-choose-us py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="row justify-content-between gap-5 gap-xl-0">

                <div class="col-xl-3 col-xxl-3">
                    <div class="d-flex flex-column gap-7">
                        <div class="d-flex align-items-center gap-7 py-2"
                            data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">03</span>
                            <hr class="border-line">
                            <span class="badge text-bg-dark">Mengapa Memilih Kami</span>
                        </div>

                        <h2 class="mb-0"
                            data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                            Mengapa Mempercayai Gadgetnio Group
                        </h2>

                        <p class="mb-0 fs-5"
                            data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                            Di Gadgetnio Group, kami percaya bahwa kepercayaan dibangun melalui konsistensi,
                            kualitas, dan komitmen.
                        </p>
                    </div>
                </div>

                <div class="col-xl-9 col-xxl-8">
                    <div class="row">

                        <!-- Card 1 -->
                        <div class="col-lg-4 mb-7 mb-lg-0">
                            <div class="card position-relative overflow-hidden bg-primary h-100"
                                data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                <div class="card-body d-flex flex-column justify-content-between">

                                    <div class="d-flex flex-column gap-3 position-relative z-1">
                                        <ul class="list-unstyled mb-0 hstack gap-1">
                                            <li><a class="hstack"><iconify-icon icon="solar:star-bold" class="fs-6 text-white"></iconify-icon></a></li>
                                            <li><a class="hstack"><iconify-icon icon="solar:star-bold" class="fs-6 text-white"></iconify-icon></a></li>
                                            <li><a class="hstack"><iconify-icon icon="solar:star-bold" class="fs-6 text-white"></iconify-icon></a></li>
                                            <li><a class="hstack"><iconify-icon icon="solar:star-bold" class="fs-6 text-white"></iconify-icon></a></li>
                                            <li><a class="hstack"><iconify-icon icon="solar:star-line-duotone" class="fs-6 text-white"></iconify-icon></a></li>
                                        </ul>

                                        <p class="mb-0 fs-6 text-white">
                                            Responsif, berdedikasi, dan berfokus pada kepuasan pelanggan.
                                        </p>
                                    </div>

                                    <div class="position-relative z-1">
                                        <div class="pb-6 border-bottom">
                                            <h2 class="mb-0 text-white">98%</h2>
                                            <p class="mb-0 text-white">Kepuasan pelanggan</p>
                                        </div>

                                        <div class="hstack gap-6 pt-6">
                                            <img src="../assets/images/profile/home-avatar-1.png" alt=""
                                                class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="64" height="64">
                                            <div>
                                                <h5 class="mb-0 text-white">Michael Sugianto</h5>
                                                <p class="mb-0 text-white">Pelanggan Gadgetnio</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="position-absolute bottom-0 end-0">
                                        <img src="../assets/images/backgrounds/customer-satisfaction-bg.svg" alt="" class="img-fluid">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-lg-4 mb-7 mb-lg-0">
                            <div class="d-flex flex-column gap-7"
                                data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">

                                <div class="position-relative">
                                    <img src="../assets/images/services/home-about-gadgetnio.jpg" alt="" class="img-fluid w-100">
                                </div>

                                <div class="card bg-dark">
                                    <div class="card-body d-flex flex-column gap-7">
                                        <div>
                                            <h2 class="mb-0 text-white">20+</h2>
                                            <p class="mb-0 text-white text-opacity-80">Partner Bisnis</p>
                                        </div>

                                        <ul class="d-flex align-items-center mb-0">
                                            <li><a><img src="../assets/images/profile/user-1.jpg" width="44" height="44" class="rounded-circle border border-2 border-dark"></a></li>
                                            <li class="ms-n2"><a><img src="../assets/images/profile/user-2.jpg" width="44" height="44" class="rounded-circle border border-2 border-dark"></a></li>
                                            <li class="ms-n2"><a><img src="../assets/images/profile/user-3.jpg" width="44" height="44" class="rounded-circle border border-2 border-dark"></a></li>
                                            <li class="ms-n2"><a><img src="../assets/images/profile/user-4.jpg" width="44" height="44" class="rounded-circle border border-2 border-dark"></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-lg-4 mb-7 mb-lg-0">
                            <div class="card border h-100 position-relative overflow-hidden"
                                data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">

                                <span class="border rounded-circle round-490 d-block position-absolute top-0 start-50 translate-middle"></span>

                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <h2 class="mb-0 text-dark">20+</h2>
                                        <p class="mb-0 text-dark">Brand dilayani secara global</p>
                                    </div>

                                    <div class="d-flex flex-column gap-3">
                                        <a href="/id" class="logo-dark text-decoration-none fw-bold text-dark" style="font-size: 2.2rem;">
                                            Gadgetnio Group.
                                        </a>
                                        <p class="mb-0 fs-5 text-dark">
                                            Kami menghargai kolaborasi jangka panjang yang dibangun dengan kepercayaan dan performa.
                                        </p>
                                    </div>
                                </div>

                                <span class="border rounded-circle round-490 d-block position-absolute top-100 start-50 translate-middle"></span>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial py-5 py-lg-11 py-xl-12 bg-light-gray">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-11">

                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2"
                            data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">04</span>
                            <hr class="border-line bg-white">
                            <span class="badge text-bg-dark">Testimoni</span>
                        </div>
                    </div>

                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6"
                                    data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                    <h2 class="mb-0">Apa Kata Partner Kami</h2>
                                    <p class="fs-5 mb-0 text-opacity-70">
                                        Pengalaman nyata dan feedback asli — lihat bagaimana solusi kami membantu brand berkembang
                                        dan meningkatkan performa bisnis mereka.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonials Row -->
                <div class="row gap-7 gap-lg-0">

                    <!-- Testimonial 1 -->
                    <div class="col-lg-4 col-xl-3 d-flex align-items-stretch">
                        <div class="card w-100"
                            data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <div class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between">

                                <div class="d-flex flex-column gap-4">
                                    <p class="mb-0 text-black">Feedback mereka</p>
                                    <h4 class="mb-0 text-black">
                                        Tim supportnya responsif dan sangat membantu — benar-benar terasa seperti bekerja dengan partner yang sesungguhnya!
                                    </h4>
                                </div>

                                <div class="hstack gap-3">
                                    <img src="../assets/images/testimonial/testimonial-1.png" alt=""
                                        class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="60" height="60">
                                    <div>
                                        <h5 class="mb-1 text-black fw-normal">Agung Rahmat</h5>
                                        <p class="mb-0 text-black">Affiliate</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="col-lg-4 col-xl-6 d-flex align-items-stretch">
                        <div class="card bg-dark w-100"
                            data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <div class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between">

                                <div class="d-flex flex-column gap-4">
                                    <p class="mb-0 text-white text-opacity-70">Feedback mereka</p>
                                    <h4 class="mb-0 text-white pe-xl-2">
                                        Gadgetnio Group adalah partner distribusi yang luar biasa.
                                        Keandalan dan profesionalisme mereka membuat operasional bisnis kami jauh lebih lancar!
                                    </h4>
                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3">
                                        <img src="../assets/images/testimonial/testimonial-2.png" alt=""
                                            class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="60" height="60">
                                        <div>
                                            <h5 class="mb-1 fw-normal text-white">Rafael Candra</h5>
                                            <p class="mb-0 text-white text-opacity-70">Supplier</p>
                                        </div>
                                    </div>

                                    <span>
                                        <img src="../assets/images/testimonial/quete.svg" alt="quete"
                                            class="img-fluid flex-shrink-0">
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="col-lg-4 col-xl-3 d-flex align-items-stretch">
                        <div class="card w-100"
                            data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <div class="card-body d-flex flex-column gap-5 gap-xl-11 justify-content-between">

                                <div class="d-flex flex-column gap-4">
                                    <p class="mb-0">Feedback mereka</p>
                                    <h4 class="mb-0">
                                        Gadgetnio membantu memenuhi kebutuhan gadget dan aksesoris digital kami!
                                    </h4>
                                </div>

                                <div class="hstack gap-3">
                                    <img src="../assets/images/testimonial/testimonial-3.png" alt=""
                                        class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="60" height="60">
                                    <div>
                                        <h5 class="mb-1 fw-normal">Michael Sugianto</h5>
                                        <p class="mb-0">Customer</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-11">

                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2"
                            data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">05</span>
                            <hr class="border-line bg-white">
                            <span class="badge text-bg-dark">FAQs</span>
                        </div>
                    </div>

                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-9">
                                <div class="d-flex flex-column gap-6"
                                    data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                    <h2 class="mb-0">Pertanyaan yang Sering Diajukan</h2>
                                    <p class="fs-5 mb-0 text-opacity-70">
                                        Pelajari bagaimana kami menyesuaikan solusi untuk memenuhi kebutuhan unik setiap brand —
                                        menghadirkan strategi yang efektif, branding yang lebih personal, dan pengalaman pelanggan yang lebih baik.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-end">
                    <div class="col-xl-8">
                        <div class="accordion accordion-flush"
                            id="accordionFlushExample" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">

                            <!-- Q1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fs-8 fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                        Apakah Gadgetnio menjual langsung ke konsumen?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0 fs-5 text-black">
                                        Kami menjual produk langsung kepada pelanggan, dan juga terbuka untuk berkolaborasi
                                        melalui berbagai skema bisnis sesuai kebutuhan para mitra.
                                    </div>
                                </div>
                            </div>

                            <!-- Q2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fs-8 fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                        aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Bagaimana cara menjadi partner?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0 fs-5 text-black">
                                        Cukup hubungi kami melalui formulir website atau email.
                                        Tim partnership kami akan memandu seluruh proses registrasi hingga onboarding.
                                    </div>
                                </div>
                            </div>

                            <!-- Q3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fs-8 fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        Gadgetnio Group beroperasi di mana saja?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0 fs-5 text-black">
                                        Kami melayani partner dan pelanggan di seluruh Indonesia.
                                        Kami juga terbuka untuk kerja sama dengan brand internasional.
                                    </div>
                                </div>
                            </div>

                            <!-- Q4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fs-8 fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                        aria-expanded="false" aria-controls="flush-collapseFour">
                                        Produk apa saja yang Gadgetnio distribusikan?
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0 fs-5 text-black">
                                        Kami mendistribusikan beragam elektronik dan gadget
                                        — termasuk aksesoris smartphone dan smart devices dari brand global.
                                    </div>
                                </div>
                            </div>

                            <!-- Q5 -->
                            <div class="accordion-item border-bottom">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fs-8 fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                        aria-expanded="false" aria-controls="flush-collapseFive">
                                        Apakah Gadgetnio Group memiliki program afiliasi?
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body pt-0 fs-5 text-black">
                                        Ya, kami memiliki program afiliasi yang memungkinkan individu maupun bisnis
                                        mendapatkan komisi dengan mempromosikan produk kami.
                                        Hubungi tim kami untuk informasi pendaftaran dan rincian struktur komisinya.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Get in touch Section -->
    <section class="get-in-touch py-5 py-lg-11 py-xl-12 bg-light-gray">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-10">

                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4 col-xxl-4">
                        <div class="d-flex align-items-center gap-7 py-2"
                            data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-white rounded-circle bg-primary hstack justify-content-center fw-medium">06</span>
                            <hr class="border-line bg-white">
                            <span class="badge text-bg-dark">Hubungi Kami</span>
                        </div>
                    </div>

                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6"
                                    data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                    <h2 class="mb-0">Hubungi Kami</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-between gap-7 gap-xl-0">

                    <div class="col-xl-3">
                        <p class="mb-0 fs-5"
                            data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            Ayo berkolaborasi untuk menciptakan sesuatu yang luar biasa.
                            Ceritakan kebutuhan atau produk Anda — kami siap mendengarkan.
                        </p>
                    </div>

                    <div class="col-xl-8">
                        <form class="d-flex flex-column gap-7"
                            data-aos="fade-up"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            method="POST"
                            action="{{ route('contact.send') }}">

                            @csrf

                            <div>
                                <input type="text" name="name" class="form-control border-bottom border-dark"
                                    placeholder="Nama" required>
                            </div>

                            <div>
                                <input type="tel" name="phone" class="form-control border-bottom border-dark"
                                    placeholder="Nomor Telepon" required>
                            </div>

                            <div>
                                <input type="email" name="email" class="form-control border-bottom border-dark"
                                    placeholder="Email" required>
                            </div>

                            <div>
                                <textarea name="message" class="form-control border-bottom border-dark"
                                    placeholder="Ceritakan project Anda" rows="3" required></textarea>
                            </div>

                            <button type="submit" class="btn w-100 justify-content-center">
                                <span class="btn-text text-white">Kirim Pesan</span>
                                <iconify-icon icon="lucide:arrow-up-right"
                                    class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm">
                                </iconify-icon>
                            </button>

                        </form>

                        @if(session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                        @endif

                    </div>

                </div>

            </div>
        </div>
    </section>

</div>

@endsection