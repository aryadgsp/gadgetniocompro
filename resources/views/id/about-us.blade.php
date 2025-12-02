@extends('layoutsindo.app')
@section('content')

<!--  Page Wrapper -->
<div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
        style="background-image: url(../assets/images/backgrounds/about-us-banner.jpg);">
        <div class="container">
            <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000">
                            <img src="../assets/images/logos/logo for spin.svg" alt="" class="img-fluid animate-spin">
                            <p class="mb-0 text-white fs-5 text-opacity-70">
                                Kami <span class="text-primary">Memberdayakan Gaya Hidup Digital Anda.</span>
                                Distributor elektronik dan gadget tepercaya,
                                menghubungkan brand kelas dunia dengan pasar Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <h1 class="mb-0 fs-16 text-white lh-1">Tentang Kami</h1>
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
                        <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Gadgetnio Group.</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1000">
                            <p class="mb-0 fs-5 text-black">
                                Gadgetnio Group adalah distributor elektronik dan gadget terkemuka di Indonesia,
                                yang menjembatani brand kelas dunia dengan pasar lokal. Kami berkomitmen menghadirkan produk berkualitas,
                                logistik yang efisien, serta kemitraan jangka panjang yang membantu retailer, reseller, dan klien korporat
                                untuk berkembang di era digital.
                            </p>
                            <p class="mb-0 fs-5 text-black">
                                Dengan pengalaman bertahun-tahun dan jaringan nasional yang kuat, kami membangun reputasi melalui kepercayaan,
                                konsistensi, dan inovasi. Mulai dari aksesoris gadget terbaru hingga perangkat elektronik esensial,
                                Gadgetnio Group memastikan setiap produk dan kolaborasi memenuhi standar kualitas dan keandalan tertinggi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row gx-xl-5">
                    <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                        <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="45">20</span>+</h2>
                            <div class="d-flex flex-column gap-3">
                                <h4 class="mb-0">Partner Bisnis</h4>
                                <p class="mb-0">Berkolaborasi dengan lebih dari 500 retailer, reseller, dan klien korporat di seluruh Indonesia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                        <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="15">5</span>Jt+</h2>
                            <div class="d-flex flex-column gap-3">
                                <h4 class="mb-0">Produk Terdistribusi</h4>
                                <p class="mb-0">Menghadirkan ribuan gadget dan perangkat elektronik berkualitas ke pasar Indonesia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
                        <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="158">10</span>+</h2>
                            <div class="d-flex flex-column gap-3">
                                <h4 class="mb-0">Tahun Pengalaman</h4>
                                <p class="mb-0">Lebih dari satu dekade memberikan layanan terpercaya di industri distribusi elektronik dan gadget di Indonesia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  About Img Section -->
    <section class="about-img">
        <img src="../assets/images/about/about.jpg" alt="" class="w-100 object-fit-cover">
        <div class="marquee w-100 d-flex align-items-center overflow-hidden bg-primary py-4">
            <div class="marquee-content d-flex align-items-center gap-8">

                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0 text-white">Integritas</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0 text-white">Inovasi</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0 text-white">Kemitraan</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0 text-white">Fokus pada Pelanggan</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>

                <!-- Baris berikutnya tetap sama (diulang) -->
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0 text-white">Integritas</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0 text-white">Inovasi</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0 text-white">Kemitraan</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0 text-white">Fokus pada Pelanggan</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>

                <!-- (Bagian marquee berikutnya saya biarkan sama, hanya mengganti teks) -->
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0 text-white">Integritas</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0 text-white">Inovasi</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0 text-white">Kemitraan</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>
                <div class="hstack gap-4 flex-shrink-0">
                    <h4 class="mb-0 text-white">Fokus pada Pelanggan</h4>
                    <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
                </div>

            </div>
        </div>
    </section>

</div>

@endsection