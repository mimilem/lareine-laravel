@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
                <h4>Facilitateurs</h4>
                <div style="margin-top:12px ">
                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#default-Modal">Ajouter un facilitateur</button>
                </div>
            </div>
        </div>
        <div class="modal fade modal-flex" id="default-Modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                     <h4 class="modal-title">Ajouter un facilitateur</h4>
                  </div>
                  <form action="{{ route('add_facilitator') }}" method="POST" enctype="multipart/form-data">
                     @csrf                                     
                  <div class="modal-body">
                     <div class="form-group row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <label>Prenom</label>
                             <input type="text" name="first_name" placeholder="Prenom du facilitateur" class="form-control">
                         </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Nom</label>
                            <input type="text" name="last_name" placeholder="Nom du facilitateur" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Bio</label>
                            <input type="text" name="bio" placeholder="Bio" class="form-control">
                        </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-12">
                       <div class="custom-file">
                           <input type="file" name="picture" class="custom-file-input" id="validatedCustomFile" required>
                           <label class="custom-file-label" for="validatedCustomFile">Photo</label>
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
    <div class="container-fluid">
        <div class="card">
            <div class="card-block">
               <div class="row">
                  <div class="col-sm-12 table-responsive">
                     <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Adresse Mail</th>
                                <th>Date d'enregistrement</th>
                                <th>Editer/Effacer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($facilitators as $facilitator)
                            <tr>
                                <td><img src="{{ asset('storage/'.$facilitator['picture']) }}" width="40px" alt=""></th>
                                    <td>{{ $facilitator['first_name'].' '.$facilitator['last_name'] }}</th>
                                <td>{{ $facilitator['email'] }}</th>
                                <td>{{ date('d-m-Y', strtotime($facilitator['created_at'])) }}</th>
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
@endsection