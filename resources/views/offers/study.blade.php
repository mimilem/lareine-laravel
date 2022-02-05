@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="heading mb30">
                            <h4 class="h1 heading-title">Nos missions d'études</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>

                            <p class="heading-subtitle">
                                Toujours en accords avec notre dessein prioritaire d’aider et de maintenir 
                                la loyauté clientèle, nous intervenons aussi dans le domaine d’étude de marché 
                                afin de réduire les incertitudes dans un environnement très changeant 
                                et surtout très concurrentiel. C’est une démarche de recherche et d’analyse qui 
                                fait appel à des procédés précis. 
                            </p>

                        </div>

                        <ul class="list list--secondary mb60">
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Etudes Qualitatives
                                </a>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Etudes Quantitatives
                                </a>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Trade Census
                                </a>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <a href="{{ route('surveys') }}">Sondage
                                </a>
                            </li>
                        </ul>

                        <!-- <a href="21_seo_analysis.html" class="btn btn-medium btn--dark btn-hover-shadow mb30">
                            <span class="text">Free SEO Consultation</span>
                            <span class="semicircle"></span>
                        </a> -->
                    </div>

                    <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                        <img loading="lazy" src="{{ asset('assets/img/social-photo.png') }}" alt="social">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection