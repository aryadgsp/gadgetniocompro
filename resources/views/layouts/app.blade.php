<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gadgetnio</title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.webp') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/aos-master/dist/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<style>
    .logo img {
        max-height: 80px;
        /* ukuran default desktop */
        width: auto;
    }

    /* Tablet */
    @media (max-width: 991.98px) {
        .logo img {
            max-height: 60px;
        }
    }

    /* Mobile */
    @media (max-width: 767.98px) {
        .logo img {
            max-height: 40px;
        }
    }

    .lang-toggle .btn.btn-light {
        background-color: #ffffff !important;
        border-color: #e9ecef !important;
        color: var(--bs-primary) !important;
        /* atau '#008CFF' jika projectmu tidak menggunakan bootstrap vars */
    }

    /* Wrapper */
    .lang-toggle {
        display: inline-flex;
        background: #f1f6ff;
        padding: 4px;
        border-radius: 40px;
        gap: 4px;
        border: 1px solid #d6e4ff;
    }

    /* Tombol */
    .lang-toggle a {
        padding: 6px 18px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 14px;
        color: #008CFF;
        text-decoration: none;
        transition: all 0.25s ease;
    }

    /* Aktif */
    .lang-toggle a.lang-active {
        background: #008CFF;
        color: #ffffff;
        box-shadow: 0 2px 8px rgba(0, 140, 255, 0.25);
    }

    /* Hover */
    .lang-toggle a:hover {
        background: rgba(0, 140, 255, 0.1);
    }

    /* Hover khusus aktif */
    .lang-toggle a.lang-active:hover {
        background: #0078db;
    }

    /* Mobile */
    @media (max-width: 576px) {
        .lang-toggle a {
            padding: 4px 14px;
            font-size: 12px;
        }
    }
</style>

