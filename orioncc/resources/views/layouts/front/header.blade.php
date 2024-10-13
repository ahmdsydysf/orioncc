<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Orion CC | @yield('page_name' , '') </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('orionFrontAssets/assets/images/favicons/favicon.webp') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('orionFrontAssets/assets/images/favicons/favicon32.webp') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('orionFrontAssets/assets/images/favicons/favicon16.webp') }}" />
    <meta name="description"
        content="ORION Leading contracting company in Ras Al Khaimah, UAE, specializing in residential, commercial, and industrial projects. Trusted for quality, reliability, and timely delivery. Contact us for your construction needs." />
    <meta name="keywords"
        content="constructing, contracting, build, UAE, Ras Al Khaimah, Dubai,Mechanical electrical and plumbing ,Businesses, construct, mep, MEP, INFRASTRUCTURE, roads, LANDSCAPE">
    <meta name="robots" content="index, follow">
    <!-- <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Your Company Name",
          "url": "https://www.example.com",
          "logo": "https://www.example.com/logo.jpg"
        }
        </script>
         -->
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500&amp;family=Manrope:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    @yield('css_style_links')
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-header__wrapper">
                <div class="main-header__wrapper-inner">
                    <div class="main-header__logo">
                        <a href="{{ route('home') }}"><img
                                src="{{ asset('orionFrontAssets/assets/images/resources/logo-white.webp') }}"
                                alt="Orion Company White Logo"></a>
                    </div>
                    <div class="main-header__right">
                        <div class="main-header__top">
                            <div class="main-header__top-inner">
                                <div class="main-header__top-left">
                                    <p class="main-header__top-left-text">You Dream We Build</p>
                                    <div class="main-header__social">
                                        <a href="https://www.facebook.com/orioncontractingcompany"><i
                                                class="fab fa-facebook"></i></a>
                                        <a
                                            href="https://www.linkedin.com/company/orion-contracting-company-llc/mycompany/"><i
                                                class="fab fa-linkedin"></i></a>
                                        <a href="https://www.youtube.com/@orioncontracting9881"><i
                                                class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="main-header__top-right">
                                    <ul class="list-unstyled main-header__contact-list">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-mobile"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:97172335531">+971 7 2335531</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope-open"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:info@orioncc.com">info@orioncc.com</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="main-header__right-bottom">
                            <nav class="main-menu">
                                <div class="main-menu__wrapper">
                                    <div class="main-menu__wrapper-inner">
                                        <div class="main-menu__main-menu-box">
                                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                            <ul class="main-menu__list">
                                                <li @class(['current'=> $p_nam == 'home'])>
                                                    <a href="{{ route('home') }}">Home </a>
                                                </li>
                                                <li @class(['current'=> $p_nam == 'projects'])>
                                                    <a href="{{ route('projects.index') }}">Our Projects</a>
                                                </li>
                                                <li @class(['current'=> $p_nam == 'sectors'])>
                                                    <a href="{{ route('sectors.index') }}">Sectors We Serve</a>
                                                </li>
                                                <li @class(['current'=> $p_nam == 'certificate'])>
                                                    <a href="{{ route('certificate.index') }}">Certification</a>
                                                </li>
                                                <li @class(['current'=> $p_nam == 'team'])>
                                                    <a href="{{ route('team') }}">Our Team</a>
                                                </li>
                                                <li @class(['current'=> $p_nam == 'about'])>
                                                    <a href="{{ route('about') }}">About Us</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="main-menu__right">
                                            <div class="main-menu__search-cart-btn">

                                                <div class="main-menu__btn-box">
                                                    <a href="{{ route('contact') }}"
                                                        class="thm-btn main-menu__btn">Contact
                                                        Us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->