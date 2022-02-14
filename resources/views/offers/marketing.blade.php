@extends('layouts.master')
@section('content')
<div style="position: relative">
	<div class="stunning-header with-photo stunning-header-bg-photo1">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title">Nos Missions en Stratégie Marketing</h1>
			<p class="breadcrumbs-text">
				Notre Mission en Stratégie Marketing est d’accompagner 
                les entreprises à maintenir la fidélité de leur clientèle, d’accroitre ou d’affirmer 
                leur notoriété en permettant à ces derniers de répondre aux attentes implicites ou 
                explicites du marché qu’elles exploitent ou veulent exploiter.
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
						<a href="{{ route('digital_marketing') }}" class="info-box-title">Marketing Digital</a>
						<p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
							sed diam nonummy nibh euismod.
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
						<a href="{{ route('customer_experience') }}" class="info-box-title">Expérience Client</a>
						<p class="text">Claritas est etiam processus dynamicus,
							qui sequitur mutationem consuetudium lectorum.
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
						<a href="{{ route('branding') }}" class="info-box-title">Branding</a>
						<p class="text">Investigationes demonstraverunt lectores
							legere me lius quod ii legunt saepius notare.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="info-box--standard" data-mh="info-boxes">
					<div class="info-box-image">
						<img loading="lazy" src="{{ asset('assets/img/info-box4.png') }}" alt="image">
					</div>
					<div class="info-box-content">
						<a href="{{ route('product_management') }}" class="info-box-title">Gestion des Produits</a>
						<p class="text">Claritas est etiam processus dynamicus,
							qui sequitur mutationem consuetudium lectorum.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="info-box--standard" data-mh="info-boxes">
					<div class="info-box-image">
						<img loading="lazy" src="{{ asset('assets/img/info-box5.png') }}" alt="image">
					</div>
					<div class="info-box-content">
						<a href="#" class="info-box-title">Marketing Inbound</a>
						<p class="text">Investigationes demonstraverunt lectores legere
							me lius quod ii legunt saepius notare.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="info-box--standard" data-mh="info-boxes">
					<div class="info-box-image">
						<img loading="lazy" src="{{ asset('assets/img/info-box6.png') }}" alt="image">
					</div>
					<div class="info-box-content">
						<a href="#" class="info-box-title">Vente Inbound</a>
						<p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
							sed diam nonummy nibh euismod.
						</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection