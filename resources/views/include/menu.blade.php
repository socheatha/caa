	<nav id="navbar-2" class="navbar navbar-main-top navbar-expand-lg navbar-light bg-white animated">
		<div class="container">
			<a class="navbar-brand sr-only" style="width: 210px;" href="#">
				<img src="/images/logo.png" alt="..." />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav navbar-item-list mr-auto">
					@foreach ($menus as $menu)
							@if ($menu->SubMenu->count() > 0 )
									
								<li class="nav-item">
									<a class="nav-link" href="#{{ $menu->$name }}" data-toggle="tab">{{ $menu->$name }} &nbsp;<i class="fa fa-angle-down"></i></a>
									<ul class="list-unstyled">
										@foreach ($menu->SubMenu as $sub_menu)
											<li>
												<a href="{{ $sub_menu->url }}">{{ $sub_menu->$name }}</a>
											</li>
										@endforeach
									</ul>
								</li>
							@else
							<li class="nav-item">
								<a class="nav-link" href="{{ $menu->url }}">{{ $menu->$name }}</a>
							</li>
							@endif
					@endforeach
					
					{{-- <li class="nav-item active">
						<a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('about-us') }}">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#projects" data-toggle="tab">Projects &nbsp;<i class="fa fa-angle-down"></i></a>
						<ul class="list-unstyled">
							<li>
								<a href="{{ route('project.mujammak') }}">Mujammak</a>
							</li>
							<li>
								<a href="{{ route('project.halaqah') }}">Halaqah</a>
							</li>
							<li>
								<a href="{{ route('project.primary-school') }}">សាលាបឋមសិក្សា</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Activities</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fa fa-heart"></i> Donate</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#others" data-toggle="tab">Others &nbsp;<i class="fa fa-angle-down"></i></a>
						<ul class="list-unstyled">
							<li>
								<a href="#">Education</a>
							</li>
							<li>
								<a href="{{ route('project.halaqah') }}">Testing 1</a>
							</li>
							<li>
								<a href="{{ route('project.primary-school') }}">Testing 2</a>
							</li>
						</ul>
					</li> --}}

					<li class="nav-item search sr-only">
						<a class="nav-link" href="#search" data-toggle="tab"><i class="fa fa-search"></i></a>
						<ul class="list-unstyled">
							<li>
								<input type="text" placeholder="search..." />
							</li>
						</ul>
					</li>
				</ul>
							
				<form class="form-inline search-bar-menu-top">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="search..." aria-label="search..." aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button" id="button-addon2">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>
				</form>
				
			</div>
		</div>
	</nav>
