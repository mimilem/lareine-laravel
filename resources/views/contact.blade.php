@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row medium-padding80 bg-border-color contacts-shadow">
            <div class="container">
                <div class="row">
                    <div class="contacts">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="contacts-item">
                                <img loading="lazy" src="{{ asset('assets/img/contact7.png') }}" alt="phone">
                                <div class="content">
                                    <a href="#" class="title">Johannesburg, RSA</a>
                                    <p class="sub-title">8 Meadowbrook Lane, Epsom Downs, Sandton, 2196</p>
                                    <div class="content">
                                        <a href="#" class="title">Lubumbashi, RDC</a>
                                        <p class="sub-title">No. 269 Av. Kasongo Nyembo, Q/ Baudouin</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="contacts-item">
                                <img loading="lazy" src="{{ asset('assets/img/contact8.png') }}" alt="phone">
                                <div class="content">
                                    <a href="mailto:lasouveraine@lasouveraine.marketing" class="title" >lasouveraine@lasouveraine.marketing</a>
                                    <p class="sub-title">online support</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="contacts-item">
                                <img loading="lazy" src="{{ asset('assets/img/contact9.png') }}" alt="phone">
                                <div class="content">
                                    <a href="tel:+27110836004" class="title">+27 11 083 6004 (RSA)</a><br>
								    <a href="tel:+243906632155" class="title">+243 906 632 155 (RDC)</a>
                                    <p class="sub-title">Lun. - Sam. 09:00 - 18:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="medium-padding120">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="heading">
                        <h4 class="heading-title">Laissez-nous un message</h4>
                        <div class="heading-line">
                            <span class="short-line"></span>
                            <span class="long-line"></span>
                        </div>
                    </div>
                </div>
            </div>

            <form method="post"  action="{{ route('contact') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="name" class="input-standard-grey" placeholder="Votre nom" type="text" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="mail" class="input-standard-grey" placeholder="Votre mail" type="email" required>
                    </div>
                </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="subject" class="input-standard-grey" placeholder="L'objet du message" type="email" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="phone" class="input-standard-grey" placeholder="Votre numero de contact" type="tel" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea name="message" required class="input-standard-grey" placeholder="Votre message"></textarea>
                    </div>
                </div>
                @include('includes.message')
                <div class="row">
                    <div class="submit-block table">
                        <div class="col-lg-3 table-cell">
                            <button type="submit" class="btn btn-small btn--primary">
                                <span class="text">Envoyer</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection