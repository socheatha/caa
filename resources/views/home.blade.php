@extends('layouts.app')

@section('content')

	<div class="container">
		{{-- Block slider --}}
		<section id="block-front-slider">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="/images/sliders/1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="/images/sliders/2.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="/images/sliders/3.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>


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
				<section id="block-front-latest-news" class="block-content">
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
							<div class="col-sm-5">
								<div class="big-article">
									<a href="#">
										<div class="img" style="background: url('/images/contents/1.jpg') center center; background-size: cover;"></div>
										<footer>
											<h4>lorem title testing for website lorem title testing for website</h4>
										</footer>
									</a>
								</div>
							</div>
							<div class="col-sm-7">
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
			</div>
			<div class="col-sm-4">
				<section class="block-right-side">

					<section class="block-content">
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
							<div class="big-article">
								<a href="#">
									<div class="img" style="background: url('/images/contents/2.jpg') center center; background-size: cover;"></div>
									<footer>
										<h4>lorem title testing for website lorem title testing for website</h4>
									</footer>
								</a>
							</div>
						</div>
	
					</section>

				</section>
			</div>
		</div>

		<footer id="top-footer">
			<h3>Our Partner</h3>
			<div class="customer-logos">
				<div class="slide">
					<a href="#">
						<img src="https://www.solodev.com/assets/carousel/image1.png">
					</a>
				</div>
				<div class="slide">
					<a href="#">
						<img src="https://www.solodev.com/assets/carousel/image2.png">
					</a>
				</div>
				<div class="slide">
					<a href="#">
						<img src="https://www.solodev.com/assets/carousel/image3.png">
					</a>
				</div>
				<div class="slide">
					<a href="#">
						<img src="https://www.solodev.com/assets/carousel/image4.png">
					</a>
				</div>
				<div class="slide">
					<a href="#">
						<img src="https://www.solodev.com/assets/carousel/image5.png">
					</a>
				</div>
				<div class="slide">
					<a href="#">
						<img src="https://www.solodev.com/assets/carousel/image6.png">
					</a>
				</div>
				<div class="slide">
					<a href="#">
						<img src="https://www.solodev.com/assets/carousel/image7.png">
					</a>
				</div>
				<div class="slide">
					<a href="#">
						<img src="https://www.solodev.com/assets/carousel/image8.png">
					</a>
				</div>
			</div>
		</footer>
		<footer id="bottom-footer">
			<div class="row">
				<div class="col-sm-6">
					<div class="email"><i class="fa fa-envelope"></i> &nbsp; info@thecmdf.org</div>
					<div class="phone"><i class="fas fa-phone"></i> &nbsp; (855) 23 880 616. Fax: (855-23) 880 920.</div>
					<div class="address"><i class="fa fa-home"></i> &nbsp; #116D, Russian Federation Blvd, Phnom Penh, Cambodia</div>
				</div>
				<div class="col-sm-6 text-right">
					<ul class="list-inline footer-menu mb-0">
						<li class="list-inline-item">
							<a href="#">About Us</a>
						</li>
						<li class="list-inline-item">
							<a href="#">Projects</a>
						</li>
						<li class="list-inline-item">
							<a href="#">Activities</a>
						</li>
						<li class="list-inline-item">
							<a href="#">Education</a>
						</li>
						<li class="list-inline-item">
							<a href="#">Donate</a>
						</li>
					</ul>
					<div class="footer-copyright mb-0">Copyright &copy;2019 <strong>C.A.A</strong>. All right reserved.</div>
					<div class="dev-by mb-0">Website Develope by <a href="#">BSS Solution</a></div>
				</div>
			</div>
		</footer>

	</div>

@endsection
