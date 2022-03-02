@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
                <h4>Forums</h4><br><br>
                <div>
                    <a href="{{ route('add_forum') }}" class="btn btn-primary waves-effect">Details du forum</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            <p class="m-b-20">
                               Remplissez les details concernant le forum si vous souhaitez le modifier
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
                            <form method="POST" action="#" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="token" value="{{ $forum->token }}">
                               <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                   <label for="exampleInputEmail" class="form-control-label">Titre Du Forum</label>
                                   <input value="{{ $forum->title }}" type="text" name="title" required class="form-control" placeholder="Titre Du Forum">
                               </div>
                               <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                   <label for="exampleInputPassword" class="form-control-label">Theme</label>
                                   <input value="{{ $forum->topic }}" type="text" name="topic" required class="form-control" placeholder="Theme">
                               </div>
                               <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                   <label for="exampleInputEmail" class="form-control-label">Description</label>
                                   <input value="{{ $forum->description }}" type="text" name="description" required class="form-control" placeholder="description">
                               </div>
                               <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                   <label for="exampleInputPassword" class="form-control-label">Pays</label>
                                   <input value="{{ $forum->country }}" type="text" name="country" required class="form-control" placeholder="Pays">
                               </div>
                               <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                   <label for="exampleInputEmail" class="form-control-label">Province</label>
                                   <input value="{{ $forum->province }}" type="text" name="province" required class="form-control" placeholder="Province">
                               </div>
                               <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                   <label for="exampleInputPassword" class="form-control-label">Ville</label>
                                   <input value="{{ $forum->city }}" type="text" name="city" required class="form-control" placeholder="Ville">
                               </div>
                               <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                   <label for="exampleInputEmail" class="form-control-label">Lieu</label>
                                   <input value="{{ $forum->place }}" type="text" name="place" required class="form-control" placeholder="Lieu">
                               </div>
                               <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                   <label for="exampleInputPassword" class="form-control-label">Date de Debut</label>
                                   <input value="{{ $forum->start_date }}" type="date" name="start_date" required class="form-control" placeholder="Date de Debut">
                               </div>
                               <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                   <label for="exampleInputPassword" class="form-control-label">Date de Fin</label>
                                   <input value="{{ $forum->end_date }}" type="date" name="end_date" required class="form-control" placeholder="Date de Fin">
                               </div>
                               <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img src="https://lasouveraine.marketing/public/storage/{{ $forum->picture }}" alt="" width="150px" srcset="">
                                  <label for="exampleInputPassword" class="form-control-label">Image</label>
                                  <input type="file" name="picture" required class="form-control" placeholder="Date de Fin">
                               </div>
                               <div class="container-fluid">
                                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Modifier</button>
                               </div>
                            </form>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            <h4>Sessions</h4>
                            <p>La liste des sessions du forum</p>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table table-hover">
                                          <thead class="thead-light">
                                            <tr>
                                                <th class="head" scope="col">Session</th>
                                                <th class="head" scope="col">Date</th>
                                                <th class="head" scope="col">Heure</th>
                                                <th class="head" scope="col">Animateur (s)</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                              @foreach ($sessions as $session)
                                                <tr>
                                                    <td>{{ $session['topic'] }}</td>				      
                                                    <td class="name" scope="row">{{ date('d-m-Y', strtotime($forum->start_date. ' + '.($session['day']-1).' days'))}}</th>
                                                    <td>{{ $session['start_time'] }}</td>					      
                                                    <td>
                                                        @foreach ($session->session_speakers as $session_speaker)
                                                            {{ $session_speaker->speaker->first_name.' '.$session_speaker->speaker->last_name }} <br>
                                                        @endforeach
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            <h4>Billets</h4>
                            <p>Details par rapport aux tickets</p>
                        </div>
                        <div class="card-block">
                            <div class="col-sm-12 table-responsive">
                                <table class="table table-hover">
                                      <thead class="thead-light">
                                        <tr>
                                            <th class="head" scope="col">Billet</th>
                                            <th class="head" scope="col">Prix</th>
                                            <th class="head" scope="col">Modifier / Supprimer</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($tickets as $ticket)
                                              <tr scope="row">
                                                  <td>{{ $ticket->name }}</td>
                                                  <td>{{ $ticket->amount }}</td>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-block">
                            <h4>Sponsors</h4>
                            <p>Details par rapport aux sponsors</p>
                        </div>
                        <div class="card-block">
                            <div class="col-sm-12 table-responsive">
                                <table class="table table-hover">
                                      <thead class="thead-light">
                                        <tr>
                                            <th class="head" scope="col">Sponsor</th>
                                            <th class="head" scope="col">Logo</th>
                                            <th class="head" scope="col">Modifier / Supprimer</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($sponsors as $sponsor)
                                              <tr scope="row">
                                                  <td>{{ $sponsor->name }}</td>
                                                  <td>..</td>
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
@endsection