@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>code</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Formation</th>
                                <th>Date d'enregistrement</th>
                                <th>Etat</th>
                                <th>Confirmer / Annuler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribes as $subscribe)
                            <tr>
                                <form action="#" method="post">
                                    <input type="hidden" name="code" value="{{ $subscribe['code'] }}">
                                    <td>{{ $subscribe['code'] }}</th>
                                    <td>{{ $subscribe['first_name'].' '.$subscribe['last_name'] }}</th>
                                    <td>{{ $subscribe['email'] }}</th>
                                    <td>{{ $subscribe->course->title }}</th>
                                    <td>{{ date('d-m-Y', strtotime($subscribe['created_at'])) }}</th>
                                    <td>
                                        @if ($subscribe['code'] == 'paid')
                                            <span class="label label-success">Confirmé</span>
                                        @else
                                            <span class="label label-warning">Non Payé</span>
                                        @endif
                                    </th>
                                    <td>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            <i class="icofont icofont-save"></i>
                                        </button>
                                    </td>
                                </form>
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