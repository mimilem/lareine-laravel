@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row pt120">
        <div class="col-lg-9">
            <div class="heading mb60">
                <div class="heading-line">
                    <h4 class="h1 heading-title" style="font-size: 35px;">Assurez votre avenir en ayant une marque puissante !</h4>
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>

                <h5 class="heading-subtitle" style="font-size: 20px; text-align: justify; text-justify: inter-word;">
                    Notre dessein ultime étant celui d’aider les entreprises à créer et à maintenir la loyauté clientèle, 
                    nous intervenons dans le domaine du Branding, afin de vous aider à gérer efficacement votre marque. <br> 
                    Une « brand » ou marque c’est d’abord une histoire. Confiez-nous d’abord son récit et nous vous 
                    aidons à bâtir votre plateforme de marque et à préciser les contours de sa personnalité, sa différence , 
                    la manière dont elle doit prendre la parole; nous produisons un « pitch » qui rendra perceptible 
                    l’essence même de votre marque, qui guidera votre communication et donnera sens à l’engagement de vos 
                    publics. Notre solution de branding permet aux entreprises d’expliquer leur histoire en un instant , 
                    de créer un lien émotionnel, de renforcer la confiance, de toucher un public qui partage leurs valeurs’ 
                    ouvrir des nouvelles portes, de générer la croissance et enfin de créer une influence positive sur 
                    le moral de vos employés.
                </h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;">
            <div class="widget w-request bg-boxed-red">
                <div class="w-request-content">
                    <h4 class="w-request-content-title">Parlez-nous de votre projet</h4>
                    <p class="w-request-content-text">Nous sommes impatient de vous aider</p>
                    <a href="{{ route('contact') }}" class="btn btn-small btn--dark btn-hover-shadow">
                        <span class="text">Contactez-nous</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection