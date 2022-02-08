@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row pt120">
        <div class="col-lg-7">
            <div class="heading mb60">
                <div class="heading-line">
                    <h4 class="h1 heading-title">Marketing Digital</h4>
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                    <h6 class="h4 heading-title">Faites connaître vos services grâce à la puissance du digital</h6>
                </div>

                <h5 class="heading-subtitle" style="font-size: 18px; text-align: justify; text-justify: inter-word; padding-right: 10%">
                    Le marketing digital est l'ensemble des stratégies mises en oeuvre pour promouvoir ses services
                  ou sa société sur le web, en exploitant les réseaux sociaux.
                    <br><br>
                  Aujourd'hui la présence digitale est indispensable pour à toute entreprise qui veut générer plus de
                  revenus et attirer davantage de prospects. 

                  C'est la raison pour laquelle nous mettons à votre disposition des techniques modernes et efficaces pour
                  exploiter la puissance du digital à l'avantage de votre entreprise


                </h5>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;">
            <div class="widget w-request bg-boxed-light">
                <div class="w-request-content">
                    <h4 class="w-request-content-title">Nos Autres Interventions</h4>
                    <ul class="list list--secondary mb60">
                        <li>
                            <a href="{{ route('customer_experience') }}">Expérience Client
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('branding') }}">Branding
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('product_management') }}">Gestion des Produits
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
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