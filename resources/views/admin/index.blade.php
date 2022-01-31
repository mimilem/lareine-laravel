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
        </div>
    </div>
@endsection