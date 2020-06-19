@extends('layouts.app')

@section('content')
	{{-- Block slider --}}
	@if (count($slide_shows) > 0)
			
		<section id="block-front-slider">
			<div id="frontSlideShows" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					@foreach ($slide_shows as $key => $slide_show)
						<div class="carousel-item {{ (($key==0)? 'active' : '' ) }}">

							<img src="/images/slide_shows/{{ $slide_show->image }}" class="img-fluid d-block w-100" alt="{{ $slide_show->seo_description . $slide_show->seo_keywords }}">

							<div class="carousel-caption d-none d-md-block">
								<h2 class="animated slideInDown" title="{{ $slide_show->$name }}">{{ $slide_show->$name }}</h2>
								<p class="animated slideInUp">{{ $slide_show->$short_desc }}</p>
							</div>

						</div>

					@endforeach
				</div>

				<ol class="carousel-indicators">

					<li data-target="#frontSlideShows" data-slide-to="0" class="active"></li>

					@for ($i = 1; $i < $slide_shows->count(); $i++)
						<li data-target="#frontSlideShows" data-slide-to="{{ $i }}"></li>
					@endfor

				</ol>

				<a class="carousel-control-prev" href="#frontSlideShows" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#frontSlideShows" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>

	@endif

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<section id="block-front-welcome" class="text-center mt-5 mb-3">
					<h2 class="mb-4" title="{{ $web_config->$welcome_title }}">{{ $web_config->$welcome_title }}</h2>
					<div class="row justify-content-md-center">
						<div class="col-sm-10">
							<p>{{ $web_config->$welcome_message }}</p>
						</div>
					</div>
				</section>
			</div>

			<div class="col-sm-8">

				{{-- Block Content --}}
				
				@foreach ($project_categories as $project_category)
					@if (count($project_category->projects) > 0)
						<section class="block-content" data-color="{{ $project_category->color }}">
							<div class="title-block">
								<h4 title="{{ $project_category->$name }}" class="title">
									<div>
										<div class="text">
											<span>
												{{ $project_category->$name }}
											</span>
										</div>
									</div>
									
								</h4>
								<a href="{{ route('projects.project_category', $project_category->id) }}" class="show-all">{{ __('frontend.buttons.show_all') }}</a>
							</div>
							<div class="content">
								<div class="row">
									<div class="col-lg-5">
										<div class="big-article">
											<a href="{{ route('projects.detail', $project_category->projects[0]->id) }}">
												<div class="img" style="background: url('/images/projects/{{ 'thumb_'. $project_category->projects[0]->thumbnail }}') center center; background-size: cover;"></div>
												<footer>
													<h4 title="{{ $project_category->projects[0]->$name }}">{{ $project_category->projects[0]->$name }}</h4>
												</footer>
											</a>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="row">
											
											@foreach ($project_category->projects as $key => $project)
												@if ($key > 0 && $key < 7)
													<div class="col-md-4 col-sm-6">
														<div class="small-article mb-2">
															<a href="{{ route('projects.detail', $project->id) }}">
															<div class="img" style="background: url('/images/projects/{{ 'thumb_'. $project->thumbnail }}') center center; background-size: cover;"></div>
																<footer>
																	<h6 title="{{ $project->$name }}">{{ $project->$name }}</h6>
																</footer>
															</a>
														</div>
													</div>
												@endif
											@endforeach
											
										</div>
									</div>
								</div>
							</div>

						</section>
					@endif
				@endforeach


				{{-- Block Content --}}
				@foreach ($activity_categories as $activity_category)
					@if (count($activity_category->activities) > 0)
						<section id="block-front-latest-news" class="block-content" data-color="{{ $activity_category->color }}">
							<div class="title-block">
								<h4 title="{{ $activity_category->$name }}" class="title">
									<div>
										<div class="text">
											<span>
												{{ $activity_category->$name }}
											</span>
										</div>
									</div>
									
								</h4>
								<a href="{{ route('activities.activity_category', $activity_category->id) }}" class="show-all">{{ __('frontend.buttons.show_all') }}</a>
							</div>
							<div class="content">
								<div class="row">
									<div class="col-lg-5">
										<div class="big-article">
											<a href="{{ route('activities.detail', $activity_category->activities[0]->id) }}">
												<div class="img" style="background: url('/images/activities/{{ 'thumb_'. $activity_category->activities[0]->thumbnail }}') center center; background-size: cover;"></div>
												<footer>
													<h4 title="{{ $activity_category->activities[0]->$name }}">{{ $activity_category->activities[0]->$name }}</h4>
												</footer>
											</a>
										</div>
									</div>
									<div class="col-lg-7">
										<div class="row">
											
											@foreach ($activity_category->activities as $key => $activity)
												@if ($key > 0 && $key < 7)
													<div class="col-sm-4">
														<div class="small-article mb-2">
															<a href="{{ route('activities.detail', $activity->id) }}">
															<div class="img" style="background: url('/images/activities/{{ 'thumb_'. $activity->thumbnail }}') center center; background-size: cover;"></div>
																<footer>
																	<h6 title="{{ $activity->$name }}">{{ $activity->$name }}</h6>
																</footer>
															</a>
														</div>
													</div>
												@endif
											@endforeach
											
										</div>
									</div>
								</div>
							</div>

						</section>
					@endif
				@endforeach

			</div>
			<div class="col-sm-4">
				@include('include.side_bar_right')
			</div>
		</div>
	</div>
@endsection

@section('js')
	<script type="text/javascript">

	</script>
@endsection
