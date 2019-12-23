@extends('admin.layouts.app')

@section('css')
	<link href="{{ asset('admin_asset/css/jasny-bootstrap.min.css') }}" rel="stylesheet">
	<style type="text/css">
		
	</style>
@endsection

@section('content')
	<div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">{{ Auth::user()->subModule() }}</h3>

      <div class="box-tools pull-right">

				<!-- Action Dropdown -->
			{{--	@component('admin.components.back')
					@slot('btnBack')
						{{route('admin.documents.index')}}
					@endslot
				@endcomponent --}}

        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>

			<!-- Error Message -->
			@include('admin.components.errorSMS')
    </div>
    <!-- /.box-header -->

		{{ Form::open(['route' => 'admin.documents.store','method' => 'post', 'enctype'=>'multipart/form-data','class' => 'mt-3']) }}

    <div class="box-body">
			
			<!-- Form -->
			@include('admin.document.form')

    </div>
    <!-- ./box-body -->

    <div class="box-footer text-center">
			@include('admin.components.submit')
    </div>
    <!-- ./box-body -->

		{{ Form::close() }}

  </div>
  <!-- /.box -->
@endsection

@section('js')
	<script src="{{ asset('admin_asset/js/jasny-bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin_asset/ckeditor/ckeditor.js') }}"></script>
	<script type="text/javascript">


	</script>
@endsection
