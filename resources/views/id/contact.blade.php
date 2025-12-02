@extends('layoutsindo.app')
@section('content')

<!--  Page Wrapper -->
<div class="page-wrapper overflow-hidden">

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
        style="background-image: url(../assets/images/backgrounds/contact-banner.jpg);">
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
                    <h1 class="mb-0 fs-16 text-white lh-1">Hubungi Kami</h1>
                </div>
            </div>
        </div>
    </section>

    <!--  Get in touch Section -->
    <section class="get-in-touch py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-10">
                <div class="row gap-7 gap-xl-0">

                    <!-- Mobile & Tablet -->
                    <div class="col-12 d-block d-xl-none">
                        <div class="d-flex justify-content-center align-items-center py-2"
                            data-aos="fade-right"
                            data-aos-delay="100"
                            data-aos-duration="1000">
                            <span class="badge text-bg-dark">Hubungi kami</span>
                        </div>
                    </div>

                    <!-- Desktop -->
                    <div class="col-xl-4 col-xxl-4 d-none d-xl-block">
                        <div class="d-flex align-items-center gap-7 py-2"
                            data-aos="fade-right"
                            data-aos-delay="100"
                            data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium"></span>
                            <hr class="border-line bg-white">
                            <span class="badge text-bg-dark">Hubungi kami</span>
                        </div>
                    </div>

                    <div class="col-xl-8 col-xxl-7">
                        <div class="row">
                            <div class="col-12 col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                    data-aos-duration="1000">
                                    <h2 class="mb-0 text-center text-xl-start">Hubungi Kami</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-between gap-7 gap-xl-0">
                    <div class="col-xl-3">
                        <p class="mb-0 fs-5"
                            data-aos="fade-right"
                            data-aos-delay="100"
                            data-aos-duration="1000">
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