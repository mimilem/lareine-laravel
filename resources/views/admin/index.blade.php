@extends('admin.layouts.master')

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