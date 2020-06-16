<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>
	
	<!-- Styles -->
	<link href="{{ asset('admin_asset/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/flags.css') }}" rel="stylesheet">
	<link href="{{ asset('admin_asset/css/custom-style.css') }}" rel="stylesheet">

	{{-- Custom Style Css --}}
	@yield('css')

</head>
<body class="hold-transition skin-blue sidebar-mini fixed sidebar-mini-expand-feature">
	<div class="wrapper">

		@include('admin.layouts.header')

		@include('admin.layouts.left-bar')


		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					{{ Auth::user()->module() }}
				<small>{{ __('label.content.header.title') . Auth::user()->module() }}</small>
				</h1>
				<ol class="breadcrumb">
					{!! Auth::user()->breadCrumb() !!}
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				@yield('content')
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		{{-- <aside class="control-sidebar control-sidebar-dark" style="display: none;">

			<!-- Create the tabs -->
			<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
				<li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
				<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fas fa-cogs"></i></a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Home tab content -->
				<div class="tab-pane active" id="control-sidebar-home-tab">
					<h3 class="control-sidebar-heading">Recent Activity</h3>
					<ul class="control-sidebar-menu">
						<li>
							<a href="javascript:void(0)">
								<i class="menu-icon fa fa-birthday-cake bg-red"></i>

								<div class="menu-info">
									<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

									<p>Will be 23 on April 24th</p>
								</div>
							</a>
						</li>
					</ul>
					<!-- /.control-sidebar-menu -->

					<h3 class="control-sidebar-heading">Tasks Progress</h3>
					<ul class="control-sidebar-menu">
						<li>
							<a href="javascript:void(0)">
								<h4 class="control-sidebar-subheading">
									Custom Template Design
									<span class="label label-danger pull-right">70%</span>
								</h4>

								<div class="progress progress-xxs">
									<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
								</div>
							</a>
						</li>
					</ul>
					<!-- /.control-sidebar-menu -->

				</div>
				<!-- /.tab-pane -->
				<!-- Stats tab content -->
				<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
				<!-- /.tab-pane -->
				<!-- Settings tab content -->
				<div class="tab-pane" id="control-sidebar-settings-tab">
					<form method="post">
						<h3 class="control-sidebar-heading">General Settings</h3>

						<div class="form-group">
							<label class="control-sidebar-subheading">
								Report panel usage
								<input type="checkbox" class="pull-right" checked>
							</label>

							<p>
								Some information about this general settings option
							</p>
						</div>
						<!-- /.form-group -->

						<h3 class="control-sidebar-heading">Chat Settings</h3>

						<div class="form-group">
							<label class="control-sidebar-subheading">
								Show me as online
								<input type="checkbox" class="pull-right" checked>
							</label>
						</div>
						<!-- /.form-group -->

					</form>
				</div>
				<!-- /.tab-pane -->
			</div>
		</aside> --}}
		<!-- /.control-sidebar -->


		<!-- Add the sidebar's background. This div must be placed
				 immediately after the control sidebar -->
		{{-- <div class="control-sidebar-bg"></div> --}}
	</div>


	<!-- Scripts -->
	<script src="{{ asset('admin_asset/js/app.js') }}"></script>
	<script src="{{ asset('admin_asset/js/custom-javascript.js') }}"></script>

	{{-- Custom Javascript --}}
	@yield('js')

</body>
</html>
