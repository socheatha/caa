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
						{{route('admin.other_menu.index')}}
					@endslot
				@endcomponent

        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>

			<!-- Error Message -->
			@include('admin.components.errorSMS')
    </div>
    <!-- /.box-header -->

		{!! Form::open(['url' => route('admin.other_menu.update', $business_objective->id),'method' => 'post','class' => 'mt-3']) !!}
		{!! Form::hidden('_method', 'PUT') !!}

    <div class="box-body">
			
			<!-- Form -->
			@include('admin.other_menu.form')

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
