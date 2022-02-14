@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="heading mb30">
                            <h4 class="h1 heading-title">Nos missions en Représentation Commerciale</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>

                            <h5 class="heading-subtitle">La représentation commerciale consiste à faire appel à un 
                                prestataire externe pour la réalisation des tâches commerciales. Nous intervenons 
                                en mettant en place les ressources nécessaires afin d’atteindre les objectifs ciblés. 
                            </h5>

                        </div>

                        <ul class="list list--secondary mb60">
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="{{ route('administrative_canvass') }}">Démarchage Administrative
                                </a>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <a href="{{ route('prospection') }}">Prospection
                                </a>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Recrutement
                                </a>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Reporting
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