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
                                            <th>Voir/Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($forums as $forum)
                                            <tr>
                                                <td>{{ $forum['title'] }}</td>
                                                <td>{{ date('d-m-Y', strtotime($forum['created_at'])) }}</td>
                                                <td>{{ $forum['place'] }}</td>
                                                <td>{{ $forum['start_date'] }}</td>
                                                <td>{{ $forum['end_date'] }}</td>
                                                <td>
                                                    <a href="{{ route('forum_details', ['token' => $forum['token']]) }}" class="btn btn-primary waves-effect waves-light">
                                                        <i class="icofont icofont-eye"></i>
                                                    </a>
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