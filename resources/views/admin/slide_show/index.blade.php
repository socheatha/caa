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
								{{route('admin.slide_show.create')}}
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
	          <th width="10%">Action</th>
	        </tr>
        </thead>
        <tbody>
        	@foreach($slide_shows as $i => $slide_show)
						<tr>
							<td>{{ ++$i }}</td>
							<td>
								<div class="thumbnail" style="background: url('/images/slide_shows/thumb_{{ $slide_show->image }}') center center; background-size: cover;"></div>
							</td>
							<td>{{ $slide_show->name_en .' : '. $slide_show->name_kh .' : '. $slide_show->name_my .' : '. $slide_show->name_sa }}</td>
							<td>{{ $slide_show->index }}</td>
							<td>{{ $slide_show->seo_keywords }}</td>
							<td>{{ $slide_show->seo_descrition }}</td>
							<td class="td-action text-right">

								{{-- Edit Button --}}
								<button class="btn btn-warning btnImage" data-url="{{ route('admin.slide_show.update_image', $slide_show->id) }}" data-src="{{ $slide_show->image }}" data-id="{{ $slide_show->id }}"><i class="fa fa-image"></i></button>
								{{-- Edit Button --}}
								<a href="{{ route('admin.slide_show.edit',$slide_show->id) }}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>
								{{-- Delete Button --}}
								<button class="btn btn-danger BtnDelete" value="{{ $slide_show->id }}"><i class="fa fa-trash-alt"></i></button>
								{{ Form::open(['url'=>route('admin.slide_show.destroy', $slide_show->id), 'id' => 'form-item-'.$slide_show->id, 'class' => 'sr-only']) }}
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
	<div class="modal fade" id="SlideShowModal" tabindex="-1" role="dialog" aria-labelledby="SlideShowModalLabel">
	  <div class="modal-dialog" role="document" style="margin-top: 50px;">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
	        <h4 class="modal-title" id="SlideShowModalLabel">Change Slider Image (1000px x 690px)</h4>
				</div>
				
				{!! Form::open(['url' => '','method' => 'post', 'enctype'=>'multipart/form-data','class' => 'mt-3','id' => 'imageForm']) !!}
				{!! Form::hidden('_method', 'PUT') !!}
	      <div class="modal-body text-center">
					<div class="fileinput fileinput-new" data-provides="fileinput" style="max-width: 100%;">
						<div class="fileinput-new thumbnail" style="width: 100%; height: auto;">
							<img id="SlideShowImg" data-src="" src="" alt="...">
						</div>
						<div class="fileinput-preview fileinput-exists thumbnail" style="width: auto; height: auto;"></div>
						<div>
							<span class="btn btn-primary btn-file mt-2">
								<span class="fileinput-new">Select image</span>
								<span class="fileinput-exists">Change</span><input type="file" name="image">
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

			$('#SlideShowImg').attr({
															"data-src": "/images/slide_shows/thumb_"+ $(this).data('src'),
															"src": "/images/slide_shows/thumb_"+ $(this).data('src')
														});

			$('#imageForm').attr('action',$(this).data('url'));

			$('#SlideShowModal').modal();
		});
	</script>
@endsection
