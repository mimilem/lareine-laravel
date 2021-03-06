@extends('layouts.master')

@section('extra')
    <div class="window-popup">
        <a href="#" class="popup-close js-popup-close cd-nav-trigger">
            <i class="seosight-icon seoicon-delete"></i>
        </a>
        <div class="sign-in-popup">
            <img loading="lazy" src="{{ asset('assets/img/logo.png') }}" width="250" alt="La Souveraine logo">
            <h5 class="title">Je m'inscris</h5>
            <form action="{{ route('verify_subscription') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $course->token }}">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input class="input-standard-grey" name="first_name" placeholder="Prénom" type="text">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input class="input-standard-grey" name="last_name" placeholder="Nom" type="text">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input class="input-standard-grey" name="post_name" placeholder="Post-nom" type="text">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <select name="gender">
                            <option value="H">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                    </div> 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input class="input-standard-grey" name="phone" placeholder="Téléphone" type="text">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input class="input-standard-grey" name="email" placeholder="Adresse mail" type="email">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input class="input-standard-grey" name="work" placeholder="Profession" type="text">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input class="input-standard-grey" name="city" placeholder="Ville" type="text">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input class="input-standard-grey" name="province" placeholder="Province" type="text">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input class="input-standard-grey" name="country" placeholder="Pays" type="text">
                    </div>
                    <button type="submit" class="btn btn-small btn--primary" style="margin-bottom: 20px; margin-left: 0;">
                        <span class="text">Vérifier</span>
                        <i class="seoicon-right-arrow"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row medium-padding120">
            <div class="product-details">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="product-details-thumb">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img loading="lazy" src="{{ asset('storage/'.$course->picture) }}" alt="product">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                    <div class="product-details-info">
                        <div class="product-details-info-price">${{ $course->amount }} </div>
                        <h3 class="product-details-info-title">{{ $course->title }} </h3>
                        
                        <p class="product-details-info-text">{{ $course->description }}
                        </p>
                        
                        <div class="product-details-add-info">
                            <div class="author">Audience Ciblée :
                                <span href="#" class="author-name">{{ $course->target_audience }}</span>
                            </div>
                            <div class="author">Facilitateur :
                                <span href="#" class="author-name">...</span>
                            </div>
                            <div class="author">Date :
                                <span href="#" class="author-name">{{ $course->date }}</span>
                            </div>
                            <div class="author">Heure de début :
                                <span href="#" class="author-name">{{ $course->start_time }}</span>
                            </div>
                            <div class="author">Heure de fin :
                                <span href="#" class="author-name">{{ $course->end_time }}</span>
                            </div>
                            <div class="author">Lieu :
                                <span href="#" class="author-name">{{ $course->place }}</span>
                            </div>
                            <div class="author">Ville :
                                <span href="#" class="author-name">{{ $course->city }}</span>
                            </div>
                            <div class="author">Province :
                                <span href="#" class="author-name">{{ $course->province }}</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-medium btn--primary js-window-popup">
                            <span class="text">Souscrire</span>
                            <span class="semicircle"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection