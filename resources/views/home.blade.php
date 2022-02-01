@extends('layouts.master')
@section('content')
    <div class="container-full-width">
        <div class="swiper-container main-slider" data-effect="fade" data-autoplay="4000">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-primary-color main-slider-bg-dark thumb-left">
                    <div class="container table">
                        <div class="row table-cell">
                            <div class="col-lg-5 table-cell">
                                <div class="slider-content">
                                    <h3 class="h1 slider-content-title" data-swiper-parallax="-100">
                                        <span class="c-dark">NOTRE</span>
                                        POSITIONNEMENT.</h3>
                                    <h6 class="slider-content-text" data-swiper-parallax="-200">La Souveraine est le 
                                        partenaire Marketing Stratégique pour accompagner les entreprises 
                                        dans la conquête de leur clientèle.
                                    </h6>
                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300">
                                        <a href="{{ route('contact') }}"
                                        class="btn btn-medium btn--dark btn-hover-shadow">
                                            <span class="text">CONTACTEZ-NOUS</span>
                                            <span class="semicircle"></span>
                                        </a>
                                        <a href="{{ route('offers') }}" class="btn btn-small btn--primary"
                                        data-swiper-parallax="-300">
                                            <span class="text">NOS OFFRES</span>
                                            <i class="seoicon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 table-cell">
                                <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
                                    <img loading="lazy" src="{{ asset('assets/img/slider2.png') }}" alt="slider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-secondary-color main-slider-bg-dark">
                    <div class="container table">
                        <div class="row table-cell">
                            <div class="col-lg-6 table-cell">
                                <div class="slider-content">
                                    <h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">Social Media
                                        Marketing Services
                                    </h3>
                                    <h5 class="slider-content-text" data-swiper-parallax="-200">An effective social strategy
                                        can help you grow your
                                        business, maintain your social presence and engage with the audience.
                                    </h5>
                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300">
                                        <a href="{{ route('contact') }}"
                                        class="btn btn-medium btn--dark btn-hover-shadow">
                                            <span class="text">CONTACTEZ-NOUS</span>
                                            <span class="semicircle"></span>
                                        </a>
                                        <a href="{{ route('offers') }}" class="btn btn-small btn--primary"
                                        data-swiper-parallax="-300">
                                            <span class="text">NOS OFFRES</span>
                                            <i class="seoicon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 table-cell">
                                <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
                                    <img loading="lazy" src="{{ asset('assets/img/slider3.png') }}" alt="slider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide bg-green-color main-slider-bg-dark">
                    <div class="container table">
                        <div class="row table-cell">
                            <div class="col-lg-6 table-cell">
                                <div class="slider-content">
                                    <h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">Pay Per Click
                                        (PPC)
                                        Management
                                    </h3>
                                    <h5 class="slider-content-text" data-swiper-parallax="-200">Pay Per Click has an instant
                                        impact and gives
                                        your brand a much larger reach and exposure as a result of first page exposure on
                                        major search engines.
                                    </h5>
                                    <div class="main-slider-btn-wrap" data-swiper-parallax="-300">
                                        <a href="{{ route('contact') }}"
                                        class="btn btn-medium btn--dark btn-hover-shadow">
                                            <span class="text">CONTACTEZ-NOUS</span>
                                            <span class="semicircle"></span>
                                        </a>
                                        <a href="{{ route('offers') }}" class="btn btn-small btn--primary"
                                        data-swiper-parallax="-300">
                                            <span class="text">NOS OFFRES</span>
                                            <i class="seoicon-right-arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 table-cell">
                                <div class="slider-thumb" data-swiper-parallax="-300" data-swiper-parallax-duration="500">
                                    <img loading="lazy" src="{{ asset('assets/img/slider5.png') }}" alt="slider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Prev next buttons-->
            <svg class="btn-next btn-next-black">
                <use xlink:href="#arrow-right"></use>
            </svg>

            <svg class="btn-prev btn-prev-black">
                <use xlink:href="#arrow-left"></use>
            </svg>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="our-video js-equal-child">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding">
                    <div class="video theme-module">
                        <div class="video-thumb">
                            <div class="overlay"></div>
                            <a href="https://www.youtube.com/watch?v=0O2aH4XLbto" class="video-control js-popup-iframe">
                                <img loading="lazy" src="{{ asset('assets/svg/video-control.svg') }}" alt="go">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col--xs-12">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="services-main">
                            <div class="heading">
                                <h4 class="h1 heading-title">Nos offres</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                                <p class="heading-text">Qolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibham liber tempor cum soluta nobis.
                                </p>
                            </div>
        
                            <a href="{{ route('contact') }}" class="btn btn-medium btn--dark btn-hover-shadow">
                                <span class="text">Contactez-nous</span>
                                <span class="semicircle"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="servises-item bg-violet-color">
                            <div class="servises-item__thumb">
                                <img loading="lazy" src="{{ asset('assets/img/info-box1.png') }}" alt="image">
                            </div>
                            <div class="servises-item__content">
                                <h4 class="servises-title">Missions en stratégie Marketing</h4>
                                <p class="servises-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh.
                                </p>
                            </div>
                            <a href="{{ route('marketing_strategy') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt120 pb30">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="servises-item bg-primary-color">
                    <div class="servises-item__thumb">
                        <img loading="lazy" src="{{ asset('assets/img/info-box2.png') }}" alt="service">
                    </div>
                    <div class="servises-item__content">
                        <h4 class="servises-title">Etudes</h4>
                        <p class="servises-text">Claritas est etiam processus dynamicus,
                            qui sequitur mutationem consuetudium lectorum quam nunc putamus.
                        </p>
                    </div>
                    <a href="{{ route('study') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="servises-item bg-orange-color">
                    <div class="servises-item__thumb">
                        <img loading="lazy" src="{{ asset('assets/img/info-box4.png') }}" alt="service">
                    </div>
                    <div class="servises-item__content">
                        <h4 class="servises-title">Tracking de performance</h4>
                        <p class="servises-text">Nam liber tempor cum soluta nobis eleifend
                            option congue nihil imperdiet doming id quod mazim placerat assum.
                        </p>
                    </div>
                    <a href="{{ route('performance_tracking') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="servises-item bg-green-color">
                    <div class="servises-item__thumb">
                        <img loading="lazy" src="{{ asset('assets/img/info-box5.png') }}" alt="service">
                    </div>
                    <div class="servises-item__content">
                        <h4 class="servises-title">Représentation commerciale</h4>
                        <p class="servises-text">Eodem modo typi, qui nunc nobis videntur parum clari,
                            fiant sollemnes in futurum.
                        </p>
                    </div>
                    <a href="{{ route('sales_representation') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="pricing-tables medium-padding120 bg-border-color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                            <div class="heading align-center">
                                <h4 class="h2 heading-title">Formations disponibles</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                                <p class="heading-text">Découvrez nos formations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="pricing-tables-item" style="background-color: white;">
                                <div class="pricing-tables-icon">
                                    <img loading="lazy" src="assets/img/pricing1.png" alt="personal">
                                </div>
                                <a href="#" class="pricing-title">Personal</a>
                                <ul class="pricing-tables-position">
                                    <li class="position-item">
                                        <span class="count">5</span>
                                        Analytics Campaigns
                                    </li>
                                    <li class="position-item">
                                        <span class="count">300</span>
                                        Keywords
                                    </li>
                                    <li class="position-item">
                                        <span class="count">250,000</span>
                                        Crawled Pages
                                    </li>
                                    <li class="position-item">
                                        -
                                    </li>
                                    <li class="position-item">
                                        <span class="count">15</span>
                                        Social Accounts
                                    </li>
                                </ul>
                                <h4 class="rate">$49.99</h4>
                                <a href="{{ route('course_details') }}" class="btn btn-medium btn--dark">
                                    <span class="text">Je souscris !</span>
                                    <span class="semicircle"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="pricing-tables-item" style="background-color: white;">
                                <div class="pricing-tables-icon">
                                    <img loading="lazy" src="assets/img/pricing3.png" alt="personal">
                                </div>
                                <a href="#" class="pricing-title">Personal</a>
                                <ul class="pricing-tables-position">
                                    <li class="position-item">
                                        <span class="count">5</span>
                                        Analytics Campaigns
                                    </li>
                                    <li class="position-item">
                                        <span class="count">300</span>
                                        Keywords
                                    </li>
                                    <li class="position-item">
                                        <span class="count">250,000</span>
                                        Crawled Pages
                                    </li>
                                    <li class="position-item">
                                        -
                                    </li>
                                    <li class="position-item">
                                        <span class="count">15</span>
                                        Social Accounts
                                    </li>
                                </ul>
                                <h4 class="rate">$49.99</h4>
                                <a href="{{ route('course_details') }}" class="btn btn-medium btn--dark">
                                    <span class="text">Je souscris !</span>
                                    <span class="semicircle"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="pricing-tables-item" style="background-color: white;">
                                <div class="pricing-tables-icon">
                                    <img loading="lazy" src="assets/img/pricing2.png" alt="personal">
                                </div>
                                <a href="#" class="pricing-title">Personal</a>
                                <ul class="pricing-tables-position">
                                    <li class="position-item">
                                        <span class="count">5</span>
                                        Analytics Campaigns
                                    </li>
                                    <li class="position-item">
                                        <span class="count">300</span>
                                        Keywords
                                    </li>
                                    <li class="position-item">
                                        <span class="count">250,000</span>
                                        Crawled Pages
                                    </li>
                                    <li class="position-item">
                                        -
                                    </li>
                                    <li class="position-item">
                                        <span class="count">15</span>
                                        Social Accounts
                                    </li>
                                </ul>
                                <h4 class="rate">$49.99</h4>
                                <a href="{{ route('course_details') }}" class="btn btn-medium btn--dark">
                                    <span class="text">Je souscris !</span>
                                    <span class="semicircle"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="client-carousel medium-padding120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="heading align-center">
                            <h4 class="h1 heading-title">Ils nous ont fait confiance</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                            <p class="heading-text">Nos valeureux clients. </p>
                        </div>
                    </div>
                </div>

                <div class="theme-module clients-slider-module">

                    <div class="swiper-container pagination-bottom" data-show-items="4">

                        <div class="swiper-wrapper">

                            <div class="swiper-slide client-item">
                                <a href="09_our_clients.html" class="client-image">
                                    <img loading="lazy" src="{{ asset('assets/img/client1-hover.png') }}" alt="logo" class="hover">
                                </a>
                            </div>

                            <div class="swiper-slide client-item">
                                <a href="09_our_clients.html" class="client-image">
                                    <img loading="lazy" src="{{ asset('assets/img/client2-hover.png') }}" alt="logo" class="hover">
                                </a>
                            </div>

                            <div class="swiper-slide client-item">
                                <a href="09_our_clients.html" class="client-image">
                                    <img loading="lazy" src="{{ asset('assets/img/client3-hover.png') }}" alt="logo" class="hover">
                                </a>
                            </div>

                            <div class="swiper-slide client-item">
                                <a href="09_our_clients.html" class="client-image">
                                    <img loading="lazy" src="{{ asset('assets/img/client4-hover.png') }}" alt="logo" class="hover">
                                </a>
                            </div>

                        </div>

                        <svg class="btn-next">
                            <use xlink:href="#arrow-right"></use>
                        </svg>

                        <svg class="btn-prev">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection