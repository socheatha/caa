@extends('admin.layouts.app')

@section('css')
	<link href="{{ asset('admin_asset/css/jasny-bootstrap.min.css') }}" rel="stylesheet">
	<style type="text/css">
		.thumbnail{
			width: 80px;
			height: 60px;
			margin: 0;
		}
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
								{{route('admin.activity.create')}}
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
	          <th>Image</th>
	          <th>Name</th>
	          <th>index</th>
	          <th>SEO Keywords</th>
	          <th>SEO Description</th>
	          <th>Activity Category</th>
	          <th width="10%">Action</th>
	        </tr>
        </thead>
        <tbody>
        	@foreach($activities as $i => $activity)
						<tr>
							<td>{{ ++$i }}</td>
							<td>
								<div class="thumbnail" style="background: url('/images/activities/{{ $activity->id }}/thumb_{{ $activity->thumbnail }}') center center; background-size: cover;"></div>
							</td>
							<td>{{ $activity->name_en .' : '. $activity->name_kh .' : '. $activity->name_my .' : '. $activity->name_sa }}</td>
							<td>{{ $activity->index }}</td>
							<td>{{ $activity->seo_keywords }}</td>
							<td>{{ $activity->seo_descrition }}</td>
							<td class="text-center"><span class="label label-primary">{{ $activity->ActivityCategory->name_en }}</span></td>
							<td class="td-action text-right">

								{{-- Edit Button --}}
								<button class="btn btn-warning btnImage" data-url="{{ route('admin.activity.update_image', $activity->id) }}" data-src="{{ $activity->thumbnail }}" data-id="{{ $activity->id }}"><i class="fa fa-image"></i></button>
								{{-- Edit Button --}}
								<a href="{{ route('admin.activity.edit',$activity->id) }}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>
								{{-- Delete Button --}}
								<button class="btn btn-danger BtnDelete" value="{{ $activity->id }}"><i class="fa fa-trash-alt"></i></button>
								{{ Form::open(['url'=>route('admin.activity.destroy', $activity->id), 'id' => 'form-item-'.$activity->id, 'class' => 'sr-only']) }}
								{{ Form::hidden('_method','DELETE') }}
								{{ Form::close() }}

							</td>
						</tr>
        	@endforeach
        </tbody>
      </table>
    </div>
    <!-- ./box-body -->
  </div>
	<!-- /.box -->
	
	
	<!-- Modal Other -->
	<div class="modal fade" id="ActivityImageModal" tabindex="-1" role="dialog" aria-labelledby="ActivityImageModalLabel">
	  <div class="modal-dialog" role="document" style="margin-top: 50px;">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
	        <h4 class="modal-title" id="ActivityImageModalLabel">Change Activity Thumbnail (1000px x 690px)</h4>
				</div>
				
				{!! Form::open(['url' => '','method' => 'post', 'enctype'=>'multipart/form-data','class' => 'mt-3','id' => 'imageForm']) !!}
				{!! Form::hidden('_method', 'PUT') !!}
	      <div class="modal-body text-center">
					<div class="fileinput fileinput-new" data-provides="fileinput" style="max-width: 100%;">
						<div class="fileinput-new thumbnail" style="width: 100%; height: auto;">
							<img id="ActivityImg" data-src="" src="" alt="...">
						</div>
						<div class="fileinput-preview fileinput-exists thumbnail" style="width: auto; height: auto;"></div>
						<div>
							<span class="btn btn-primary btn-file mt-2">
								<span class="fileinput-new">Select image</span>
								<span class="fileinput-exists">Change</span><input type="file" name="thumbnail">
							</span>
							<a href="#" class="btn btn-warning fileinput-exists mt-2" data-dismiss="fileinput">Remove</a>
						</div>
					</div>
				</div>
				
	      <div class="modal-footer">
					@include('admin.components.submit')
				</div>
		
				{!! Form::close() !!}
				
	    </div>
	  </div>
	</div>

@endsection

@section('js')
	<script src="{{ asset('admin_asset/js/jasny-bootstrap.min.js') }}"></script>
	<script type="text/javascript">
		$('.btnImage').click(function () {

			$('#ActivityImg').attr({
															"data-src": "/images/activities/"+ $(this).data('id') + "/thumb_"+ $(this).data('src'),
															"src": "/images/activities/"+ $(this).data('id') + "/thumb_"+ $(this).data('src')
														});

			$('#imageForm').attr('action',$(this).data('url'));

			$('#ActivityImageModal').modal();
		});
	</script>
@endsection
