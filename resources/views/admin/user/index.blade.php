@extends('admin.layouts.app')

@section('css')
	<style type="text/css">
		
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
      <table id="dataTable{{ ((!session('locale'))? '-kh': ((session('locale')=='km')? '-kh':'' )) }}" class="table table-bordered table-hover">
        <thead>
	        <tr>
	          <th width="5%">N&deg;</th>
	          <th>Name</th>
	          <th>E-mail</th>
	          <th>Phone</th>
	          <th width="10%">Action</th>
	        </tr>
        </thead>
        <tbody>
        	@foreach($users as $i => $user)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->phone }}</td>
							<td class="td-action text-right">

								{{-- Edit Button --}}
								<a href="{{ route('admin.user.edit',$user->id) }}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>

								{{-- Delete Button --}}
								<button class="btn btn-danger BtnDeleteConfirm" value="{{ $user->id }}"><i class="fa fa-trash-alt"></i></button>
								{{ Form::open(['url'=>route('admin.user.destroy', $user->id), 'id' => 'form-item-'.$user->id, 'class' => 'sr-only']) }}
								{{ Form::hidden('_method','DELETE') }}
								{{ Form::hidden('passwordDelete','') }}
								{{ Form::close() }}

							</td>
						</tr>
        	@endforeach
        </tbody>
      </table>
    </div>
    <!-- ./box-body -->

    <span class="sr-only" id="deleteAlert" data-title="{{ __('alert.swal.title.delete', ['name' => Auth::user()->module()]) }}" data-text="{{ __('alert.swal.text.unrevertible') }}" data-btnyes="{{ __('alert.swal.button.yes') }}" data-btnno="{{ __('alert.swal.button.no') }}" data-rstitle="{{ __('alert.swal.result.title.success') }}" data-rstext="{{ __('alert.swal.result.text.delete', ['name' => Auth::user()->module()]) }}"> Delete Message </span>

 

  </div>
  <!-- /.box -->

<!-- Modal -->
<div class="modal fade" id="modal_confirm_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="margin-top: 80px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
        <h4 class="modal-title" id="myModalLabel">{{ __('alert.modal.title.password_confirm') }}</h4>
      </div>
      <div class="modal-body">
        {!! Form::hidden('item_id','', ['id' => 'item_id']) !!}
	      <div class="form-group {!! (($errors->has('password'))? 'has-error':'') !!}">
	        {!! Html::decode(Form::label('password', __('alert.modal.form.password_confirm'))) !!}
	        {!! Form::password('password_confirm', ['class' => 'form-control','placeholder' => 'password','id' => 'password_confirm','autocomplete' => 'off','required']) !!}
	      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('alert.swal.button.no') }}</button>
        <button type="button" class="btn btn btn-success submit_confirm_password" data-dismiss="modal">{{ __('alert.swal.button.yes') }}</button>
      </div>
    </div>
  </div>
</div>
<input type="email" class="sr-only for-browser-remember-password" id="email" />

@endsection

@section('js')
	<script type="text/javascript">
		$('.BtnDeleteConfirm').click(function () {
      $('#item_id').val($(this).val());
      $('#modal_confirm_delete').modal();
		});

		$('.submit_confirm_password').click(function () {
			var id = $('#item_id').val();
			var password_confirm = $('#password_confirm').val();
			$('[name="passwordDelete"]').val(password_confirm);
			if (password_confirm!='') {
		    $.ajax({
	        url: "{{ route('admin.user.password_confirm') }}",
					type: 'post',
					data: {id:id, _token:'{{ csrf_token() }}', password_confirm:password_confirm},
      	})
      	.done(function( result ) {
		        if(result == true){
							Swal.fire({
							  type: 'success',
							  title: "{{ __('alert.swal.result.title.success') }}",
							  confirmButtonText: "{{ __('alert.swal.button.yes') }}",
							  timer: 1500
							})
							.then((result) => {
								$( "form" ).submit(function( event ) {
									$('button').attr('disabled','disabled');
								});
								$('[name="passwordDelete"]').val(password_confirm);
								$("#form-item-"+id).submit();
							})
		        }else{
							Swal.fire({
							  type: 'warning',
							  title: "{{ __('alert.swal.result.title.wrong',['name'=>'ពាក្យសម្ងាត់']) }}",
							  confirmButtonText: "{{ __('alert.swal.button.yes') }}",
							  timer: 2500
							})
							.then((result) => {
			      		$('#modal_confirm_delete').modal();
							})
	        	}
		    });
			}else{
				Swal.fire({
				  type: 'warning',
				  title: "{{ __('alert.swal.title.empty') }}",
				  confirmButtonText: "{{ __('alert.swal.button.yes') }}",
				  timer: 1500
				})
				.then((result) => {
      		$('#modal_confirm_delete').modal();
				})
			}
		});

	</script>
@endsection
