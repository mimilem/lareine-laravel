@extends('admin.layouts.auth')
@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="card card-pages shadow-none mt-4">
                    <div class="card-body">
                        <div class="text-center mt-0 mb-3">
                            <a href="{{ route('home') }}" class="logo logo-admin">
                                <img src="{{ asset('assets/img/logo-white.png') }}" class="mt-3" alt="" height="26"></a>
                            <p class="text-muted w-75 mx-auto mb-4 mt-4">Entrez votre mot de passe pour accéder au dashboard.</p>
                        </div>
                        <form class="form-horizontal mt-4" action="#">
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="username">Adresse mail</label>
                                    <input class="form-control" type="text" required="" id="username" placeholder="user@example.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                    <label for="password">Mot de passe</label>
                                    <input class="form-control" type="password" required="" id="password" placeholder="Mot de passe">
                                </div>
                            </div>
                            <div class="form-group text-center mt-3">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Me connecter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection