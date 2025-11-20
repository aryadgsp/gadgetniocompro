@extends('layoutsindo.app')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
        style="background-image: url(../../assets/images/portfolio/wanbo-banner.jpg);">
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
                    <h1 class="mb-0 fs-16 text-white lh-1">WANBO</h1>
                    <a href="https://wanbo.cn/" class="p-1 ps-7 bg-primary rounded-pill">
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
                    <a href="/id/portfolio" class="btn py-2 ps-3 pe-5" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1000">
                        <span class="btn-text pe-1 text-white">Kembali</span>
                        <iconify-icon icon="lucide:arrow-up-right"
                            class="btn-icon bg-white text-dark round-36 rounded-circle hstack justify-content-center fs-5 shadow-sm"></iconify-icon>
                    </a>
                    <div class="d-md-flex align-items-center gap-4 gap-lg-8" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000">
                        <div class="d-flex flex-column gap-2 py-2 pe-4 pe-lg-8 border-end">
                            <p class="mb-0">Cakupan Produk</p>
                            <p class="mb-0 text-dark fs-5 fw-medium">Projector</p>
                        </div>
                        <div class="d-flex flex-column gap-2 py-2">
                            <p class="mb-0">Website</p>
                            <p class="mb-0 fs-5 fw-medium">
                                <a href="https://www.wanbo.cn/" target="_blank" class="text-dark text-decoration-none link-hover">
                                    wanbo.cn
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row gap-4 gap-lg-0">
                    <div class="col-lg-4">
                        <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                            Pengalaman Visual Imersif Menjadi Lebih Mudah dengan Proyektor WANBO
                        </h2>
                    </div>

                    <div class="col-lg-8">
                        <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">

                            <p class="fs-5 mb-6">
                                WANBO adalah brand proyektor global yang sedang berkembang, dikenal melalui desain elegan, kualitas gambar yang jernih,
                                serta performa yang kuat. Melalui Gadgetnio, proyektor WANBO kini dapat diakses di seluruh Indonesia—membawa visual sinematik,
                                fitur pintar, dan teknologi mudah digunakan ke rumah, kantor, dan ruang hiburan di berbagai daerah.
                            </p>

                            <h4>1. Proyeksi Pintar untuk Setiap Gaya Hidup</h4>
                            <p class="fs-5 mb-6">
                                Mulai dari proyektor portabel yang ringkas hingga model home cinema dengan kecerahan tinggi, WANBO menawarkan solusi untuk
                                menonton film, bermain game, presentasi, dan tontonan harian. Dengan resolusi tajam, akurasi warna yang hidup,
                                dan operasi yang senyap, setiap proyektor WANBO memberikan pengalaman visual imersif yang menyatu dengan gaya hidup modern.
                            </p>

                            <h4>2. Distribusi Terpercaya, Kualitas Autentik</h4>
                            <p class="fs-5 mb-0">
                                Didukung oleh jaringan distribusi Gadgetnio yang luas, proyektor WANBO dikirim dengan cepat, aman,
                                dan terjamin keasliannya. Dengan ketersediaan stok siap kirim dan dukungan purna jual yang dapat diandalkan,
                                Gadgetnio memastikan pelanggan di seluruh Indonesia menikmati performa asli WANBO dengan percaya diri dan kenyamanan.
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