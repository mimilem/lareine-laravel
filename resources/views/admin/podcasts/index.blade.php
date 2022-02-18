@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
                <h4>Podcasts</h4><br><br>
                <div>
                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#default-Modal">Ajouter un podcast</button>
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
                                 <h4 class="modal-title">Ajouter un Podcast</h4>
                              </div>
                              <form action="{{ route('add_podcast') }}" method="POST" enctype="multipart/form-data">
                                 @csrf                                     
                              <div class="modal-body container-fluid">
                                 <div class="form-group row">
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                         <label>Titre du Podcast</label>
                                         <input type="text" name="title" required placeholder="Titre du Podcast" class="form-control">
                                     </div>
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label>Description</label>
                                        <input type="text" name="description" required placeholder="Description" class="form-control">
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-12" style="border: 0.1px solid #cfcfcf" >
                                        <div class="custom-file" >
                                            <input type="file" name="picture" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" for="validatedCustomFile">Photo de Couverture</label>
                                        </div>
                                     </div>
                                 </div>
                                 <div class="form-group row" style="border: 0.1px solid #cfcfcf">
                                    <div class="col-12" >
                                       <div class="custom-file" >
                                           {{-- <input type="file" name="file"  accept=".mp3,audio/*" required> --}}
                                           <label class="custom-file-label" for="validatedCustomFile">Fichier du podcast</label>
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
                                            <th>Date D'ajout</th>
                                            <th>Description</th>
                                            <th>Editer/Effacer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($podcasts as $podcast)
                                            <tr>
                                                <td>{{ $podcast['title'] }}</td>
                                                <td>{{ date('d-m-Y', strtotime($podcast['created_at'])) }}</td>
                                                <td>{{ $podcast['description'] }}</td>
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