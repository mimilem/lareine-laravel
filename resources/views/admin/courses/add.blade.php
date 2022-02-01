@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Ajouter Une formation</h3>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Titre De la Formation</label>
                        <input type="text" required placeholder="Titre de la formation" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Sous-titre de la formation</label>
                        <input type="text" required placeholder="Sous-titre de la formation" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Description</label>
                        <input type="text" required placeholder="Description" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Audience ciblée</label>
                        <input type="text" required placeholder="Audience ciblée" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label for="">Prérequis</label>
                        <input type="text" required placeholder="Prérequis" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label for="">Lieu</label>
                        <input type="text" required placeholder="Lieu" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Prix de la formation</label>
                        <input type="number" name="amount" min="0.1" step="0.1" required placeholder="Prix" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Pays</label>
                        <input type="text" required placeholder="Pays" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Province</label>
                        <input type="text" required placeholder="Province" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Ville</label>
                        <input type="date" required placeholder="Ville" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label>Date</label>
                        <input type="datetime" required placeholder="Province" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Heure de début</label>
                        <input type="time" required placeholder="Province" class="form-control">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <label>Heure de fin</label>
                        <input type="time" required placeholder="Ville" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="card col-12">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Image</h4>
                            {{-- <p class="sub-title">DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews. --}}
                            </p>
                            <div class="">
                                <form action="#" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Enregistrer
                        </button>
                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                            Effacer le formulaire
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $("input[name='amount']").TouchSpin({
            min: 0.1,
            max: 1000000000,
            stepinterval: 0.01,
            maxboostedstep: 10000000,
            prefix: '$',
            buttondown_class: 'btn btn-primary',
            buttonup_class: 'btn btn-primary'
        });
    </script>
@endsection