
<?php

		$web_lang = ((!session('locale'))? 'en':session('locale') );
		
		$lang_name = 'language_'.$web_lang;

?>


<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=503208063400589&autoLogAppEvents=1"></script>
	
  <header id="header-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<a href="{{ route('home') }}" class="img-logo" title="{{ __('global.company_name') }}">
						<img src="/{!! $web_config->logo !!}" alt="..." />
					</a>
				</div>
				<div class="col-sm-3 offset-sm-6 text-center">
					<div class="dropdown dropdown-lang">
						<button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="flag flag-{{ $language->nationality }}"></div> {{ $language->$lang_name }}
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
							@foreach ($languages as $language)
								<a href="{{ route('locale', $language->nationality ) }}" class="dropdown-item">
									<div class="flag flag-{{ $language->nationality }}"></div> &nbsp;{{ $language->$lang_name }}
								</a>
							@endforeach
							{{-- <a href="{{ route('locale', 'en') }}" class="dropdown-item">
								<div class="flag flag-en"></div> &nbsp;{{ $language->$lang_kh }}
							</a>
							<a href="{{ route('locale', 'my') }}" class="dropdown-item">
								<div class="flag flag-my"></div> &nbsp;{{ $language->$lang_my }}
							</a>
							<a href="{{ route('locale', 'sa') }}" class="dropdown-item">
								<div class="flag flag-sa"></div> &nbsp;{{ $language->$lang_sa }}
							</a> --}}
						</div>
					</div>
					<div class="social-header">
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="{!! $web_config->fb_url !!}"><i class="fab fa-facebook-square"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="{!! $web_config->instagram_url !!}"><i class="fab fa-instagram"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="{!! $web_config->tw_url !!}"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item">
								<a href="{!! $web_config->linkedin_url !!}"><i class="fab fa-linkedin"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	