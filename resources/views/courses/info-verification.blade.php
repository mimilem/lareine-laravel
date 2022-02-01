@extends('layouts.master')

@section('content')
    <div class="container">
        <h5 class="title">Veuillez vérifier vos données et confirmer votre souscription.
        Vous recevrez automatiquement à votre adresse e-mail la confirmation et numéro de votre réservation.</h5>
        <form action="verify" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="first_name" value="{{ $first_name }}" placeholder="Prénom" type="text">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="last_name" value="{{ $last_name }}" placeholder="Nom" type="text">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="post_name" value="{{ $post_name }}" placeholder="Post-nom" type="text">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <select name="gender">
                        <option value="H" {{ $gender=="H" ? "selected" : "" }} >Homme</option>
                        <option value="F" {{ $gender=="F" ? "selected" : "" }} >Femme</option>
                    </select>
                </div> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input class="input-standard-grey" name="phone" value="{{ $phone }}" placeholder="Téléphone" type="text">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input class="input-standard-grey" name="email" value="{{ $email }}" placeholder="Adresse mail" type="email">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="work" value="{{ $work }}" placeholder="Profession" type="text">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="city" value="{{ $city }}" placeholder="Ville" type="text">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="province" value="{{ $province }}" placeholder="Province" type="text">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input class="input-standard-grey" name="country" value="{{ $country }}" placeholder="Pays" type="text">
                </div>
                <button type="submit" class="btn btn-small btn--primary" style="margin-bottom: 20px; margin-left: 0;">
                    <span class="text">Vérifier</span>
                    <i class="seoicon-right-arrow"></i>
                </button>
            </div>
        </form>
    </div>
@endsection
