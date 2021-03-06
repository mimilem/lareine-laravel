@extends('layouts.master')
@section('content')

    <div class="container-fluid">
		<div class="row bg-border-color medium-padding120">
			<div class="container">
				<div class="row">
					<div class="product-description-ver2">

						<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
							<div class="swiper-container" data-effect="fade">

								<!-- Additional required wrapper -->
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="product-description-ver3-thumb">
											<img loading="lazy" src="{{ asset('storage/'.$podcast->picture) }}" alt="description" class="">
										</div>
									</div>

								</div>
								<!-- If we need pagination -->
								<div class="swiper-pagination"></div>

							</div>
						</div>

						<div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
							<div class="product-description-ver2-content">
								<div class="heading">
									<h4 class="h1 heading-title">{{ $podcast->title }}</h4>
									<small><p><i>{{ date('d-m-Y', strtotime($podcast['created_at'])) }}</i></p></small>
								</div>
                                <p>{{ $podcast->description }}</p>
							</div>
						</div>
                        <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
                            <div class="player">
                                <audio controls src="{{ asset('storage/'.$podcast->file) }}"></audio>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="container">
        
    </div>

    <div class="container-fluid">
		<div class="row bg-border-color">
			<div class="container">
                <div class="row align-center">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="heading">
							<h5 class="mb30">
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    {{-- <div class="container">
        <div class="row medium-padding120">
    
            <div class="col-lg-12">
    
                <div class="heading align-center">
                    <h4 class="h4 heading-title">Nos Prochains Evenements</h4>
                </div>
                <div class="row">
                    @foreach ($other_events as $item)
                        <a href="{{ route('event_details', ['token' => $item->token]) }}" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="case-item align-center mb60">
                                <div class="case-item__thumb mouseover lightbox shadow animation-disabled">
                                    <img loading="lazy" src="{{ asset('storage/'.$item->picture) }}" alt="our case">
                                </div>
                                <h6 class="case-item__title"><strong>{{ $item->title }}</strong></h6>
                                <div class="case-item__cat">
                                    <div class="event-info">
                                        <p>{{ $item->place }}</p>
                                        <p>{{ $item->date }}</p>
                                    </div>
                                    <div class="price">
                                        $ {{ $item->amount }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
    
        </div>
    </div> --}}
@endsection