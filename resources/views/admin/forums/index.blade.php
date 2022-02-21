@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
                <h4>Forums</h4><br><br>
                <div>
                    <a href="{{ route('add_forum') }}" class="btn btn-primary waves-effect">Programmer un forum</a>
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
                                            <th>Date</th>
                                            <th>Lieu</th>
                                            <th>Date de debut</th>
                                            <th>Date de fin</th>
                                            <th>Editer/Effacer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($courses as $course)
                                            <tr>
                                                <td>{{ $course['title'] }}</td>
                                                <td>{{ date('d-m-Y', strtotime($course['date'])) }}</td>
                                                <td>{{ $course['place'] }}</td>
                                                <td>{{ $course['start_time'] }}</td>
                                                <td>{{ $course['end_time'] }}</td>
                                                <td>$ {{ $course['amount'] }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">
                                                        <i class="icofont icofont-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light">
                                                        <i class="icofont icofont-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach --}}
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