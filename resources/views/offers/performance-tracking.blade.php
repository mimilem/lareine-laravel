@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="heading mb30">
                            <h4 class="h1 heading-title">Nos Missions en Tracking de Performance</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>

                            <h5 class="heading-subtitle">Le tracking de performance consiste à suivre et évaluer 
                                les actions stratégiques  mises en place.
                                Dans notre cadre, nous procédons par les actions suivantes:
                            </h5>

                        </div>

                        <ul class="list list--secondary mb60">
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="{{ route('kpi_definition') }}">Définition Des KPI
                                </a>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <a href="{{ route('tracking_system') }}">Mise En Place Des Systèmes De Tracking
                                </a>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <a href="{{ route('data_analysis') }}">Analyse Et Evaluation Des Données
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                        <img loading="lazy" src="{{ asset('assets/img/social-photo.png') }}" alt="social">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection