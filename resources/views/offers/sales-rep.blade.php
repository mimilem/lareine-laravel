@extends('layouts.master')
@section('content')
    <div style="position: relative">
        <div class="stunning-header with-photo stunning-header-bg-photo6">
            <div class="stunning-header-content">
                <h1 class="stunning-header-title">Nos missions en Représentation Commerciale</h1>
                <p class="breadcrumbs-text">
                Notre mission en Représentation Commerciale a pour but de permettre aux Entreprises tant sur le plan national qu’international de rester concentrées sur leur cœur d’activité en leur offrant un accompagnement leur permettant de dynamiser leur croissance commerciale dans les secteurs qu’elles souhaitent s’étendre ou s’implanter. 
                Nous vous aiderons à aborder votre business avec tout ce que cela comporte au niveau du plan d’action commerciale et la mise en place des actions.
                </p>
            </div>
            <div class="overlay overlay-primary"></div>
        </div>
        <div class="container info-boxes pt100 pb100">

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box--standard" data-mh="info-boxes">
                        <div class="info-box-image">
                            <img loading="lazy" src="{{ asset('assets/img/info-box2.png') }}" alt="image">
                        </div>
                        <div class="info-box-content">
                            <a href="{{ route('prospection') }}" class="info-box-title">Prospection</a>
                            <p class="text">nous assurons la conquête et le développement des nouveaux clients ainsi que le suivi des démarchages jusqu’à la vente des produits ou services.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box--standard" data-mh="info-boxes">
                        <div class="info-box-image">
                            <img loading="lazy" src="{{ asset('assets/img/info-box9.png') }}" alt="image">
                        </div>
                        <div class="info-box-content">
                            <a href="#" class="info-box-title">Recrutement</a>
                            <p class="text">: nous intervenons également dans le recrutement, 
                                la gestion et la formation des ressources humaine en mettant en avant, la technicité, 
                                mais aussi la maitrise du terrain afin de permettre d’accélérer les ventes et l’atteinte des objectifs fixés.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box--standard" data-mh="info-boxes">
                        <div class="info-box-image">
                            <img loading="lazy" src="{{ asset('assets/img/info-box10.png') }}" alt="image">
                        </div>
                        <div class="info-box-content">
                            <a href="#" class="info-box-title">Outsourcing Commerciale</a>
                            <p class="text">permet d’accéder à des leviers de croissance commerciale.
                                Générer des contacts qualifiés (leads) : Grâce à la maitrise et à l’expérience du marché que nous détenons du Haut Katanga, 
                                assurer la représentation des entreprises permet d’engager plus rapidement des relations d’affaires.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection