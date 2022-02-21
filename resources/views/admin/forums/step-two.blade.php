@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header card">
            <h2>Programmer un forum</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
             <!-- Sessions -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Sessions du Forum</h5>
                        </div>

                        <div class="card-block">
                            <p class="m-b-20">
                                Rajoutez les differentes sessions du forum
                            </p>
                            <form method="POST" action="{{ route('add_forum_step_three') }}">
                                @csrf
                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="exampleInputEmail" class="form-control-label">Theme de la session</label>
                                    <input type="topic" name="title" class="form-control" placeholder="Theme de la session">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="exampleInputPassword" class="form-control-label">Orateur</label>
                                    <select class="form-control" name="speaker" id="">
                                        <option value="">Denis Donner</option>
                                        <option value="">Math Donner</option>
                                        <option value="">Denis Willy</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="exampleInputPassword" class="form-control-label">Heure de Debut</label>
                                    <input type="time" name="start_time" class="form-control" placeholder="Heure de Debut">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="exampleInputPassword" class="form-control-label">Heure de Debut</label>
                                    <input type="time" name="end_time" class="form-control" placeholder="Heure de Fin">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Suivant</button>
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