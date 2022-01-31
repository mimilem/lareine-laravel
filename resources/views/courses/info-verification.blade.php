@extends('layouts.master')

@section('content')
    <div class="container">
        <h5 class="title">Veuillez vérifier vos données et confirmer votre souscription.
            Vous recevrez automatiquement à votre adresse e-mail la confirmation et numéro de votre réservation.</h5>
        <form class="form-validate contact-form">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="firstname" placeholder="Prénom" type="text">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="lastname" placeholder="Nom" type="text">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="postname" placeholder="Post-nom" type="text">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <select name="gender">
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                    </select>
                </div> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input class="input-standard-grey" name="phone" placeholder="Téléphone" type="text">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input class="input-standard-grey" name="mail" placeholder="Adresse mail" type="email">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="profession" placeholder="Profession" type="text">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="city" placeholder="Ville" type="text">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="state" placeholder="Province" type="text">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="country" placeholder="Pays" type="text">
                </div>
                <a class="btn btn-small btn--primary" href="verify/" style="margin-bottom: 20px; margin-left: 0;">
                    <span class="text">Vérifier</span>
                    <i class="seoicon-right-arrow"></i>
                </a>
            </div>
        </form>
    </div>
@endsection
