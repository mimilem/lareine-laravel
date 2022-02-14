@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="heading mb30">
                            <h4 class="h1 heading-title">Nos missions Etudes</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                            <p class="heading-subtitle">
                                Notre mission consiste à organiser la collecte, le traitement et 
                                l’interprétation des informations relatives aux marchés, et plus 
                                généralement aux publics dont dépend l'entreprise. La finalité étant 
                                de servir aux décisions marketing en réduisant l'incertitude du décideur 
                                et en minimisant les risques encourus,  afin d'assurer l'objectivité de 
                                ces informations, leur précision, leur pertinence et leur fiabilité.
                            </p>
                        </div>
                        <ul class="list list--secondary mb60">
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="{{ route('qualitative_studies') }}">Etudes Qualitatives
                                </a>
                            </li>
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="{{ route('quantitative_studies') }}">Etudes Quantitatives
                                </a>
                            </li>
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="{{ route('trade_census') }}">Trade Census
                                </a>
                            </li>
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="{{ route('surveys') }}">Sondage
                                </a>
                            </li>
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Etude tarifaire,

                                </a>
                            </li>
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Etude de la distribution
                                </a>
                            </li>
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Etude du produit 
                                </a>
                            </li>
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Etude de la communication
                                </a>
                            </li>
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Mystery Shopping

                                </a>
                            </li>
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Recensement
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