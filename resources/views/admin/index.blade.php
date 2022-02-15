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
                  <h2 class="dashboard-total-products"><span>{{ $total_subscribes }}</span></h2>
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
                        <a href="{{ route('all_courses') }}" class="btn btn-link waves-effect">Tout voir</a>
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection