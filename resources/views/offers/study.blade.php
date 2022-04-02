@extends('layouts.master')
@section('content')
    <div style="position: relative">
        <div class="stunning-header with-photo stunning-header-bg-photo4">
            <div class="stunning-header-content">
                <h1 class="stunning-header-title">Nos Missions Etudes</h1>
                <p class="breadcrumbs-text">
                Notre mission consiste à organiser la collecte, 
                le traitement et l’interprétation des informations relatives aux marchés, 
                et plus généralement aux publics dont dépend l'entreprise. 
                La finalité étant de servir aux décisions marketing en réduisant l'incertitude du décideur et en minimisant les risques encourus, 
                afin d'assurer l'objectivité de ces informations, 
                leur précision, leur pertinence et leur fiabilité.
                </p>
            </div>
            <div class="overlay overlay-primary"></div>
        </div>
        <div class="container info-boxes pt100 pb100">

            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box--standard" data-mh="info-boxes">
                        <div class="info-box-image">
                            <img loading="lazy" src="{{ asset('assets/img/info-box3.png') }}" alt="image">
                        </div>
                        <div class="info-box-content">
                            <a href="{{ route('trade_census') }}" class="info-box-title">Trade Census</a>
                            <p class="text">Recensement de commerce est une forme d’enquête statistique qui est utilisée pour obtenir des informations sur toutes les unités de certains secteurs ou de tous les secteurs du commerce 
                                et qui est réalisée selon un plan d’enquête défini.
                                La réalisation d’un recensement donne lieu à un nombre suffisant et des valeurs fiables de répondants 
                                pour avoir un degré élevé de confiance statistique dans les résultats de l’enquête.

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
                            <a href="{{ route('surveys') }}" class="info-box-title">Sondage</a>
                            <p class="text">Une technique de recueil de données statistiques qui permet de mesurer différents comportements, 
                                avis ou disposition, d’une population ciblée. 
                                On peut obtenir des informations précises concernant l’ensemble de la population à partir de la consultation d’un simple échantillon de cette population.
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
                            <a href="#" class="info-box-title">Etude tarifaire</a>
                            <p class="text">L’étude Tarifaire vise essentiellement à proposer une <b>nouvelle structure tarifaire</b> plus équitable, 
                                permettant d’accroître le tarif moyen du secteur en vue de soutenir les investissements identifiés et en même 
                                temps rétablir et maintenir l’équilibre financier du secteur
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
                            <a href="#" class="info-box-title">Etude de la distribution</a>
                            <p class="text">Vise à comprendre le circuit de distribution d’un produit, 
                                ainsi que les facteurs qui entrent en compte et à en dénicher des nouvelles opportunités. 
                                Cette étude permet essentiellement de définir ou de restructurer la Road To Market du produit.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box--standard" data-mh="info-boxes">
                        <div class="info-box-image">
                            <img loading="lazy" src="{{ asset('assets/img/info-box10.png') }}" alt="image">
                        </div>
                        <div class="info-box-content">
                            <a href="#" class="info-box-title">Etude du produit</a>
                            <p class="text">Chaque élément qui compose votre produit doit être étudié et spécifié au travers du marketing produit : 
                                <b>marque, design, packaging, normes, labels, gamme.</b>
                                L’objectif est un produit en adéquation avec les demandes du marché et les attentes des prospects. 
                                Un produit avec lequel vous pouvez vous distinguer et faire face à vos concurrents.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box--standard" data-mh="info-boxes">
                        <div class="info-box-image">
                            <img loading="lazy" src="{{ asset('assets/img/info-box9.png') }}" alt="image">
                        </div>
                        <div class="info-box-content">
                            <a href="#" class="info-box-title">Mystery Shopping</a>
                            <p class="text">: Permet la mise en place de visites mystères à des fins de mesure de la qualité de l'accueil et de l'expérience d'achat / expérience client en points de vente. 
                                S’en tenant aux faits observés, le Mystery Shopper relate au travers d’un questionnaire créé sur mesure, les différents aspects de sa visite.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection