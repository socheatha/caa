@extends('admin.layouts.app')

@section('css')
<style type="text/css">

</style>
@endsection

@section('content')
<div class="box box-success">
	<div class="box-header with-border">
		<h3 class="box-title">{{ Auth::user()->subModule() }}</h3>

		<div class="box-tools pull-right">

			<!-- Action Dropdown -->
			@component('admin.components.back')
			@slot('btnBack')
			{{route('admin.user.index')}}
			@endslot
			@endcomponent

			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>

		<!-- Error Message -->
		@include('admin.components.errorSMS')
	</div>
	<!-- /.box-header -->

	{!! Form::open(['url' => route('admin.user.update', $user->id),'method' => 'post','class' => 'mt-3',
	'autocomplete'=>'off']) !!}
	{!! Form::hidden('_method', 'PUT') !!}

	<div class="box-body">

		<!-- Form -->
		<div class="row">
			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group {!! (($errors->has('name'))? 'has-error':'') !!}">
							{!! Html::decode(Form::label('name', __('label.form.user.name')." <small>*</small>")) !!}
							{!! Form::text('name', ((isset($user->name))? $user->name : '' ), ['class' => 'form-control ','placeholder' =>
							'name','required']) !!}
							{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group {!! (($errors->has('gender'))? 'has-error':'') !!}">
							{!! Html::decode(Form::label('gender', __('label.form.user.gender')." <small>*</small>")) !!}
							{!! Form::select('gender',
							['1'=>__('label.form.male'),'2'=>__('label.form.female'),'3'=>__('label.form.other')],
							((isset($user->gender))? $user->gender : '' ), ['class' => 'form-control select2','placeholder' =>
							__('label.form.choose'),'required']) !!}
							{!! $errors->first('gender', '<span class="help-block">:message</span>') !!}
						</div>
					</div>
				</div>
			</div>
			{{-- / .col --}}

			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group {!! (($errors->has('phone'))? 'has-error':'') !!}">
							{!! Html::decode(Form::label('phone', __('label.form.user.phone'))) !!}
							{!! Form::text('phone', ((isset($user->phone))? $user->phone : '' ), ['class' => 'form-control
							','placeholder'
							=> 'phone']) !!}
							{!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group {!! (($errors->has('language'))? 'has-error':'') !!}">
							{!! Html::decode(Form::label('language', __('label.form.user.language')." <small>*</small>")) !!}
							{!! Form::select('language', [ 'km' => __('label.form.user.kh'), 'en' => __('label.form.user.en') ],
							((isset($user->language))? $user->language : '' ), ['class' => 'form-control select2','required']) !!}
						</div>
					</div>
				</div>
			</div>

		</div>
		{{-- / .row --}}

		{{ csrf_field() }}

	</div>
	<!-- ./box-body -->

	<div class="box-footer text-center">
		@include('admin.components.submit')
	</div>
	<!-- ./box-body -->

	{!! Form::close() !!}

</div>
<!-- /.box -->
@endsection

@section('js')
<script type="text/javascript">

</script>
@endsection