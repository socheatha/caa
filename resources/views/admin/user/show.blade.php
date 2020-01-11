@extends('admin.layouts.app')

@section('css')
<link href="{{ asset('admin_asset/css/jasny-bootstrap.min.css') }}" rel="stylesheet">
<style type="text/css">
	.profile-top .name {
		text-transform: uppercase;
		margin: 5px 0 0 0;
	}

	.profile-top .role_name {
		text-transform: uppercase;
		margin: 5px 0 0 0;
		color: #999;
	}

	.profile-top .email {
		text-transform: uppercase;
		margin: 5px 0 0 0;
	}
</style>
@endsection

@section('content')
<div class="box box-success">
	<div class="box-header with-border">
		<div class="row">

			<div class="col-sm-6 col-md-7">
				<h3 class="box-title mb-4">{{ Auth::user()->subModule() }}</h3>
			</div>
			{{-- /.col --}}

			<div class="col-sm-6 col-md-5">
				<div class="box-tools pull-right">
					<!-- Action Dropdown -->
					@component('admin.components.action')
					@slot('btnCreate')
					{{route('admin.user.create')}}
					@endslot
					@endcomponent

					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			{{-- /.col --}}

		</div>
		{{-- /.row --}}

		<!-- Error Message -->
		@component('admin.components.errorSMS')
		@endcomponent
	</div>
	<!-- /.box-header -->


	<div class="box-body">
		<div class="row">
			<div class="col-sm-3">
				<div class="image"
					style="background: url('/images/users/{{ Auth::user()->profile }}') center center; background-size: cover; width: 100%;">

				</div>
			</div>
			<div class="col-sm-9">
				<div class="profile-top">
					<h2 class="name">{{ Auth::user()->name }}</h2>
					{{-- <h5 class="email">{{ Auth::user()->email }}</h5> --}}

				</div>
				<div class="information mt-9">
					<table width="100%" class="table table-hover table-striped">
						<tr>
							<td width="50px"><b>E-mail</b></td>
							<td><b> :</b> {{ Auth::user()->email }}</td>
						</tr>
						<tr>
							<td width="50px"><b>Gender</b></td>
							<td><b> :</b>
								{{ ((Auth::user()->gender==1)? __('label.form.male') : ((Auth::user()->gender==2)? __('label.form.female') : __('label.form.other') ) ) }}
							</td>
						</tr>
						<tr>
							<td width="50px"><b>Phone</b></td>
							<td><b> :</b> {{ Auth::user()->gender }}</td>
						</tr>
						<tr>
							<td width="50px"><b>Language</b></td>
							<td><b> :</b>
								{!! Auth::user()->language !!}
							</td>
						</tr>
						<tr>
							<td width="50px"><b>Status</b></td>
							<td><b> :</b>
								{!! ((Auth::user()->status==1)? '<span class="label label-success">Active</span>' : '<span
									class="label label-danger">Active</span>' ) !!}
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-sm-12">
				<!-- Custom Tabs -->
				<div class="nav-tabs-custom mt-9">
					<ul class="nav nav-tabs">
						<li class="active" data-tab="0"><a href="#change_password" data-toggle="tab"><i class="fa fa-key"></i>&nbsp;
								Password
							</a>
						</li>
						<li data-tab="1"><a href="#change_info" data-toggle="tab"><i class="fa fa-info"></i>&nbsp;
								Information
							</a>
						</li>
						<li data-tab="2"><a href="#image" data-toggle="tab"><i class="fa fa-image"></i>&nbsp;
								Image
							</a>
						</li>
						{{-- <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-cog"></i></a></li> --}}
					</ul>
					<div class="tab-content">
						<div class="tab-pane active mt-9" data-tab="0" id="change_password">
							{!! Form::open(['url' => route('admin.user.updatePassword', $user->id), 'method' => 'post', 'class' => 'mt-3', 'autocomplete'=>'off']) !!}
							{!! Form::hidden('_method', 'PUT') !!}
							<div class="form-group {!! (($errors->has('current_password'))? 'has-error':'') !!}">
								{!! Html::decode(Form::label('current_password', __('label.form.user.current_password')."
								<small>*</small>"))
								!!}
								{!! Form::password('current_password', ['class' => 'form-control ',
								'placeholder'=>'current password', 'id'=>'current_password','required']) !!}
								{!! $errors->first('current_password', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="form-group {!! (($errors->has('password'))? 'has-error':'') !!}">
								{!! Html::decode(Form::label('password', __('label.form.user.password')." <small>*</small>"))
								!!}
								{!! Form::password('password', ['class' => 'form-control ','placeholder' => 'new password','id' =>
								'password','required']) !!}
								{!! $errors->first('password', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="form-group {!! (($errors->has('password_confirmation'))? 'has-error':'') !!}">
								{!! Html::decode(Form::label('password-confirm', __('label.form.user.password_confirmation')."
								<small>*</small>"))
								!!}
								{!! Form::password('password_confirmation', ['class' => 'form-control ','placeholder' =>
								'password-confirm','id'
								=> 'password-confirm','required']) !!}
								{!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
							</div>
							<div class="text-center mb-5">
								<br />
								@include('admin.components.submit')
							</div>
							<!-- ./box-body -->

							{!! Form::close() !!}
						</div>
						<div class="tab-pane active mt-9" data-tab="1" id="change_info">
							{!! Form::open(['url' => route('admin.user.updateInfo', $user->id), 'method' => 'post', 'class' => 'mt-3', 'autocomplete'=>'off']) !!}
							{!! Form::hidden('_method', 'PUT') !!}
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
												((isset($user->gender))? $user->gender : '' ), ['class' => 'form-control','placeholder' =>
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
												((isset($user->language))? $user->language : '' ), ['class' => 'form-control','required']) !!}
											</div>
										</div>
									</div>
								</div>
								{{-- / .col --}}
							
							</div>
							{{-- / .row --}}
							<div class="text-center mb-5">
								<br />
								@include('admin.components.submit')
							</div>
							{!! Form::close() !!}
						</div>
						<!-- /.tab-pane -->
						<div class="tab-pane mt-9" data-tab="2" id="image">
							{!! Form::open(['url' => route('admin.user.updateImage', $user->id), 'method'=>'post', 'enctype'=>'multipart/form-data','class' =>
							'mt-3', 'autocomplete'=>'off']) !!}
							{!! Form::hidden('_method', 'PUT') !!}
							<div class="row">
								<div class="col-sm-4 col-sm-offset-4 text-center">
									<div class="fileinput fileinput-new" data-provides="fileinput">
										<div class="fileinput-new img-thumbnail" style="max-width: 100%;">
											<img data-src="" src="/images/users/{{ Auth::user()->profile }}"
												alt="{{ Auth::user()->name }}">
										</div>
										<div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 248px;"></div>
										<div class="mt-2">
											<span class="btn btn-outline-secondary btn-file"><span
													class="fileinput-new">{{ __('label.buttons.select') }}</span><span
													class="fileinput-exists">{{ __('label.buttons.change') }}</span><input type="file"
													name="image" /></span>
											<a href="#" class="btn btn-outline-secondary fileinput-exists"
												data-dismiss="fileinput">{{ __('label.buttons.remove') }}</a>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<br />
								<br />
								<div class="text-center mb-5">
									@include('admin.components.submit')
								</div>
								<!-- ./box-body -->

								{!! Form::close() !!}
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- nav-tabs-custom -->
				</div>
			</div>
		</div>
		<!-- ./box-body -->

	</div>
	<!-- /.box -->

	<!-- Modal -->
	<div class="modal fade" id="modal_confirm_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document" style="margin-top: 80px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"
							class="fa fa-times"></span></button>
					<h4 class="modal-title" id="myModalLabel">{{ __('alert.modal.title.user_image') }}</h4>
				</div>
				<div class="modal-body">

				</div>
			</div>
		</div>
	</div>

	@endsection

	@section('js')
	<script src="{{ asset('admin_asset/js/jasny-bootstrap.min.js') }}"></script>
	<script type="text/javascript">

		$( ".nav-tabs li" ).click(function() {
			localStorage.setItem("tabIndex", $(this).data('tab') );
		});

		$( ".nav-tabs li" ).each(function( e ) {
			$(this).removeClass('active');
			if (localStorage.getItem("tabIndex") == $(this).data('tab') ) {
				$(this).addClass('active');
			}
		});

		$( ".tab-content .tab-pane" ).each(function( e ) {
			$(this).removeClass('active');
			if (localStorage.getItem("tabIndex") == $(this).data('tab') ) {
				$(this).addClass('active');
			}
		});

		var width = $('.image').width();
		$('.image').css({ 'height': width +'px' });
	</script>
	@endsection