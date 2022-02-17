@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row medium-padding100 bg-border-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="heading mb30">
                            <h4 class="h1 heading-title">Nos Formations</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                            <p class="heading-subtitle" style="line-height: 25px; font-size: 15px">Centrés 
                                principalement sur les entreprises, nos formations consistent à renforcer les 
                                capacités des salariés afin de les rendre plus optimal et plus efficace .
                                Nous intervenant également dans le management des équipes en proposant des 
                                solutions adéquates afin de faciliter l’intégration, la collaboration et le 
                                rendement des équipes.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 no-padding">
                                <h5 style="margin-bottom: 5px; color: #F05223;">Renforcement des Capacités</h5>
                            </div>
                            <p class="selection--dark" style="font-size: 15px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat 
                                volutpat. Ut wisi enim ad minim veniam
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 no-padding">
                                <h5 style="margin-bottom: 5px; color: #F05223;">Management des Equipes</h5>
                            </div>
                            <p class="selection--dark" style="font-size: 15px">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat 
                                volutpat. Ut wisi enim ad minim veniam
                            </p>
                        </div>
                        <div class="row">
                            <a href="#courses" class="btn btn-medium btn--secondary">
                                <span class="text">FORMATIONS DISPONIBLES</span>
                                <span class="semicircle"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="bg-border-color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12" id="courses">
                            <div class="heading align-center">
                                <h4 class="h2 heading-title">Formations disponibles</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($courses as $course)
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="pricing-tables-item" style="background-color: white;">
                                    <div class="pricing-tables-icon">
                                        <img loading="lazy" src="{{ asset('storage/'.$course['picture']) }}" alt="personal">
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