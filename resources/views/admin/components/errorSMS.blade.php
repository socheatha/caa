@if (session('success'))
	<br/>
	<br/>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		{!! session('success') !!}
	</div>
@endif
@if (session('warning'))
	<br/>
	<br/>
	<div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		{!! session('warning') !!}
	</div>
@endif
@if (session('error'))
	<br/>
	<br/>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		{!! session('error') !!}
	</div>
@endif
@if (count($errors) > 0)
	<br/>
	<br/>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<ul>
			@foreach ($errors->all() as $error)
					<li>{!! $error !!}</li>
			@endforeach
		</ul>
	</div>
@endif