@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="heading mb30">
                            <h4 class="h1 heading-title">Nos missions de Formation</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>

                            <p class="heading-subtitle">Augmentez l'efficacité de vos ventes et améliorez 
                                considérablement vos résultats marketing en participant à nos cours et 
                                séminaires de formation. Nos cours de vente et de marketing sont dispensés 
                                par des experts du secteur. Ils intègrent les meilleures pratiques éprouvées 
                                et l'expérience du monde réel pour vous aider, ainsi que votre équipe et votre 
                                entreprise, à exceller dans l'environnement commercial difficile d'aujourd'hui.
                            </p>

                        </div>

                        <ul class="list list--secondary mb60">
                            <li>
                                <i class="seoicon-check"></i>
                                <span href="#">Renforcement des capacités
                                </span>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <span href="#">Management des Equipes
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                        <img loading="lazy" src="/assets/img/social-photo.png" alt="social">
                    </div>
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
                        @foreach ($courses as $course)
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="pricing-tables-item" style="background-color: white;">
                                    <div class="pricing-tables-icon">
                                        <img loading="lazy" src="{{ asset('assets/img/pricing1.png') }}" alt="personal">
                                    </div>
                                    <a href="#" class="pricing-title">{{ $course['title'] }}</a>
                                    <ul class="pricing-tables-position">
                                        <li class="position-item">
                                            <span class="count">Lieu</span>
                                            {{ $course['place'] }}
                                        </li>
                                        <li class="position-item">
                                            <span class="count">Date</span>
                                            {{ date('d-m-Y', strtotime($course['date'])) }}
                                        </li>
                                        <li class="position-item">
                                            <span class="count">Heure</span>
                                            {{ $course['start_time'] }}
                                        </li>
                                        <li class="position-item">
                                            -
                                        </li>
                                        {{-- <li class="position-item">
                                            <span class="count">15</span>
                                            Social Accounts
                                        </li> --}}
                                    </ul>
                                    <h4 class="rate">$ {{ $course['amount'] }}</h4>
                                    <a href="{{ route('course_details', ['token' => $course['token']]) }}" class="btn btn-medium btn--dark">
                                        <span class="text">Je souscris !</span>
                                        <span class="semicircle"></span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection