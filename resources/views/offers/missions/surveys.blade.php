@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row pt120">
        <div class="col-lg-9">
            <div class="heading mb60">
                <div class="heading-line">
                    <h4 class="h1 heading-title" style="font-size: 35px;">Faites de vos clients un atout stratégique !</h4>
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
                <h5 class="heading-subtitle" style="font-size: 20px; text-align: justify; text-justify: inter-word;">
                    De la conception du projet au recrutement de répondants et aux rapports sur les données, 
                    nous nous assurons que vous obteniez les dernières des réponses à vos questions les plus 
                    importantes sur le marché, votre marque, les clients et vos produits ou vos services ainsi 
                    que vos concurrents. <br>
                    A travers notre logiciel de sondage qui peut tout gérer, des simples questionnaires aux 
                    projets de recherche détaillés pour les plus grandes marques du monde, nos sondages en 
                    ligne sont un excellent moyen d’atteindre et d’interagir avec votre public cible interne 
                    et externe. Atteignez-les rapidement, de manière rentable et obtenez des résultats en 
                    temps réel pour prendre des décisions opportunes et exploitables qui ont un impact sur 
                    votre entreprise. Beaucoup d’entreprises internationales font appels à nous dans le domaine
                     du sondage.
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