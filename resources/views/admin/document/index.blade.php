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
								{{route('admin.documents.create')}}
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
	          <th>Soft</th>
	          <th>Name</th>
	          <th>SEO Keywords</th>
	          <th>SEO Description</th>
	          <th>Detail</th>
	          <th width="10%">Action</th>
	        </tr>
        </thead>
        <tbody>
					@foreach($documents as $i => $document)
						<tr>
							<td>{{!empty($document->id)?$i=+1:''}}</td>
							<td><a href="#">{{!empty($document->soft)?$document->soft:''}}</a></td>
							<td>
								<small>EN:</small> {{!empty($document->name_en)?$document->name_en:''}}<br>
								<small>KH:</small> {{!empty($document->name_kh)?$document->name_kh:''}}<br>
								<small>MY:</small> {{!empty($document->name_my)?$document->name_my:''}}<br>
								<small>SA:</small> {{!empty($document->name_sa)?$document->name_sa:''}}<br>
							</td>
							<td>{{!empty($document->seo_keywords)?$document->seo_keywords:''}}</td>
							<td>{{!empty($document->seo_description)?$document->seo_description:''}}</td>
							<td>
								<small>EN:</small> {{!empty($document->detail_en)?$document->detail_en:''}}<br>
								<small>KH:</small> {{!empty($document->detail_kh)?$document->detail_kh:''}}<br>
								<small>MY:</small> {{!empty($document->detail_my)?$document->detail_my:''}}<br>
								<small>SA:</small> {{!empty($document->detail_sa)?$document->detail_sa:''}}<br>
							</td>
							<td class="td-action text-right">
								{{-- Edit Button --}}
								<a href="{{ route('admin.documents.edit',!empty($document->id)?$document->id:'') }}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>
								{{-- Delete Button --}}
								<button class="btn btn-danger BtnDelete" value="{{ !empty($document->id)?$document->id:'' }}"><i class="fa fa-trash-alt"></i></button>
								{{ Form::open(['url'=>route('admin.documents.destroy', $document->id), 'id' => 'form-item-'.$document->id, 'class' => 'sr-only']) }}
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
	    </div>
	  </div>
	</div>

@endsection

@section('js')
	<script src="{{ asset('admin_asset/js/jasny-bootstrap.min.js') }}"></script>
	<script type="text/javascript">
	</script>
@endsection
