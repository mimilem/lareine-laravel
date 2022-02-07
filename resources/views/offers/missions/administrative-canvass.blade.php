@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row pt120">
        <div class="col-lg-7">
            <div class="heading mb60">
                <div class="heading-line">
                    <h4 class="h1 heading-title">Démarches Administratives</h4>
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                    <h6 class="h4 heading-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
                </div>

                <h5 class="heading-subtitle" style="font-size: 18px; text-align: justify; text-justify: inter-word; padding-right: 10%">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae delectus voluptate vitae, 
                    velit iusto nesciunt harum voluptatum modi tempore iste doloremque reprehenderit, 
                    quam quasi inventore ipsum excepturi possimus eius hic. <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur laboriosam dolor 
                    vitae maiores voluptas in hic corporis quisquam cumque, qui, similique sapiente tempore 
                    dolores amet illum, impedit iste commodi sint?
                </h5>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px;">
            <div class="widget w-request bg-boxed-light">
                <div class="w-request-content">
                    <h4 class="w-request-content-title">Nos Autres Interventions</h4>
                    <ul class="list list--secondary mb60">
                        <li>
                            <a href="{{ route('administrative_canvass') }}">Démarchage Administrative
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('prospection') }}">Prospection
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