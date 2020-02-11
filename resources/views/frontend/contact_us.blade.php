@extends('layouts.app')

@section('css')
	<style>
		/* .nav_contact li i{
			width: 20px;
		}

		input.form-control,
		textarea.form-control{
			border-radius: 0;
			border: 1px solid #eee !important;
			padding: 25px 20px;
		}
		.form-control{
			margin-bottom: 25px;
		}

		.btn{
			border-radius: 0;
			margin-bottom: 20px;
		} */

	</style>
@endsection

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}

{{-- {!! NoCaptcha::renderJs() !!} --}}
@section('content')

	<div class="map">
		{{-- <h3>{{ __('frontend.contact_us.') }}</h3> --}}
		<div class="map-container">
			<iframe src="{{ $web_config->map_location }}" width="100%" height="460" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<hr>
				<h3 class="mb-2">{{ __('frontend.contact_us.get_in_touch') }}</h3>
				<div class="text-mute">{{ __('frontend.contact_us.get_in_touch_text') }}</div>
				<div class="clearfixed"></div>
				{{ Form::open(['url' => '/contact-form','method' => 'post', 'class' => 'mt-3']) }}
					<div class="form-group mt-4">
					{!! Form::text('name', '', ['class' => 'form-control ','placeholder' => 'Your Name','required']) !!}
					</div>
					<div class="form-group">
					{!! Form::text('email', '', ['class' => 'form-control ','placeholder' => 'Your E-mail','required']) !!}
					</div>
					<div class="form-group">
					{!! Form::textarea('message', '', ['class' => 'form-control ','rows' => '8','placeholder' => 'Type your message here...','required']) !!}
					</div>
					<div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
						<label class="col-md-4 control-label">Captcha</label>
						<div class="col-md-6">
							{!! app('captcha')->display() !!}
							@if ($errors->has('g-recaptcha-response'))
								<span class="help-block">
										<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
								</span>
							@endif
						</div>
					</div>


					<button type="submit" class="btn btn-success"><i class="fa fa-paper-plane"></i> &nbsp;{{ __('frontend.buttons.send') }}</button>
				{{ Form::close() }}

				<hr>
				<h3 class="mb-2">{{ __('frontend.contact_us.contact') }}</h3>
				<ul class="nav_contact navbar-nav">
					<li><i class="fa fa-phone text-primary"></i>&nbsp; {{ __('frontend.contact_us.phone') }} {{$web_config->$phone}}</li> 
					<li><i class="fa fa-envelope text-warning"></i>&nbsp; {{ __('frontend.contact_us.email') }} {{$web_config->email}}</li> 
					<li><i class="fab fa-facebook-square text-primary"></i>&nbsp; {{ __('frontend.contact_us.facebook') }} {{$web_config->fb_url}}</li> 
					<li><i class="fa fa-map-marker text-danger"></i>&nbsp; {{ __('frontend.contact_us.address') }} {{$web_config->$address}}</li>
				</ul>
			</div>
			<div class="col-sm-4">
				@include('include.side_bar_right')
			</div>
		</div>
	</div>
@endsection
