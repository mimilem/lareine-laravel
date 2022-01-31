@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row medium-padding120">
        <div class="col-lg-12">
            <div class="heading align-center">
                <!-- <h4 class="h1 heading-title">We Help Over 80 Companies</h4> -->
            </div>
            <ul class="cat-list align-center sorting-menu">
                <li class="cat-list__item active" data-filter="*"><a href="#" class="">Tous</a></li>
                <li class="cat-list__item" data-filter=".etudes"><a href="#" class="">Etudes</a></li>
                <li class="cat-list__item" data-filter=".marketing"><a href="#" class="">Stratégie Marketing</a></li>
                <li class="cat-list__item" data-filter=".formation"><a href="#" class="">Formation</a></li>
                <li class="cat-list__item" data-filter=".logiciel"><a href="#" class="">Logiciel</a></li>
            </ul>
            <div class="row sorting-container" data-layout="fitRows">
                <div class="grid-sizer col-lg-4 col-md-4"></div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sorting-item etudes">
                    <div class="case-item align-center big mb60">
                        <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                            <img loading="lazy" src="assets/img/case4.jpg" alt="our case">
                        </div>
                        <h5 class="case-item__title">Mirum est notare</h5>
                        <div class="case-item__cat">
                            <a href="#">Ecommerce,</a>
                            <a href="#">SEO,</a>
                            <a href="#">SMM</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sorting-item marketing">
                    <div class="case-item align-center big  mb60">
                        <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                            <img loading="lazy" src="assets/img/case5.jpg" alt="our case">
                        </div>
                        <h5 class="case-item__title">Claritas processus</h5>
                        <div class="case-item__cat">
                            <a href="#">SEO,</a>
                            <a href="#">SMM</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sorting-item etudes">
                    <div class="case-item align-center mb60">
                        <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                            <img loading="lazy" src="assets/img/case1.jpg" alt="our case">
                        </div>
                        <h6 class="case-item__title">Investigationes legere</h6>
                        <div class="case-item__cat">
                            <a href="#">B2B Services,</a>
                            <a href="#">Featured,</a>
                            <a href="#">SMM</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sorting-item marketing">
                    <div class="case-item align-center mb60">
                        <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                            <img loading="lazy" src="assets/img/case2.jpg" alt="our case">
                        </div>
                        <h6 class="case-item__title">Mirum est notare</h6>
                        <div class="case-item__cat">
                            <a href="#">B2B Services,</a>
                            <a href="#">SEO</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sorting-item etudes">
                    <div class="case-item align-center mb60">
                        <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                            <img loading="lazy" src="assets/img/case3.jpg" alt="our case">
                        </div>
                        <h6 class="case-item__title">Eodem modo typi qui</h6>
                        <div class="case-item__cat">
                            <a href="#">Ecommerce,</a>
                            <a href="#">SEO,</a>
                            <a href="#">SMM</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sorting-item formation">
                    <div class="case-item align-center mb60">
                        <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                            <img loading="lazy" src="assets/img/case6.jpg" alt="our case">
                        </div>
                        <h6 class="case-item__title">Investigationes legere</h6>
                        <div class="case-item__cat">
                            <a href="#">SMM,</a>
                            <a href="#">Technology</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sorting-item logiciel">
                    <div class="case-item align-center mb60">
                        <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                            <img loading="lazy" src="assets/img/case7.jpg" alt="our case">
                        </div>
                        <h6 class="case-item__title">Investigationes legere</h6>
                        <div class="case-item__cat">
                            <a href="#">Ecommerce,</a>
                            <a href="#">SEO,</a>
                            <a href="#">SMM</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sorting-item logiciel">
                    <div class="case-item align-center mb60">
                        <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                            <img loading="lazy" src="assets/img/case8.jpg" alt="our case">
                        </div>
                        <h6 class="case-item__title">Investigationes legere</h6>
                        <div class="case-item__cat">
                            <a href="#">B2B Services,</a>
                            <a href="#">Featured,</a>
                            <a href="#">SMM</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection