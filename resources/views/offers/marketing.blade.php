@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="heading mb30">
                            <h4 class="h3 heading-title">Nos Missions en Stratégie Marketing</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                            <p class="heading-subtitle">En ligne avec notre dessein d’aider et d’accompagner
                                les entreprises à créer et à maintenir la loyauté clientèle, nous intervenons
                                en matière de stratégies marketing permettant aux entreprises de répondre aux
                                besoins implicites ou explicites du marché qu’elles exploitent ou veulent exploiter.
                            </p>

                        </div>
                        <ul class="list list--secondary mb60">
                            <li>
                                <i class="seoicon-check"></i>
                                <a href="{{ route('customer_experience') }}">Expérience client
                                </a>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Branding
                                </a>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <a href="#">Gestion de produit
                                </a>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <a href="{{ route('digital_marketing') }}">Marketing digital
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