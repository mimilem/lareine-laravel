@extends('layouts.master')
@section('content')
    <div style="position: relative">
        <div class="stunning-header with-photo stunning-header-bg-photo2">
            <div class="stunning-header-content">
                <h1 class="stunning-header-title">Nos Missions en Tracking de Performance</h1>
                <p class="breadcrumbs-text">
                    Le tracking de performance consiste à suivre et évaluer 
                    les actions stratégiques  mises en place.
                    Dans notre cadre, nous procédons par les actions suivantes:
                </p>
            </div>
            <div class="overlay overlay-primary"></div>
        </div>
        <div class="container info-boxes pt100 pb100">

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box--standard" data-mh="info-boxes">
                        <div class="info-box-image">
                            <img loading="lazy" src="{{ asset('assets/img/info-box1.png') }}" alt="image">
                        </div>
                        <div class="info-box-content">
                            <a href="{{ route('kpi_definition') }}" class="info-box-title">Définition Des KPI</a>
                            <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box--standard" data-mh="info-boxes">
                        <div class="info-box-image">
                            <img loading="lazy" src="{{ asset('assets/img/info-box2.png') }}" alt="image">
                        </div>
                        <div class="info-box-content">
                            <a href="{{ route('tracking_system') }}" class="info-box-title">Mise En Place Des Systèmes De Tracking</a>
                            <p class="text">Claritas est etiam processus dynamicus,
                                qui sequitur mutationem consuetudium lectorum.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box--standard" data-mh="info-boxes">
                        <div class="info-box-image">
                            <img loading="lazy" src="{{ asset('assets/img/info-box3.png') }}" alt="image">
                        </div>
                        <div class="info-box-content">
                            <a href="{{ route('data_analysis') }}" class="info-box-title">Analyse Et Evaluation Des Données</a>
                            <p class="text">Investigationes demonstraverunt lectores
                                legere me lius quod ii legunt saepius notare.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection