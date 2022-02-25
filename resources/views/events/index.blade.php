@extends('layouts.master')
@section('content')
    <div style="position: relative">
        <div class="stunning-header with-photo stunning-header-bg-photo6">
            <div class="stunning-header-content">
                <h1 class="stunning-header-title">DRC Marketing Forum</h1>
                <p class="breadcrumbs-text">
                    Pour la Promotion de la Satisfaction Clientèle dans chaque Coins en RDC
                </p>
                <div class="row">
                    <a href="#forums" class="btn btn-medium btn--secondary">
                        <span class="text">Nos Differents Forums</span>
                        <span class="semicircle"></span>
                    </a>
                </div>
            </div>
            <div class="overlay overlay-primary"></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background: url('{{ asset('assets/img/photo-elements4.jpg') }}'); background-size: cover; padding:100px 15px; position: relative;">
                <div style="max-width: 790px; text-align: center; margin: 0 auto; position: relative; z-index: 5;">
                    <div class="heading">
                        <h5 class="heading-title" style="font-size: 48px; color: #fff; margin-bottom: 20px;">Notre Vision</h5>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                        <p style="color: #fff; margin: 0 5%; text-align: center; line-height: 25px; font-weight: lighter">En RDC comme partout ailleurs, 
                            le marketing doit être essentiellement une fonction sociétale et commerciale
                            importante qui sert à aligner les forces du marché libre avec les besoins de la clientèle. 
                            Il est un fait que les problèmes mondiaux exigent des solutions mondiales, 
                            cependant nous croyons que les personnes physiques et morales locales d'un pays, 
                            d’une région ou d'une ville doivent être offerts des produits et de services qui 
                            répondent à leurs besoins spécifiques pour à la fois assurer la satisfaction des
                            clients ainsi que la compétitivité durable des entreprises. 
                            
                        </p>
                    </div>
                </div>
                <div class="overlay"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:100px 45px;">
                <div class="offers">
					<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
							<div class="heading">
								<h4 class="h3 heading-title">Qui devrait participer au DMF ?</h4>
								<div class="heading-line">
									<span class="short-line"></span>
									<span class="long-line"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<ul class="list list--secondary">
								<li>
									<i class="seoicon-check"></i>
									<span href="#">Professionnels en marketing,</span>
								</li>
								<li>
									<i class="seoicon-check"></i>
									<span href="#">Experts en Publicité, en Vente et en Communication,</span>
								</li>
								<li>
									<i class="seoicon-check"></i>
									<span href="#">Responsables du service marketing/commercial des entreprises, </span>
								</li>
								<li>
									<i class="seoicon-check"></i>
									<span href="#">Entrepreneurs,</span>
								</li>
                                <li>
									<i class="seoicon-check"></i>
									<span href="#">Chercheurs, professeurs et apprenants du domaine de Marketing</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row medium-padding120">
            <div class="col-lg-12">
                <div class="heading align-center" id="forums">
                    <h4 class="h1 heading-title">Nos Forums</h4>
                </div>
                <div class="row">
                    @foreach ($events as $event)
                        <a href="https://forum.lasouveraine.marketing/{{ $event['token'] }}" target="_blank" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="case-item align-center mb60">
                                <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                                    <img loading="lazy" src="{{ asset('storage/'.$event['picture']) }}" alt="our case">
                                </div>
                                <h6 class="case-item__title"><strong>{{ $event['title'] }}</strong></h6>
                                <div class="case-item__cat">
                                    <div class="event-info">
                                        <p>{{ $event['place'] }}</p>
                                        <p>{{ $event['date'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection