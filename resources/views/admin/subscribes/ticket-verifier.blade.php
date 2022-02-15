@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-lg-center">
            <div class="col-lg-auto">
                <div class="card card_main">
                <div class="card-block">
                    <div class="jumbotron jumbotron-fluid m-b-0">
                        <div class="container">
                            <h3 class="display-4">Vérifier Le Ticket</h3>
                            <p class="lead">Veuillez saisir le code du ticket pour proceder a la verification.</p>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    @include('includes.message')
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <form action="{{ route('verify_ticket') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input name="code" type="text" required class="form-control">
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 15px">
                                    <div class="col-lg-4">
                                        <button class="btn btn-primary btn-block" type="submit">
                                            Verifier
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection