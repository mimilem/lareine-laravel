@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row medium-padding120">

        <div class="col-lg-12">

            <div class="heading align-center">
                <h4 class="h1 heading-title">Nos Evenements</h4>
            </div>



            <div class="row">
                <a href="{{ route('event_details', ['id' => 1])}}" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="case-item align-center mb60">
                        <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                            <img loading="lazy" src="{{ asset('assets/img/case1.jpg') }}" alt="our case">
                        </div>
                        <h6 class="case-item__title">Lancement CRDB</h6>
                        <div class="case-item__cat">
                            
                        </div>
                    </div>
                </a>

                <a href="#" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="case-item align-center mb60">
                        <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                            <img loading="lazy" src="{{ asset('assets/img/case3.jpg') }}" alt="our case">
                        </div>
                        <h6 class="case-item__title">Investigationes legere</h6>
                        <div class="case-item__cat">
                            
                        </div>
                    </div>
                </a>

                <a href="#" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="case-item align-center mb60">
                        <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                            <img loading="lazy" src="{{ asset('assets/img/case5.jpg') }}" alt="our case">
                        </div>
                        <h6 class="case-item__title">Investigationes legere</h6>
                        <div class="case-item__cat">
                            
                        </div>
                    </div>
                </a>

            </div>
        </div>

    </div>
</div>
@endsection