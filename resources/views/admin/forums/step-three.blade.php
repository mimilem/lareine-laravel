@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header card">
            <h2>Programmer un forum</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                       <div class="card-header">
                          <h5 class="card-header-text">Billeterie</h5>
                       </div>
 
                       <div class="card-block">
                          <p class="m-b-20">
                             Configurez les differents billets pour le forum
                          </p>
 
                          <form>
                             <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <label for="exampleInputEmail" class="form-control-label">Nom Du Billet</label>
                                 <input type="text" name="name" class="form-control" placeholder="Nom Du Billet">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <label for="exampleInputPassword" class="form-control-label">Prix ($)</label>
                                 <input type="number" name="topic" class="form-control" placeholder="Prix">
                             </div>
                             <div>
                                 <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Enregistrer</button>
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