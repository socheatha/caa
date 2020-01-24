@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h3 class="mb-2">{{ __('frontend.contact_us.contact') }}</h3>
                <ul class="nav_contact navbar-nav">
                    <li><i class="fa fa-phone text-primary"></i>&nbsp; {{ __('frontend.contact_us.phone') }} {{$web_config->$phone}}</li> 
                    <li><i class="fa fa-envelope text-warning"></i>&nbsp; {{ __('frontend.contact_us.email') }} {{$web_config->email}}</li> 
                    <li><i class="fa fa-facebook-square text-primary"></i>&nbsp; {{ __('frontend.contact_us.facebook') }} {{$web_config->fb_url}}</li> 
                    <li><i class="fa fa-map-marker text-danger"></i>&nbsp; {{ __('frontend.contact_us.address') }} {{$web_config->$address}}</li>
                </ul>
                <hr>
                <p><i>{{ __('frontend.contact_us.see_on_map') }}</i></p>
                <div class="map-responsive">
                    {!! $web_config->map_location !!} 
                </div>
            </div>
            <div class="col-sm-4">
                @include('include.side_bar_right')
            </div>
        </div>
    </div>
@endsection
