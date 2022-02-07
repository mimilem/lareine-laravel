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
                                    <a href="#" class="title">Lubumbashi, RDC</a>
                                    <p class="sub-title">No. 269 Av. Kasongo Nyembo, Q/ Baudouin</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="contacts-item">
                                <img loading="lazy" src="{{ asset('assets/img/contact8.png') }}" alt="phone">
                                <div class="content">
                                    <a href="mailto:info@lasouveraine.marketing" class="title" >info@lasouveraine.marketing</a>
                                    <p class="sub-title">online support</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="contacts-item">
                                <img loading="lazy" src="{{ asset('assets/img/contact9.png') }}" alt="phone">
                                <div class="content">
                                    <a href="tel:+243906632155" class="title">+243 906 632 155</a>
                                    <p class="sub-title">Mon-Fri 9am-6pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="contact-form medium-padding120">
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

            <form class="contact-form crumina-submit" method="post" data-nonce="crumina-submit-form-nonce" data-type="standard" action="https://html.crumina.net/html-seosight/modules/forms/submit.php">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="name" class="input-standard-grey" placeholder="Votre nom" type="text" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="email" class="input-standard-grey" placeholder="Votre mail" type="email" required>
                    </div>
                </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="object" class="input-standard-grey" placeholder="L'objet du message" type="email" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input name="phone" class="input-standard-grey" placeholder="Votre numero de contact" type="tel" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea name="message" class="input-standard-grey" placeholder="Votre message"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="submit-block table">
                        <div class="col-lg-3 table-cell">
                            <button class="btn btn-small btn--primary">
                                <span class="text">Envoyer</span>
                            </button>
                        </div>
                        <div class="col-lg-5 table-cell">
                            <div class="submit-block-text">
                                Please, let us know any particular things to check and the best time
                                to contact you by phone (if provided).
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection