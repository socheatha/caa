@extends('admin.layouts.app')

@section('css')
	<style type="text/css">
		
	</style>
@endsection

@section('content')
	<div class="box box-primary">
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
        	@foreach($main_menus as $i => $main_menu)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $main_menu->translation('en')->name }}</td>
							<td>{{ $main_menu->index}}</td>
							<td>{{ $main_menu->url}}</td>
							<td>{{ $main_menu->status}}</td>
							<td class="text-center"><span class="label label-primary">{{ $main_menu->SubMenu->count()}}</span></td>
							<td class="td-action text-right">


								{{-- Edit Button --}}
								<a href="{{ route('admin.main-menu.edit',$main_menu->id) }}" class="btn btn-primary"><i class="fa fa-pencil-alt"></i></a>

								{{-- Dropdown Lang Button --}}
								<div class="dropdown">
									<button id="dLabel" class="btn btn-info btn-flat" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-globe-americas"></i>
											<span class="caret"></span>
									</button>
									<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel">
										@foreach($main_menu->AllLanguages() as $l => $lang)
											<li>
												<a href="#{{ $lang->language }}" data-lang="{{ $lang->nationality }}" data-id="{{ $main_menu->id }}" class="editBtn">{{ $lang->language }}</a>
											</li>
										@endforeach
									</ul>
								</div>

							</td>
						</tr>
        	@endforeach
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

		$('.editBtn').click(function (e) {
  		e.preventDefault();

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: "{{ route('admin.main-menu.edit') }}",
				method: 'post',
				data: {
					id: $(this).data('id'),
					lang: $(this).data('lang'),
				},
				success: function(data){
					console.log(data);
					$('[name="lang"]').val($(this).data('lang'));
					$('#editMainMenuModal').modal();
				}
			});
		});

		$('#update_lang_main_menu').click(function (e) {
  		e.preventDefault();

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: "{{ route('admin.main-menu.edit') }}",
				method: 'post',
				data: {
					id: $(this).data('id'),
					lang: $(this).data('lang'),
				},
				success: function(data){
					console.log(data);
					$('[name="lang"]').val($(this).data('lang'));
					$('#editMainMenuModal').modal();
				}
			});
			
		});

	</script>
@endsection
