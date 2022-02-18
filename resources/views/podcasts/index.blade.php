@extends('layouts.master')
@section('content')
<div style="position: relative">
	<div class="stunning-header with-photo stunning-header-bg-photo1">
		<div class="stunning-header-content">
			<h1 class="stunning-header-title">Podcasts</h1>
			<p class="breadcrumbs-text">
				Ecoutez les meilleurs podcasts
			</p>
		</div>
		<div class="overlay overlay-primary"></div>
	</div>
    <div class="container info-boxes pt100 pb100">
        <div class="row">
            <div class="container">
                <div class="row">
                    @foreach ($podcasts as $podcast)
                        <a href="{{ route('podcast_details', ['token' => $podcast['token']]) }}" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="case-item align-center mb60">
                                <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                                    <img loading="lazy" src="{{ asset('storage/'.$podcast['picture']) }}" alt="our case">
                                </div>
                                <h6 class="case-item__title"><strong>{{ $podcast['title'] }}</strong></h6>
                                <div class="case-item__cat">
                                    <div class="event-info">
                                        <p>{{ $podcast['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
	</div>
</div>
@endsection