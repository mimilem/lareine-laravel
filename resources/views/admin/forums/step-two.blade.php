@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="main-header card">
            <h2>Programmer un forum</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
             <!-- Sessions -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Sessions du Forum</h5>
                        </div>

                        <div class="card-block">
                            <p class="m-b-20">
                                Rajoutez les differentes sessions du forum
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
                            <form method="POST" action="{{ route('post_forum_step_two') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="session-form-container">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="exampleInputEmail" class="form-control-label">Theme de la session</label>
                                        <input type="text" name="topic" class="form-control" placeholder="Theme de la session">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="exampleInputEmail" class="form-control-label">Jour</label>
                                        <select class="form-control" name="day" id="">
                                            @for ($i = 1; $i < $days+1; $i++)
                                                <option value="{{ $i }}"> Jour{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="exampleInputPassword" class="form-control-label">Heure de Debut</label>
                                        <input type="time" name="start_time" class="form-control" placeholder="Heure de Debut">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <label for="exampleInputPassword" class="form-control-label">Heure de Fin</label>
                                        <input type="time" name="end_time" class="form-control" placeholder="Heure de Fin">
                                    </div>
                                    <div class="form-group col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                        <label for="exampleInputPassword" class="form-control-label">Orateur</label>
                                        <select class="form-control" id="speaker">
                                            @foreach ($speakers as $speaker)
                                                <option value="{{ $speaker['id'] }}">{{ $speaker['first_name'].' '.$speaker['last_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                        <label for=""></label>
                                        <label for=""></label>
                                        <button type="button" id="add_speaker" class="btn btn-primary waves-effect waves-light m-r-30">Ajouter l'animateur</button>
                                    </div>
                                    <div class="speakers" id="speakers-section">
                                        
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" formaction="{{ route('add_forum_session') }}" class="btn btn-primary waves-effect waves-light m-r-30">Ajouter une session</button>
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

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#add_speaker').click(function(){
                $('#speakers-section').append(
                    '<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">' + 
                        '<label for="exampleInputEmail" class="form-control-label">'
                        + $('#speaker').find(":selected").text() + 
                        '</label>' +
                        '<input type="hidden" name="speakers[]" value="' + 
                        $('#speaker').find(":selected").val() +
                        '">' + 
                        '<button type="button" id="delete_speaker" class="btn btn-danger waves-effect waves-light m-r-30 delete_speaker"><i class="icofont icofont-trash"></i></button>' + 
                    '</div>'
                );
            });

            $('#speakers-section').on('click', '.delete_speaker', function(){
                $(this).parent().remove();
            });
        })
    </script>
@endsection