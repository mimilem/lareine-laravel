@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="heading mb30">
                            <h4 class="h1 heading-title">Nos missions en Stratégie Marketing</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>

                            <h5 class="heading-subtitle">En ligne avec notre dessein d’aider et d’accompagner
                                les entreprises à créer et à maintenir la loyauté clientèle, nous intervenons
                                en matière de stratégies marketing permettant aux entreprises de répondre aux
                                besoins implicites ou explicites du marché qu’elles exploitent ou veulent exploiter.
                                L’élaboration d’une stratégie marketing est vitale pour toute entreprise sans celle-ci,
                                il est probable que tout efforts pour attirer des clients soient désordonnés et inefficaces.
                            </h5>

                        </div>

                        <ul class="list list--secondary mb60">
                            <li>
                                <i class="seoicon-check"></i>
                                <span href="#">Expérience client
                                </span>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <span href="#">Branding
                                </span>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <span href="#">Gestion de produit
                                </span>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <span href="#">Marketing digital
                                </span>
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