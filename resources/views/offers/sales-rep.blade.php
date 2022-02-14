@extends('layouts.master')
@section('content')
    <div style="position: relative">
        <div class="stunning-header with-photo stunning-header-bg-photo6">
            <div class="stunning-header-content">
                <h1 class="stunning-header-title">Nos missions en Représentation Commerciale</h1>
                <p class="breadcrumbs-text">
                    Notre mission consiste à organiser la collecte, le traitement et 
                    l’interprétation des informations relatives aux marchés, et plus 
                    généralement aux publics dont dépend l'entreprise. La finalité étant 
                    de servir aux décisions marketing en réduisant l'incertitude du décideur 
                    et en minimisant les risques encourus,  afin d'assurer l'objectivité de 
                    ces informations, leur précision, leur pertinence et leur fiabilité.
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
                            <a href="{{ route('administrative_canvass') }}" class="info-box-title">Démarchage Administrative</a>
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
                            <a href="{{ route('prospection') }}" class="info-box-title">Prospection</a>
                            <p class="text">Claritas est etiam processus dynamicus,
                                qui sequitur mutationem consuetudium lectorum.
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
                            <a href="#" class="info-box-title">Recrutement</a>
                            <p class="text">Investigationes demonstraverunt lectores
                                legere me lius quod ii legunt saepius notare.
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
                            <a href="#" class="info-box-title">Reporting</a>
                            <p class="text">Claritas est etiam processus dynamicus,
                                qui sequitur mutationem consuetudium lectorum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection