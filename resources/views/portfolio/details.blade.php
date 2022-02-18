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
											<img loading="lazy" src="{{ asset('storage/'.$project->picture) }}" alt="description" class="">
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
							<div class="product-description-ver2-content">
								<div class="heading">
									<h4 class="h1 heading-title">{{ $project->title }}</h4>
								</div>
                                <p>
                                    {{ $project->description }}
                                </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection