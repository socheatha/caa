@extends('admin.layouts.app')

@section('css')
	<style type="text/css">
		
	</style>
@endsection

@section('content')
	<div class="box box-primary">
    <div class="box-header with-border">
    	<div class="row">
    		<h1>this screen is design index, and edit page. </h1>
    		<div class="col-sm-6 col-md-7">
	      	<h3 class="box-title mb-4">{{ Auth::user()->subModule() }}</h3>
    		</div>
    		{{-- /.col --}}

    		<div class="col-sm-6 col-md-5">
		      <div class="box-tools pull-right">

						<!-- Action Dropdown -->
						@component('admin.components.action')
							@slot('btnCreate')
								{{route('admin.main-menu.create')}}
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
      <table id="dataTable{{ ((!session('locale'))? '': ((session('locale')=='kh')? '-kh':'' )) }}" class="table table-bordered table-hover">
        <thead>
	        <tr>
	          <th width="5%">{!! __('module.main_menu.table.no') !!}</th>
	          <th>{{ __('module.main_menu.table.name') }}</th>
	          <th>{{ __('module.main_menu.table.index') }}</th>
	          <th>{{ __('module.main_menu.table.url') }}</th>
	          <th>{{ __('module.main_menu.table.status') }}</th>
	          <th>{{ __('module.main_menu.table.sub-menu') }}</th>
	          <th width="10%">{{ __('module.general.table.action') }}</th>
	        </tr>
        </thead>
        <tbody>
        	
        </tbody>
      </table>
    </div>
    <!-- ./box-body -->
  </div>
	<!-- /.box -->
	
	
	<!-- New main_menu Modal -->
	<div class="modal fade" id="editMainMenuModal" tabindex="-1" role="dialog" aria-labelledby="main_menuModalLabel">
		<div class="modal-dialog" role="document" style="width: 60%;">
			<div class="modal-content" style="margin-top: 80px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
					<h4 class="modal-title" id="main_menuModalLabel">{{ __('alert.modal.title.edit_main_menu') }}</h4>
				</div>
				<div class="modal-body">

					{!! Form::text('lang', '', ['class' => 'form-control']) !!}
					
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								{!! Html::decode(Form::label('name', __('label.form.main-menu.name')." <small>*</small>")) !!}
								{!! Form::text('name', '', ['class' => 'form-control name_main_menu','placeholder' => 'name','required']) !!}
							</div>
						</div>
						{{-- / .col --}}
					</div>
					{{-- / .row --}}
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('alert.swal.button.no') }}</button>
					<button type="button" class="btn btn btn-success" id="update_lang_main_menu">{{ __('alert.swal.button.yes') }}</button>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('js')
	<script type="text/javascript">


	</script>
@endsection
