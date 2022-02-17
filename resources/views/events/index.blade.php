@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row medium-padding120">

        <div class="col-lg-12">

            <div class="heading align-center">
                <h4 class="h1 heading-title">Nos Evenements</h4>
            </div>

            <div class="row">
                @foreach ($events as $event)
                    <a href="{{ route('event_details', ['id' => 1])}}" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="case-item align-center mb60">
                            <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                                <img loading="lazy" src="{{ asset('storage/'.$event['picture']) }}" alt="our case">
                            </div>
                            <h6 class="case-item__title"><strong>{{ $event['title'] }}</strong></h6>
                            <div class="case-item__cat">
                                <div class="event-info">
                                    <p>{{ $event['place'] }}</p>
                                    <p>{{ $event['date'] }}</p>
                                </div>
                                <div class="price">
                                    $ {{ $event['amount'] }}
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