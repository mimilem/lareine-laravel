@extends('layouts.master')
@section('content')
    <div class="container-full-width">
        <div class="swiper-container main-slider" data-effect="fade" data-autoplay="4000">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-secondary-color main-slider-bg-dark thumb-left">
                    <div class="container table">
                        <div class="row table-cell">
                            <div class="col-lg-6 table-cell">
                                <div class="slider-content">
                                    <h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">Notre Raison d’Etre

                                    </h3>
                                    <h5 class="slider-content-text" data-swiper-parallax="-200">Aider les entreprises à maximiser la satisfaction clientèle.
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
                <div class="swiper-slide bg-primary-color main-slider-bg-dark">
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
                                    <h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">APPROCHE

                                    </h3>
                                    <h5 class="slider-content-text" data-swiper-parallax="-200">Nous commençons par une études et analyse du marché afin de 
                                        proposer une stratégie adaptée et reflétant la réalité.
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
                                    <h3 class="h1 slider-content-title c-dark" data-swiper-parallax="-100">METHODES

                                    </h3>
                                    <h5 class="slider-content-text" data-swiper-parallax="-200">Récolte , Analyse des données, 
                                        Stratégie et veille sont nos moyens pour répondre efficacement à la 
                                        demande des entreprises.
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
        <div class="row pt10">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                <div class="heading align-center">
                    <h4 class="h1 heading-title">Nos offres</h4>
                    <div class="heading-line">
                        <span class="short-line"></span>
                        <span class="long-line"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="servises-item bg-violet-color">
                    <div class="servises-item__thumb">
                        <img loading="lazy" src="{{ asset('assets/img/info-box1.png') }}" alt="image">
                    </div>
                    <div class="servises-item__content">
                        <h4 class="servises-title">Missions en Stratégie Marketing</h4>
                        <p class="servises-text">Notre Mission en Stratégie Marketing est d’accompagner les entreprises à maintenir la fidélité de leur clientèle, 
                            d’accroitre ou d’affirmer leur notoriété en permettant à ces derniers de répondre aux attentes implicites ou explicites du marché qu’elles exploitent ou veulent exploiter.
                        </p>
                    </div>
                    <a href="{{ route('marketing_strategy') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="servises-item bg-primary-color">
                    <div class="servises-item__thumb">
                        <img loading="lazy" src="{{ asset('assets/img/info-box2.png') }}" alt="service">
                    </div>
                    <div class="servises-item__content">
                        <h4 class="servises-title">Etudes</h4>
                        <p class="servises-text">Notre mission consiste à organiser la collecte, le traitement et l’interprétation des informations relatives aux marchés, et plus généralement aux publics dont dépend l'entreprise. La finalité étant de servir aux décisions marketing en réduisant l'incertitude du décideur et en minimisant les risques encourus, 
                            afin d'assurer l'objectivité de ces informations, leur précision, leur pertinence et leur fiabilité.
                        </p>
                    </div>
                    <a href="{{ route('study') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="servises-item bg-orange-color">
                    <div class="servises-item__thumb">
                        <img loading="lazy" src="{{ asset('assets/img/info-box4.png') }}" alt="service">
                    </div>
                    <div class="servises-item__content">
                        <h4 class="servises-title">Tracking de Performance</h4>
                        <p class="servises-text">Le tracking de performance consiste à suivre et évaluer les actions stratégiques mises en place.
                        </p>
                    </div>
                    <a href="{{ route('performance_tracking') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="servises-item bg-green-color">
                    <div class="servises-item__thumb">
                        <img loading="lazy" src="{{ asset('assets/img/info-box5.png') }}" alt="service">
                    </div>
                    <div class="servises-item__content">
                        <h4 class="servises-title">Représentations Commerciales</h4>
                        <p class="servises-text">Notre mission en Représentation Commerciale a pour but de permettre aux Entreprises tant sur le plan national qu’international de rester concentrées sur leur cœur d’activité en leur offrant un accompagnement leur permettant de dynamiser leur croissance commerciale dans les secteurs qu’elles souhaitent s’étendre ou s’implanter.
                        </p>
                    </div>
                    <a href="{{ route('sales_representation') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt120">
        <div class="row">
            <div class="our-video js-equal-child">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding">
                    <div class="video theme-module">
                        <div class="video-thumb">
                            {{-- <div class="overlay"></div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 no-padding">
					<div class="content theme-module centered-on-mobile medium-padding100">
						<div class="heading">
							<h4 class="h5 heading-title" style="font-weight: bold">DRC Marketing Forum</h4>
							<div class="heading-line">
								<span class="short-line"></span>
								<span class="long-line"></span>
							</div>
							<p class="heading-text" >Un rendez-vous privilégié des rencontres et d’échanges 
                                avec des leaders d'opinion et des experts en marketing.
							</p>
						</div>
						<a href="https://dmf.lasouveraine.marketing/" target="_blank" class="btn btn-medium btn--secondary">
							<span class="text">DECOUVREZ LE DMF</span>
							<span class="semicircle"></span>
						</a>
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