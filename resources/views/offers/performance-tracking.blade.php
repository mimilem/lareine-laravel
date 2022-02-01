@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="heading mb30">
                            <h4 class="h1 heading-title">Nos missions en Tracking de Performance</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>

                            <h5 class="heading-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Impedit, ipsa? Incidunt dolorum quibusdam temporibus inventore quo deserunt sit, 
                                excepturi maiores quae qui impedit, aspernatur quis assumenda, deleniti molestiae ea ullam?
                            </h5>

                        </div>

                        <ul class="list list--secondary mb60">
                            <li>
                                <i class="seoicon-check"></i>
                                <span href="#">Définition des KPI
                                </span>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <span href="#">Mise en place des systèmes de tracking
                                </span>
                            </li>

                            <li>
                                <i class="seoicon-check"></i>
                                <span href="#">Analyse et évaluation des données
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