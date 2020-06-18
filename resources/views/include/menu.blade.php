	<nav id="navbar-2" class="navbar navbar-expand-sm navbar-light bg-white animated">
		<div class="container">
			<a class="navbar-brand sr-only" style="width: 210px;" href="{{ route('home') }}">
				<img src="/images/logo.png" alt="..." />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<ul class="navbar-nav navbar-item-list">
					@foreach ($menus as $menu)
							@if ($menu->SubMenu->count() > 0 )
								<li class="nav-item dropdown {{ ((isset($routename[0]) && $routename[0] == strtolower(str_replace(" ","-","$menu->name_en")))? 'active' : '') }}">
									<a class="nav-link" href="#{{ $menu->$name }}"   id="navbarDropdown" role="button" data-toggle="dropdown">{{ $menu->$name }} &nbsp;<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										@foreach ($menu->SubMenu as $sub_menu)
											@if ($sub_menu->SubSubMenu->count() > 0 )
												<li class="dropdown-submenu">
													<a href="{{ $sub_menu->url }}" class="dropdown-item dropdown-toggle">{{ $sub_menu->$name }}</a>
													<span class="highlight"></span>
													<ul class="dropdown-menu">
														@foreach ($sub_menu->SubSubMenu as $a)
															<li>
																<a href="{{ $a->url }}" class="dropdown-item">{{ $a->$name }}</a>
															</li>
														@endforeach
													</ul>
												</li>
											@else
												<li>
													<a class="dropdown-item" href="{{ $sub_menu->url }}">{{ $sub_menu->$name }}</a>
												</li>
											@endif
										@endforeach
									</ul>
								</li>
							@else
							<li class="nav-item {{ ((isset($routename[0]) && $routename[0] == strtolower(str_replace(" ","-","$menu->name_en")))? 'active' : '') }}">
								<a class="nav-link" href="{{ $menu->url }}">{{ $menu->$name }}</a>
								<span class="highlight"></span>
							</li>
							@endif
					@endforeach

			
					{{-- <li class="nav-item search sr-only">
						<a class="nav-link" href="#search" data-toggle="tab"><i class="fa fa-search"></i></a>
						<ul class="list-unstyled">
							<li>
								<input type="text" placeholder="search..." />
							</li>
						</ul>
					</li> --}}
				</ul>
							
				{{-- <form class="form-inline search-bar-menu-top">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="search..." aria-label="search..." aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button" id="button-addon2">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>
				</form> --}}
				
			</div>
		</div>
	</nav>