<body>
    <!-- Header -->
    <header class="header border-4 border-primary border-top position-fixed start-0 top-0 w-100">
        <div class="container">
            <div class="header-wrapper d-flex align-items-center justify-content-between">
                <div class="logo">
                    <a href="{{ url('/') }}" class="logo-white">
                        <img src="{{ asset('assets/images/logos/white.svg') }}" alt="logo" class="img-fluid">
                    </a>
                    <a href="{{ url('/') }}" class="logo-dark">
                        <img src="{{ asset('assets/images/logos/dark.svg') }}" alt="logo" class="img-fluid">
                    </a>
                </div>

                <div class="d-flex align-items-center gap-4">
                    <div class="btn-group">
                        <button
                            class="btn btn-secondary toggle-menu round-45 p-2 d-flex align-items-center justify-content-center bg-white rounded-circle"
                            type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            <iconify-icon icon="solar:hamburger-menu-line-duotone" class="menu-icon fs-8 text-dark"></iconify-icon>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end p-4">
                            <div class="d-flex flex-column gap-6">
                                <div class="hstack justify-content-between border-bottom pb-6">
                                    <h1 class="mb-0 fs-5 text-dark">Menu</h1>
                                    <button type="button" class="btn-close opacity-75" aria-label="Close"></button>
                                </div>
                                <div class="d-flex flex-column gap-3">
                                    <ul class="header-menu list-unstyled mb-0 d-flex flex-column gap-2">
                                        <li class="header-item">
                                            <a href="{{ url('/') }}" aria-current="true"
                                                class="header-link active hstack gap-2 fs-7 fw-bold text-dark">
                                                <img src="{{ asset('assets/images/logos/logo for spin 2nd.svg') }}" alt="" width="20" height="20"
                                                    class="img-fluid animate-spin">Home
                                            </a>
                                        </li>
                                        <li class="header-item">
                                            <a href="{{ url('/about-us') }}" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                <img src="{{ asset('assets/images/logos/logo for spin 2nd.svg') }}" alt="" width="20" height="20"
                                                    class="img-fluid animate-spin">About
                                            </a>
                                        </li>
                                        <li class="header-item">
                                            <a href="{{ url('/portfolio') }}" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                <img src="{{ asset('assets/images/logos/logo for spin 2nd.svg') }}" alt="" width="20" height="20"
                                                    class="img-fluid animate-spin">Portfolio
                                            </a>
                                        </li>
                                        <li class="header-item">
                                            <a href="{{ url('/contact') }}" class="header-link hstack gap-2 fs-7 fw-bold text-dark">
                                                <img src="{{ asset('assets/images/logos/logo for spin 2nd.svg') }}" alt="" width="20" height="20"
                                                    class="img-fluid animate-spin">Contact
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <!-- Gunakan wa.me untuk kompatibilitas terbaik -->
                                    <a class="text-dark"
                                        href="https://wa.me/6287808783500?text=Hello%2C%20I%20would%20like%20to%20ask%20about%20Gadgetnio"
                                        target="_blank" rel="noopener">
                                        +6287808783500
                                    </a>
                                    <a class="fs-8 text-dark fw-bold" href="mailto:info@gadgetnio.com">info@gadgetnio.com</a>
                                </div>
                            </div>
                            <!-- Toggle Bahasa -->
                            <div class="lang-toggle">
                                @php
                                $currentUrl = request()->path();
                                $isIndo = preg_match('/^id(\/)?/', $currentUrl);

                                // URL EN
                                if ($isIndo) {
                                preg_match('/^id\/?(.*)$/', $currentUrl, $match);
                                $englishPath = $match[1] ?? '';
                                $toEnglish = url($englishPath === '' ? '/' : $englishPath);
                                } else {
                                $toEnglish = url($currentUrl === '' ? '/' : $currentUrl);
                                }

                                // URL ID
                                $toIndo = $isIndo ? url($currentUrl) : url('id/' . $currentUrl);
                                @endphp

                                <!-- EN -->
                                <a href="{{ $toEnglish }}"
                                    class="{{ !$isIndo ? 'lang-active' : 'lang-inactive' }}">
                                    EN
                                </a>

                                <!-- ID -->
                                <a href="{{ $toIndo }}"
                                    class="{{ $isIndo ? 'lang-active' : 'lang-inactive' }}">
                                    ID
                                </a>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer bg-white py-5 py-lg-11 py-xl-12">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 mb-8 mb-xl-0">
                    <div class="d-flex flex-column gap-8 pe-xl-5">
                        <h2 class="mb-0 text-black">Build something together?</h2>
                        <div class="d-flex flex-column gap-2">
                            <a href="https://www.gadgetnio.com/" target="_blank" class="link-hover hstack gap-3 text-black fs-5">
                                <iconify-icon icon="lucide:arrow-up-right" class="fs-7 text-primary"></iconify-icon>
                                Gadgetnio
                            </a>
                            <a href="https://maps.app.goo.gl/vN3kjhX9WRJ3AgSU9" target="_blank"
                                class="text-black link-hover hstack gap-3 text-black fs-5">
                                <iconify-icon icon="lucide:map-pin" class="fs-7 text-primary"></iconify-icon>
                                Gadgetnio
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl-2 mb-8 mb-xl-0">
                    <ul class="footer-menu list-unstyled mb-0 d-flex flex-column gap-2">
                        <li><a class="link-hover fs-5 text-black" href="/">Home</a></li>
                        <li><a class="link-hover fs-5 text-black" href="/about-us">About</a></li>
                        <li><a class="link-hover fs-5 text-black" href="/portfolio">Portfolio</a></li>
                        <li><a class="link-hover fs-5 text-black" href="/contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-xl-2 mb-8 mb-xl-0">
                    <ul class="footer-menu list-unstyled mb-0 d-flex flex-column gap-2">
                        <li><a class="link-hover fs-5 text-black" href="#!">Facebook</a></li>
                        <li><a class="link-hover fs-5 text-black" href="#!">Instagram</a></li>
                        <li><a class="link-hover fs-5 text-black" href="#!">Twitter</a></li>
                    </ul>
                </div>

                <!-- Bagian © di kanan (desktop), tapi sembunyi di mobile -->
                <div class="col-md-4 col-xl-3 mb-8 mb-xl-0 d-none d-md-block">
                    <p class="mb-0 text-black text-opacity-70 text-md-end">© Gadgetnio copyright 2025</p>
                </div>
            </div>
        </div>

        <!-- Bagian bawah: muncul di semua tampilan -->
        <div class="text-center mt-10">
            <!-- Teks created by -->
            <p class="mb-1 text-black text-opacity-70">
                Created by
                <a class="text-black" href="https://www.gadgetnio.com" target="_blank">Gadgetnio Team</a>
            </p>

            <!-- Teks © hanya tampil di mobile -->
            <p class="mb-0 text-black text-opacity-70 d-block d-md-none">
                © Gadgetnio copyright 2025
            </p>
        </div>
    </footer>

    <div class="get-template hstack gap-2">
        <button class="btn bg-primary p-2 round-52 rounded-circle hstack justify-content-center flex-shrink-0"
            id="scrollToTopBtn">
            <iconify-icon icon="lucide:arrow-up" class="fs-7 text-white"></iconify-icon>
        </button>
    </div>

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/libs/aos-master/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>