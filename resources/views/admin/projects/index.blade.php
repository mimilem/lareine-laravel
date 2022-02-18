@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
                <h4>Projets</h4><br><br>
                <div>
                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#default-Modal">Ajouter un projet</button>
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
                                 <h4 class="modal-title">Ajouter un projet</h4>
                              </div>
                              <form action="{{ route('add_project') }}" method="POST" enctype="multipart/form-data">
                                 @csrf                                     
                              <div class="modal-body container-fluid">
                                 <div class="form-group row">
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label>Titre du Projet</label>
                                         <input type="text" name="title" required placeholder="Titre du Projet" class="form-control">
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label>Date</label>
                                        <input type="date" name="date" required class="form-control">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" placeholder="Description" name="description" id="" cols="30" rows="10"></textarea>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-12" style="border: 0.1px solid #cfcfcf" >
                                        <div class="custom-file" >
                                            <input type="file" name="picture" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Image D"illustration</label>
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
                                            <th>Date De realisation</th>
                                            <th>Description</th>
                                            <th>Editer/Effacer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td>{{ $project['title'] }}</td>
                                                <td>{{ date('d-m-Y', strtotime($project['date'])) }}</td>
                                                <td>{{ Str::substr($project['description'], 0, 50) }} 
                                                    @if (Str::length($project['description']) > 50)
                                                        ...
                                                    @endif
                                                </td>
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