@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row pt120">
        <div class="col-lg-9">
            <div class="heading mb60">
                <div class="heading-line">
                    <h4 class="h1 heading-title" style="font-size: 35px;">Offrez une expérience client exceptionnelle pour fidéliser vos clients.</h4>
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>

                <h5 class="heading-subtitle" style="font-size: 20px; text-align: justify; text-justify: inter-word;">
                L’Expérience Client (XC) est l’ensemble des interactions entre un client et une marque, une entreprise 
                et ses produits/services.
                C’est avec l’expérience client que les meilleures entreprises se distinguent.
                 En effet, celles-ci comprennent bien qu’une Expérience Client exceptionnelle n’est pas le fruit du hasard.
                  Ces expériences exigent une stratégie holistique conçue pour amener vos clients à se sentir inspirés, bien
                   traités et confiants.
                Beaucoup d’organisations internationale font appel à nous pour repenser leurs modèles d’affaires et 
                les aider à mettre leurs clients au cœur de leurs activités. Nous préconisons une approche centrée sur 
                l’humain qui intègre les personnes, la créativité et la technologie et qui vise à aider les entreprises
                 à offrir une expérience client exceptionnelle de par sa conception. 
                Si vous souhaitez offrir une meilleure expérience à vos clients, les fidéliser et augmenter vos revenus,
                 il faut mettre en pratique des techniques pertinentes et imparables. Voici quelques bonnes pratiques qui
                  vous aideront à y parvenir.

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