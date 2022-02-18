@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row medium-padding120">
        <div class="col-lg-12">
            <div class="heading align-center">
                <!-- <h4 class="h1 heading-title">We Help Over 80 Companies</h4> -->
            </div>
            
            <div class="row" data-layout="fitRows">
                @foreach ($projects as $project)
                    <a href="{{ route('event_details', ['token' => $project['token']]) }}" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="case-item align-center mb60">
                            <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                                <img loading="lazy" src="{{ asset('storage/'.$project['picture']) }}" alt="our case">
                            </div>
                            <h6 class="case-item__title"><strong>{{ $project['title'] }}</strong></h6>
                            <div class="case-item__cat">
                                <div class="event-info">
                                    <p>{{ $project['date'] }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection