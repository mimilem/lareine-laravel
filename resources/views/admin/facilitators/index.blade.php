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
                             <label>Nom complet</label>
                             <input type="text" name="name" placeholder="Nom du facilitateur" class="form-control">
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <label>Adresse mail</label>
                             <input type="email" name="email" required placeholder="example@example.com" class="form-control">
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
                                <th>Nom</th>
                                <th>Adresse Mail</th>
                                <th>Date d'enregistrement</th>
                                <th>Editer/Effacer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($facilitators as $facilitator)
                            <tr>
                                <td>{{ $facilitator['name'] }}</th>
                                <td>{{ $facilitator['email'] }}</th>
                                <td>{{ date('d-m-Y', strtotime($facilitator['date'])) }}</th>
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