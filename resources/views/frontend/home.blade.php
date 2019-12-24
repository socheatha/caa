@extends('layouts.app')

@section('content')
	{{-- Block slider --}}
	<section id="block-front-slider">
		<div id="frontSlideShows" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				@foreach ($slide_shows as $key => $slide_show)
					<div class="carousel-item {{ (($key==0)? 'active' : '' ) }}">

						<img src="/images/slide_shows/{{ $slide_show->image }}" class="img-fluid d-block w-100" alt="{{ $slide_show->seo_description . $slide_show->seo_keywords }}">

						<div class="carousel-caption d-none d-md-block">
							<h2 class="animated slideInDown">{{ $slide_show->$name }}</h2>
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

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<section id="block-front-welcome" class="text-center mt-5 mb-3">
					<h2 class="mb-4">Welcome to C.A.A</h2>
					<div class="row justify-content-md-center">
						<div class="col-sm-10">
							<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum nulla ipsum aliquid eligendi quia rem consequatur doloribus quas, quod voluptatem accusantium quibusdam numquam laudantium vero laborum, vitae, obcaecati quis deleniti.</p>
						</div>
					</div>
				</section>
			</div>

			<div class="col-sm-8">

				{{-- Block Content --}}
				@foreach ($projects as $project)
					<section id="block-front-latest-news" class="block-content" data-color="darkblue">
						<div class="title-block">
							<h4 class="title">
								<span class="text">
									Latest News
									<span class="corner"></span>
								</span>
								
							</h4>
							<a href="{{ route('project_category') }}" class="show-all">Show all</a>
						</div>
						<div class="content">
							<div class="row">
								<div class="col-lg-5">
									<div class="big-article">
										<a href="#">
											<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
											<footer>
												<h4>lorem title testing for website lorem title testing for website</h4>
											</footer>
										</a>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="small-article mb-2">
												<a href="#">
													<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
													<footer>
														<h6>lorem title testing for website lorem title testing for website</h6>
													</footer>
												</a>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="small-article mb-2">
												<a href="#">
													<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
													<footer>
														<h6>lorem title testing for website lorem title testing for website</h6>
													</footer>
												</a>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="small-article mb-2">
												<a href="#">
													<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
													<footer>
														<h6>lorem title testing for website lorem title testing for website</h6>
													</footer>
												</a>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="small-article mt-1">
												<a href="#">
													<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
													<footer>
														<h6>lorem title testing for website</h6>
													</footer>
												</a>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="small-article mt-1">
												<a href="#">
													<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
													<footer>
														<h6>lorem title testing for website lorem title testing for website</h6>
													</footer>
												</a>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="small-article mt-1">
												<a href="#">
													<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
													<footer>
														<h6>lorem title testing for website</h6>
													</footer>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</section>
				@endforeach


				{{-- Block Content --}}
				@foreach ($activities as $activity)
					<section id="block-front-latest-news" class="block-content" data-color="darkblue">
						<div class="title-block">
							<h4 class="title">
								<span class="text">
									Latest News
									<span class="corner"></span>
								</span>
								
							</h4>
							<a href="{{ route('activity_category') }}" class="show-all">Show all</a>
						</div>
						<div class="content">
							<div class="row">
								<div class="col-lg-5">
									<div class="big-article">
										<a href="#">
											<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
											<footer>
												<h4>lorem title testing for website lorem title testing for website</h4>
											</footer>
										</a>
									</div>
								</div>
								<div class="col-lg-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="small-article mb-2">
												<a href="#">
													<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
													<footer>
														<h6>lorem title testing for website lorem title testing for website</h6>
													</footer>
												</a>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="small-article mb-2">
												<a href="#">
													<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
													<footer>
														<h6>lorem title testing for website lorem title testing for website</h6>
													</footer>
												</a>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="small-article mb-2">
												<a href="#">
													<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
													<footer>
														<h6>lorem title testing for website lorem title testing for website</h6>
													</footer>
												</a>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="small-article mt-1">
												<a href="#">
													<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
													<footer>
														<h6>lorem title testing for website</h6>
													</footer>
												</a>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="small-article mt-1">
												<a href="#">
													<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
													<footer>
														<h6>lorem title testing for website lorem title testing for website</h6>
													</footer>
												</a>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="small-article mt-1">
												<a href="#">
													<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
													<footer>
														<h6>lorem title testing for website</h6>
													</footer>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</section>
				@endforeach


				{{-- Block School --}}
				{{-- <section id="block-front-school" class="block-content" data-color="darkblue">
					<div class="title-block">
						<h4 class="title">
							<span class="text">
								Schools
								<span class="corner"></span>
							</span>
							
						</h4>
							<a href="#" class="show-all">Show all</a>
						
					</div>
					<div class="content">
						<div class="row">
							<div class="col-lg-5">
								<div class="big-article">
									<a href="#">
										<div class="img" style="background: url('/images/contents/2.jpg') center center; background-size: cover;"></div>
										<footer>
											<h4>lorem title testing for website lorem title testing for website</h4>
										</footer>
									</a>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="row">
									<div class="col-sm-4">
										<div class="small-article mb-2">
											<a href="#">
												<div class="img" style="background: url('/images/contents/2.jpg') center center; background-size: cover;"></div>
												<footer>
													<h6>lorem title testing for website lorem title testing for website</h6>
												</footer>
											</a>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="small-article mb-2">
											<a href="#">
												<div class="img" style="background: url('/images/contents/2.jpg') center center; background-size: cover;"></div>
												<footer>
													<h6>lorem title testing for website lorem title testing for website</h6>
												</footer>
											</a>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="small-article mb-2">
											<a href="#">
												<div class="img" style="background: url('/images/contents/2.jpg') center center; background-size: cover;"></div>
												<footer>
													<h6>lorem title testing for website lorem title testing for website</h6>
												</footer>
											</a>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="small-article mt-1">
											<a href="#">
												<div class="img" style="background: url('/images/contents/2.jpg') center center; background-size: cover;"></div>
												<footer>
													<h6>lorem title testing for website</h6>
												</footer>
											</a>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="small-article mt-1">
											<a href="#">
												<div class="img" style="background: url('/images/contents/2.jpg') center center; background-size: cover;"></div>
												<footer>
													<h6>lorem title testing for website lorem title testing for website</h6>
												</footer>
											</a>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="small-article mt-1">
											<a href="#">
												<div class="img" style="background: url('/images/contents/2.jpg') center center; background-size: cover;"></div>
												<footer>
													<h6>lorem title testing for website</h6>
												</footer>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</section> --}}

				{{-- Block Project --}}
				{{-- <section id="block-front-projects" class="block-content" data-color="darkblue">
					<div class="title-block">
						<h4 class="title">
							<span class="text">
								Projects
								<span class="corner"></span>
							</span>
							
						</h4>
							<a href="#" class="show-all">Show all</a>
						
					</div>
					<div class="content">
						<div class="row">
							<div class="col-lg-5">
								<div class="big-article">
									<a href="#">
										<div class="img" style="background: url('/images/contents/3.jpg') center center; background-size: cover;"></div>
										<footer>
											<h4>lorem title testing for website lorem title testing for website</h4>
										</footer>
									</a>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="row">
									<div class="col-sm-4">
										<div class="small-article mb-2">
											<a href="#">
												<div class="img" style="background: url('/images/contents/3.jpg') center center; background-size: cover;"></div>
												<footer>
													<h6>lorem title testing for website lorem title testing for website</h6>
												</footer>
											</a>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="small-article mb-2">
											<a href="#">
												<div class="img" style="background: url('/images/contents/3.jpg') center center; background-size: cover;"></div>
												<footer>
													<h6>lorem title testing for website lorem title testing for website</h6>
												</footer>
											</a>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="small-article mb-2">
											<a href="#">
												<div class="img" style="background: url('/images/contents/3.jpg') center center; background-size: cover;"></div>
												<footer>
													<h6>lorem title testing for website lorem title testing for website</h6>
												</footer>
											</a>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="small-article mt-1">
											<a href="#">
												<div class="img" style="background: url('/images/contents/3.jpg') center center; background-size: cover;"></div>
												<footer>
													<h6>lorem title testing for website</h6>
												</footer>
											</a>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="small-article mt-1">
											<a href="#">
												<div class="img" style="background: url('/images/contents/3.jpg') center center; background-size: cover;"></div>
												<footer>
													<h6>lorem title testing for website lorem title testing for website</h6>
												</footer>
											</a>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="small-article mt-1">
											<a href="#">
												<div class="img" style="background: url('/images/contents/3.jpg') center center; background-size: cover;"></div>
												<footer>
													<h6>lorem title testing for website</h6>
												</footer>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> --}}

			</div>
			<div class="col-sm-4">
				<section class="block-right-side">

					{{-- Facebook Block --}}
					<section id="block-fb-page">
						<div class="fb-page" data-href="https://www.facebook.com/bss.solution.kh/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bss.solution.kh/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bss.solution.kh/">BSS Solution</a></blockquote></div>
					</section>

					<section id="block-side-download" class="block-content">
						<div class="title-block">
							<h5 class="title">
								<span class="text">
									Download
									<span class="corner"></span>
								</span>
								
							</h5>
								<a href="#" class="show-all">Show all</a>
							
						</div>
						<div class="content">
							<ul class="doc-list list-unstyled">
								<li>
									<a href="#"><i class="fas fa-file-alt"></i>&nbsp; Document project 1 title for download testing side download list</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-file-alt"></i>&nbsp; Document project 2 title for download testing side download list</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-file-alt"></i>&nbsp; Document project 3 title for download testing side download list</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-file-alt"></i>&nbsp; Document project 4 title for download testing side download list</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-file-alt"></i>&nbsp; Document project 5 title for download testing side download list</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-file-alt"></i>&nbsp; Document project 6 title for download testing side download list</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-file-alt"></i>&nbsp; Document project 7 title for download testing side download list</a>
								</li>
								<li>
									<a href="#"><i class="fas fa-file-alt"></i>&nbsp; Document project 8 title for download testing side download list</a>
								</li>
							</ul>
						</div>
	
					</section>

				</section>
			</div>
		</div>
	</div>
@endsection

@section('js')
	<script type="text/javascript">

	</script>
@endsection
