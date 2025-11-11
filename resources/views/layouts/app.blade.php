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
                                    <p class="mb-0 fs-5 text-dark">Menu</p>
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
                                    <a class="text-dark" href="tel:+6289691009400">+6289691009400</a>
                                    <a class="fs-8 text-dark fw-bold" href="mailto:info@gadgetnio.com">info@gadgetnio.com</a>
                                </div>
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
                <div class="col-md-4 col-xl-3 mb-8 mb-xl-0">
                    <p class="mb-0 text-black text-opacity-70 text-md-end">© Gadgetnio copyright 2025</p>
                </div>
            </div>
        </div>
        <p class="mb-0 text-black text-opacity-70 text-md-center mt-10">Created by <a class="text-black" href="https://www.gadgetnio.com" target="_blank">Gadgetnio Team</a></p>
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