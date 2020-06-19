@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<section id="block-front-latest-news" class="block-content">
					<div class="contents">
						<ul class="nav nav-tabs" id="navtab" role="tablist">
              
              @foreach ($about_us as $i => $about)
                <li class="nav-item">
                  <a class="nav-link show {{ (($i==0)? 'active' : '') }}" href="#tab-{{ $about->id }}" role="tab" data-toggle="tab" aria-selected="true">{{ $about->$name }}</a>
                </li>
              @endforeach

						</ul>
            <div class="clearfix"><br></div>
						<div class="tab-content">

              @foreach ($about_us as $i => $about)
                <div role="tabpanel" class="tab-pane fade show {{ (($i==0)? 'active' : '') }}" id="#tab-{{ $about->id }}">
                  {!! $about->$detail !!}
                </div>
              @endforeach

						</div>
					</div>
				</section>
			</div>
			<div class="col-sm-4">
				@include('include.side_bar_right')
			</div>
		</div>
	</div>
@endsection
