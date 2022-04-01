@extends('layouts.master')
@section('content')
    <div style="position: relative">
        <div class="stunning-header with-photo stunning-header-bg-photo2">
            <div class="stunning-header-content">
                <h1 class="stunning-header-title">Nos Missions en Tracking de Performance</h1>
                <p class="breadcrumbs-text">
                Le tracking de performance consiste à suivre et évaluer les actions stratégiques mises en place. 
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
                            <p class="text">Les Indicateurs Clés de Performance, traduit en Anglais « Key Indicateur Performance (KPI), sont indispensables pour piloter et mesurer l’impacte des nos actions commerciales, tant pour les ventes que pour les actions Marketing. 
                                Les KPI sont donc essentiels et rendent ainsi plus aisée l’évaluation de la situation en temps réel et permettent une prise de décision plus adaptée.
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
                            <p class="text">Après avoir défini les KPI, il est important d’en suivre et d’en récolter les données. 
                                Notre mission consiste à faciliter la récolte et le suivi de ces données en mettant en place des outils digitaux performants pouvant favoriser le rendu en temps réel.
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
                            <p class="text">Pour la visualisation et l’interprétation de ces données, nous élaborons des tableaux de bords, qui permettent de suivre facilement et efficacement les indicateurs de performance. 
                                Notre sens critique permet après les résultats de faire des observations et des suggestions pertinents afin de prendre des actions adéquates pour une meilleure réussite.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection