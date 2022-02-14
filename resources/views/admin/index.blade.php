@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
               <h4>Dashboard</h4>
            </div>
         </div> 
         <div class="row dashboard-header">
            <div class="col-lg-4 col-md-4">
               <div class="card dashboard-product">
                  <span>Total</span>
                  <h2 class="dashboard-total-products">{{ $total_courses }}</h2>
                  <span class="label label-warning">Formations</span>enregistrées
                  <div class="side-box">
                     <i class="ti-signal text-warning-color"></i>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4">
               <div class="card dashboard-product">
                  <span>Total</span>
                  <h2 class="dashboard-total-products">{{ $total_facilitators }}</h2>
                  <span class="label label-primary">Facilitateurs</span>actifs
                  <div class="side-box ">
                     <i class="ti-gift text-primary-color"></i>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4">
               <div class="card dashboard-product">
                  <span>Réservations</span>
                  <h2 class="dashboard-total-products"><span>30</span></h2>
                  <span class="label label-success">Réservations</span>Effectuées
                  <div class="side-box">
                     <i class="ti-direction-alt text-success-color"></i>
                  </div>
               </div>
            </div>
         </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                       <h5 class="card-header-text">Formations</h5>
                       <p>Liste des dernieres formations</p>
                    </div>
                    <div class="card-block">
                       <div class="row">
                          <div class="col-sm-12 table-responsive">
                             <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Date</th>
                                        <th>Lieu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $course['title'] }}</td>
                                            <td>{{ date('d-m-Y', strtotime($course['date'])) }}</td>
                                            <td>{{ $course['place'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                             </table>
                          </div>
                       </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-link waves-effect">Tout voir</button>
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Aperçu des statistiques</h4>
                        <p class="sub-title d-inline-block text-truncate w-100">Polar area charts are similar to pie charts, but each segment has the same angle - the radius of the segment differs depending on the value.</p>

                        <ul class="list-inline widget-chart mt-4 mb-3 text-center">
                            <li class="list-inline-item">
                                <h5>8</h5>
                                <p class="text-muted">Formations enregistrées</p>
                            </li>
                            <li class="list-inline-item">
                                <h5>3</h5>
                                <p class="text-muted">Souscriptons réalisées</p>
                            </li>
                            <li class="list-inline-item">
                                <h5>5</h5>
                                <p class="text-muted">Falicitateurs</p>
                            </li>
                        </ul>

                        <canvas id="polarArea" height="300"> </canvas>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Formations</h4>
                        <p class="sub-title">
                        </p>

                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Date</th>
                                        <th>Lieu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-link waves-effect">Tout voir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection