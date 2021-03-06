@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row pt120 pb30">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="servises-item bg-blue-color">
                    <div class="servises-item__thumb">
                        <img loading="lazy" src="assets/img/services1.png" alt="service">
                    </div>
                    <div class="servises-item__content">
                        <h4 class="servises-title">Missions en Stratégie Marketing</h4>
                        <p class="servises-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh.
                        </p>
                    </div>
                    <a href="{{ route('marketing_strategy') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="servises-item bg-primary-color">
                    <div class="servises-item__thumb">
                        <img loading="lazy" src="{{ asset('assets/img/services2.png') }}" alt="service">
                    </div>
                    <div class="servises-item__content">
                        <h4 class="servises-title">Etudes</h4>
                        <p class="servises-text">Claritas est etiam processus dynamicus,
                            qui sequitur mutationem consuetudium lectorum quam nunc putamus.
                        </p>
                    </div>
                    <a href="{{ route('study') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="servises-item bg-green-color">
                    <div class="servises-item__thumb">
                        <img loading="lazy" src="{{ asset('assets/img/services5.png') }}" alt="service">
                    </div>
                    <div class="servises-item__content">
                        <h4 class="servises-title">Formations</h4>
                        <p class="servises-text">Eodem modo typi, qui nunc nobis videntur parum clari,
                            fiant sollemnes in futurum.
                        </p>
                    </div>
                    <a href="{{ route('courses') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                </div>
            </div>
        </div>

        <div class="row pb120">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="servises-item bg-secondary-color">
                    <div class="servises-item__thumb">
                        <img loading="lazy" src="{{ asset('assets/img/services3.png') }}" alt="service">
                    </div>
                    <div class="servises-item__content">
                        <h4 class="servises-title">Tracking de Performance</h4>
                        <p class="servises-text">Investigationes demonstraverunt legere
                            me lius quod ii legunt saepius.
                        </p>
                    </div>
                    <a href="{{ route('performance_tracking') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="servises-item bg-orange-color">
                    <div class="servises-item__thumb">
                        <img loading="lazy" src="{{ asset('assets/img/services4.png') }}" alt="service">
                    </div>
                    <div class="servises-item__content">
                        <h4 class="servises-title">Représentations Commerciales</h4>
                        <p class="servises-text">Nam liber tempor cum soluta nobis eleifend
                            option congue nihil imperdiet doming id quod mazim placerat assum.
                        </p>
                    </div>
                    <a href="{{ route('sales_representation') }}" class="read-more"><i class="seoicon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection