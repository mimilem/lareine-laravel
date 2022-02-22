@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header card">
            <h2>Programmer un forum</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- Forum -->
                <div class="col-lg-12">
                    <div class="card">
                       <div class="card-header">
                          <h5 class="card-header-text">Details du Forum</h5>
                       </div>
                       
                       <div class="card-block">
                          <p class="m-b-20">
                             Remplissez les details concernant le forum
                          </p>
                            @if ($errors->any())
                                <div class="col-12">
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                          <form method="POST" action="{{ route('add_forum') }}" enctype="multipart/form-data">
                            @csrf
                             <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <label for="exampleInputEmail" class="form-control-label">Titre Du Forum</label>
                                 <input type="text" name="title" required class="form-control" placeholder="Titre Du Forum">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <label for="exampleInputPassword" class="form-control-label">Theme</label>
                                 <input type="text" name="topic" required class="form-control" placeholder="Theme">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <label for="exampleInputEmail" class="form-control-label">Description</label>
                                 <input type="text" name="description" required class="form-control" placeholder="description">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <label for="exampleInputPassword" class="form-control-label">Pays</label>
                                 <input type="text" name="country" required class="form-control" placeholder="Pays">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <label for="exampleInputEmail" class="form-control-label">Province</label>
                                 <input type="text" name="province" required class="form-control" placeholder="Province">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <label for="exampleInputPassword" class="form-control-label">Ville</label>
                                 <input type="text" name="city" required class="form-control" placeholder="Ville">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <label for="exampleInputEmail" class="form-control-label">Lieu</label>
                                 <input type="text" name="place" required class="form-control" placeholder="Lieu">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <label for="exampleInputPassword" class="form-control-label">Date de Debut</label>
                                 <input type="date" name="start_date" required class="form-control" placeholder="Date de Debut">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <label for="exampleInputPassword" class="form-control-label">Date de Fin</label>
                                 <input type="date" name="end_date" required class="form-control" placeholder="Date de Fin">
                             </div>
                             <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="exampleInputPassword" class="form-control-label">Image</label>
                                <input type="file" name="picture" required class="form-control" placeholder="Date de Fin">
                             </div>
                             <div class="container-fluid">
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