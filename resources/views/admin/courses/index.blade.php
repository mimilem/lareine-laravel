@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
                <h4>Formations</h4><br><br>
                <div>
                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#default-Modal">Ajouter une formation</button>
                    @if ($errors->any())
                        <div class="col-12">
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                    <div class="modal fade modal-flex" id="default-Modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                         </button>
                                 <h4 class="modal-title">Ajouter une formation</h4>
                              </div>
                              <form action="{{ route('add_course') }}" method="POST" enctype="multipart/form-data">
                                 @csrf                                     
                              <div class="modal-body">
                                 <div class="form-group row">
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label>Titre De la Formation</label>
                                         <input type="text" name="title" placeholder="Titre de la formation" class="form-control">
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label>Sous-titre de la formation</label>
                                         <input type="text" name="subtitle" required placeholder="Sous-titre de la formation" class="form-control">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label>Description</label>
                                         <input type="text" name="description" required placeholder="Description" class="form-control">
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label>Audience ciblée</label>
                                         <input type="text" name="target_audience" required placeholder="Audience ciblée" class="form-control">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label for="">Prérequis</label>
                                         <input type="text" name="prerequisites" required placeholder="Prérequis" class="form-control">
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label for="">Lieu</label>
                                         <input type="text" name="place" required placeholder="Lieu" class="form-control">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label>Prix de la formation</label>
                                         <input type="number" name="amount" min="0.1" step="0.1" required placeholder="Prix" class="form-control">
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label>Pays</label>
                                         <input type="text" name="country" required placeholder="Pays" class="form-control">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label>Province</label>
                                         <input type="text" name="province" required placeholder="Province" class="form-control">
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label>Ville</label>
                                         <input type="text" name="city" required placeholder="Ville" class="form-control">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                         <label>Date</label>
                                         <input type="date" name="date" required class="form-control">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label>Heure de début</label>
                                         <input type="time" name="start_time" required placeholder="Province" class="form-control">
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label>Heure de fin</label>
                                         <input type="time" name="end_time" required placeholder="Ville" class="form-control">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="card col-12">
                                        <div class="custom-file">
                                            <input type="file" name="picture" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Choisissez une image</label>
                                        </div>
                                     </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Annuler</button>
                                 <button type="submit" class="btn btn-primary waves-effect waves-light ">Enregistrer</button>
                              </div>
                             </form>
                           </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                           <div class="row">
                              <div class="col-sm-12 table-responsive">
                                 <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Date</th>
                                            <th>Lieu</th>
                                            <th>Heure de debut</th>
                                            <th>Heure de fin</th>
                                            <th>Prix</th>
                                            <th>Editer/Effacer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                            <tr>
                                                <td>{{ $course['title'] }}</td>
                                                <td>{{ date('d-m-Y', strtotime($course['date'])) }}</td>
                                                <td>{{ $course['place'] }}</td>
                                                <td>{{ $course['start_time'] }}</td>
                                                <td>{{ $course['end_time'] }}</td>
                                                <td>$ {{ $course['amount'] }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">
                                                        <i class="icofont icofont-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light">
                                                        <i class="icofont icofont-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection