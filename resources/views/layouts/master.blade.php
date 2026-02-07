<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/icons/fav.ico') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best Mother Care and Child Care Hospital in India - HayathMotherCare&ChildCare</title>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    @stack('header')
</head>

<body
    class="home page-template-default page page-id-94  hhc-top-menu-total-7 hhc-top-menu-more-than-six hhc-sidebar-no ">
    <div id="page" class="site hhc-parent-header-style-1">
        <!-- <a class="skip-link screen-reader-text" href="#content">Skip to content</a> -->
        <header id="masthead" class="site-header hhc-header-style-1 hhc-sticky-logo-yes">
            <div class="hhc-sticky-header hhc-header-sticky-yes hhc-sticky-type- hhc-sticky-bg-color-white">
            </div>
            <div class="hhc-header-overlay">
                <div class="hhc-header-height-wrapper" style="min-height:90px;">
                    <div
                        class="hhc-main-header-area hhc-sticky-logo-yes hhc-responsive-logo-no hhc-responsive-header-bgcolor-white hhc-header-wrapper hhc-bg-color-white">
                        <div class="container">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="hhc-logo">
                                    <div class="site-branding hhc-logo-area">
                                        <div class="wrap">
                                            <h1 class="site-title">
                                                <a href="/" rel="home">
                                                    <span class="site-title-text">Hayath
                                                        Mother and Child Care </span>
                                                    <img class="w-100"
                                                        src="{{ asset('assets/images/icons/hayath-logo.webp?v=1') }}"
                                                        width="800" height="316" class="hhc-main-logo"
                                                        alt="Hayth Mother and Child Care "
                                                        title="Hayth Mother and Child Care " />
                                                    <img data-lazyloaded="1"
                                                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MDAiIGhlaWdodD0iMzE2IiB2aWV3Qm94PSIwIDAgODAwIDMxNiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                                        width="800" height="316" class="hhc-sticky-logo"
                                                        data-src="https://Haythhospital.com/wp-content/uploads/2024/03/Hayth-Logo.png"
                                                        alt="Hayth Mother and Child Care "
                                                        title="Hayth Mother and Child Care " />
                                                </a>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="navigation-top">
                                    <div class="wrap">
                                        <nav id="site-navigation"
                                            class="main-navigation hhc-navbar  hhc-main-active-color-globalcolor hhc-dropdown-active-color-blackish"
                                            aria-label="Top Menu">
                                            <div class="menu-header-menu-container">
                                                <ul id="hhc-top-menu" class="menu">
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-94 current_page_item menu-item-601">
                                                        <a href="{{ route('public.index') }}"
                                                            aria-current="page">Home</a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="{{ route('public.about') }}">About</a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children ">
                                                        <a href="{{ route('public.services') }}">Services</a>
                                                        <ul class="sub-menu">

                                                            <li id="menu-item-6710"
                                                                class="menu-item menu-item-type-post_type menu-item-object-hhc-service">
                                                                <a href="{{ route('public.packages') }}">Packages</a>
                                                            </li>
                                                            @foreach (\App\Models\Service::where('status', '1')->orderBy('display_order')->get() ?? [] as $serviceNav)
                                                                <li id="menu-item-679"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-hhc-service">
                                                                    <a
                                                                        href="{{ route('public.services-single', $serviceNav->slug) }}">{{ $serviceNav->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>


                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="{{ route('public.doctors') }}">Doctors</a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children ">
                                                        <a href="{{ route('public.services') }}">Corporates</a>
                                                        <ul class="sub-menu">

                                                            <li id="menu-item-670"
                                                                class="menu-item menu-item-type-post_type menu-item-object-hhc-service">
                                                                <a href="{{ route('public.packages') }}">Investors</a>
                                                            </li>
                                                            <li id="menu-item-6710"
                                                                class="menu-item menu-item-type-post_type menu-item-object-hhc-service">
                                                                <a href="{{ route('public.packages') }}">Brouchers</a>
                                                            </li>


                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="{{ route('public.packages') }}">Career</a>
                                                    </li>

                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="{{ route('public.blogs') }}">News & Events</a>
                                                    </li>
                                                    <li
                                                        class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="{{ route('public.contact') }}">Contact Us</a>
                                                    </li>
                                                    <li
                                                        class="hdrbtn menu-item menu-item-type-custom menu-item-object-custom ">
                                                        <a href="tel:+918089111286"><i
                                                                class="hhc-xcare-icon hhc-xcare-icon-phone-call"></i>
                                                            +91 8089 111 286</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="hhc-right-box d-flex align-items-center">
                                    <div class="hhc-search-cart-box"></div>
                                    <div class="hhc-burger-menu-wrapper p-0 float-end">
                                        <button data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                                            aria-controls="offcanvasExample">
                                            <span class="bi bi-justify-right fs-4"></span>
                                        </button>

                                    </div>
                                    <!-- Navbar Links -->
                                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                                        aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header">
                                            <a class="nav-link  text-dark btn" href="tel:+918089111286">
                                                <i class="bi bi-telephone"></i> +91 8089 111 286
                                            </a>
                                            <button type="button" class="btn-close text-reset"
                                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <ul class="navbar-nav ms-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link  text-dark {{ request()->routeIs('public.index') ? 'active' : '' }}"
                                                        href="{{ route('public.index') }}">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link  text-dark {{ request()->routeIs('public.about') ? 'active' : '' }}"
                                                        href="{{ route('public.about') }}">About Us</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link  text-dark dropdown-toggle" href="#"
                                                        id="servicesDropdown" role="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Services
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                                        <li>
                                                            <a class="dropdown-item  {{ request()->routeIs('public.packages') ? 'active' : '' }}"
                                                                href="{{ route('public.packages') }}">Packages</a>
                                                        </li>
                                                        @foreach (\App\Models\Service::where('status', '1')->orderBy('display_order')->get() ?? [] as $serviceNav)
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('public.services-single', $serviceNav->slug) }}">{{ $serviceNav->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link  text-dark {{ request()->routeIs('public.doctors') ? 'active' : '' }}"
                                                        href="{{ route('public.doctors') }}">Doctors</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link  text-dark {{ request()->routeIs('public.packages') ? 'active' : '' }}"
                                                        href="{{ route('public.packages') }}">Career</a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link  text-dark dropdown-toggle" href="#"
                                                        id="servicesDropdown" role="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Corporates
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                                        <li>
                                                            <a class="dropdown-item  {{ request()->routeIs('public.packages') ? 'active' : '' }}"
                                                                href="{{ route('public.packages') }}">Investors</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item  {{ request()->routeIs('public.packages') ? 'active' : '' }}"
                                                                href="{{ route('public.packages') }}">Broucher</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link  text-dark {{ request()->routeIs('public.blogs') ? 'active' : '' }}"
                                                        href="{{ route('public.blogs') }}">News & Events</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link  text-dark {{ request()->routeIs('public.contact') ? 'active' : '' }}"
                                                        href="{{ route('public.contact') }}">Contact Us</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="site-content-contain ">
            <div class="site-content-wrap">
                <div id="content" class="site-content container-fluid p-0">

                    <div id="primary" class="content-area ">
                        <main id="main" class="site-main hhc-page-content-wrapper">


                            @yield('content')
                        </main>
                        <footer id="colophon" style="margin:15px;border-radius:25px;"
                            class="hhc-footer-section site-footer hhc-footer-style-2 hhc-text-color-blackish  bg-theme2 hhc-bg-image-yes hhc-footer-menu-yes hhc-footer-widget-yes">
                            <div class="hhc-footer-section hhc-footer-big-area-wrapper hhc-bg-color-transparent">
                                <div class="footer-wrap hhc-footer-big-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-4 col-sm-12 hhc-footer-left">
                                            </div>
                                            <div class="col-xl-8 col-sm-12 hhc-footer-right">
                                                <h2 class="text-light">
                                                    Hayath Mother and Child Care LLP
                                                </h2>
                                                <span class="fs-5 fw-bold text-light">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" hhc-footer-section footer-wrap hhc-footer-widget-area ">
                                <div class="container">
                                    <div class="row">
                                        <div class="hhc-footer-widget hhc-footer-widget-col-1 col-md-6 col-lg-3">
                                            <aside id="text-5" class="widget widget_text">
                                                <div class="textwidget">
                                                    <div class="hhc-footer-logo">
                                                        <img src="{{ asset('assets/images/icons/hayath-logo.webp?v=1') }}"
                                                            class=" h-50 mb-4 bg-white rounded-2 w-75">
                                                    </div>
                                                    <ul class="hhc-social-links">
                                                        <li class="hhc-social-li hhc-social-facebook "><a
                                                                title="Facebook" href="https://www.facebook.com"
                                                                target="_blank"><span>
                                                                    <i
                                                                        class="bi bi-facebook text-light"></i></span></a>
                                                        </li>
                                                        <li class="hhc-social-li hhc-social-linkedin ">
                                                            <a title="LinkedIn" href="#."
                                                                target="_blank"><span><i
                                                                        class="bi bi-linkedin text-light"></i></span></a>
                                                        </li>
                                                        <li class="hhc-social-li hhc-social-instagram "><a
                                                                title="Instagram" href="https://www.instagram.com"
                                                                target="_blank"><span><i
                                                                        class="bi bi-instagram text-light"></i></span></a>
                                                        </li>
                                                        <li class="hhc-social-li hhc-social-youtube "><a
                                                                title="Youtube" href="https://www.youtube.com/"
                                                                target="_blank"><span><i
                                                                        class="bi bi-youtube text-light"></i></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                        <div class="hhc-footer-widget hhc-footer-widget-col-2 col-md-6 col-lg-3">
                                            <aside id="nav_menu-1" class="widget widget_nav_menu">
                                                <h2 class="widget-title text-dark fw-bold">Useful Link</h2>
                                                <div class="menu-useful-link-container">
                                                    <ul id="menu-useful-link" class="menu">
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-572">
                                                            <a class="text-light"
                                                                href="{{ route('public.services') }}">Services</a>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-570">
                                                            <a class="text-light"
                                                                href="{{ route('public.packages') }}">Packages</a>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-570">
                                                            <a class="text-light"
                                                                href="{{ route('public.doctors') }}">Doctors</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </aside>
                                        </div>
                                        <div class="hhc-footer-widget hhc-footer-widget-col-3 col-md-6 col-lg-3">
                                            <aside id="custom_html-2" class="widget_text widget widget_custom_html">
                                                <h2 class="widget-title text-dark fw-bold">Working Time</h2>
                                                <div class="textwidget custom-html-widget">
                                                    <div class="hhc-timelist-ele-wrapper ">
                                                        <div class="hhc-timelist-wrapper">
                                                            <ul class="hhc-timelist-list">
                                                                <li><span class="hhc-timelist-li-title text-light">Mon
                                                                        - Sun:
                                                                        8.00am -
                                                                        9.00pm</span></li>
                                                                <li><span class="hhc-timelist-li-title text-light">24
                                                                        hrs
                                                                        Emergency
                                                                        services
                                                                        available</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </aside>
                                        </div>
                                        <div class="hhc-footer-widget hhc-footer-widget-col-4 col-md-6 col-lg-3">
                                            <aside id="pbm_addons_contact_widget-1"
                                                class="widget pbm_addons_contact_widget">
                                                <h2 class="widget-title text-dark fw-bold">Our address</h2>
                                                <div class="hhc-contact-widget-lines">
                                                    <div
                                                        class="hhc-contact-widget-line hhc-contact-widget-address text-light">
                                                        Hayath Mother & Child Care LLP<br>
                                                        Tirur - Kuttippuram Rd, Kavumopuram, Kuttippuram, Kerala 679571.
                                                    </div>
                                                </div>
                                            </aside>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hhc-footer-section hhc-footer-text-area ">
                                <div class="container">
                                    <div class="hhc-footer-text-inner">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="hhc-footer-copyright-text-area"> © Hayth Mother Care and
                                                    Childs. Powered by <a href="https://haymedhealthcare.com/"
                                                        target="_blank">Haymed Health Care</a>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class=" hhc-footer-menu-area">
                                                    <div class="menu-footer-menu-container">
                                                        <ul class="hhc-footer-menu">
                                                            <li
                                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-164">
                                                                <a href="#.">Privacy policy</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                <div class="hhc-progress-wrap">
                    <svg class="hhc-progress-circle svg-content" width="100%" height="100%"
                        viewBox="-1 -1 102 102">
                        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                    </svg>
                </div>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function() {
                $('[data-slick]').slick();
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('scrollBox', () => ({
                    boxWidth: 95, // Initial width in pixels
                    scrollStep: 10, // Step to increase or decrease the width

                    init() {
                        window.addEventListener('wheel', (event) => {
                            // Check if scrolling up or down
                            if (event.deltaY < 0) {
                                this.boxWidth += this.scrollStep; // Increase width
                            } else {
                                this.boxWidth -= this.scrollStep; // Decrease width
                            }

                            // Set limits to the width
                            this.boxWidth = Math.max(92, Math.min(100, this.boxWidth));
                        });
                    }
                }));
            });
        </script>

        <!-- Toastr JS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script type="text/javascript">
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "preventDuplicates": false,
                "positionClass": "toast-top-right", // Toast position
                "timeOut": "5000", // Timeout duration
                "extendedTimeOut": "5000",
            };

            @if (session('success_msg'))
                toastr.success("{{ session('success_msg') }}", "Success");
            @elseif (session('failed_msg'))
                toastr.error("{{ session('failed_msg') }}", "Error");
            @elseif (session('info'))
                toastr.info("{{ session('info') }}", "Info");
            @elseif (session('warning'))
                toastr.warning("{{ session('warning') }}", "Warning");
            @endif
        </script>



</body>

</html>
