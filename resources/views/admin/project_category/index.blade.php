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
								{{route('admin.project_category.create')}}
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
	          <th width="5%">N&deg;</th>
	          <th>Name</th>
	          <th>index</th>
	          <th>SEO Keywords</th>
	          <th>Description</th>
	          <th>Projects</th>
	          <th width="10%">Action</th>
	        </tr>
        </thead>
        <tbody>
        	@foreach($projectCategorys as $i => $projectCategory)
						<tr>
							<td class="text-center">{{ ++$i }}</td>
							<td>{{ $projectCategory->name_en .' : '. $projectCategory->name_kh .' : '. $projectCategory->name_my .' : '. $projectCategory->name_sa }}</td>
							<td>{{ $projectCategory->index}}</td>
							<td>{{ $projectCategory->seo_keywords }}</td>
							<td>{{ $projectCategory->descrition_en }}</td>
							<td class="text-center"><span class="label label-primary">{{ $projectCategory->Projects->count()}}</span></td>
							<td class="td-action text-right">
								{{-- Edit Button --}}
								<a href="{{ route('admin.project_category.edit',$projectCategory->id) }}" class="btn btn-primary"><i class="fa fa-pencil-alt"></i></a>
								{{-- Delete Button --}}
								<button class="btn btn-danger BtnDelete" value="{{ $projectCategory->id }}"><i class="fa fa-trash-alt"></i></button>
								{{ Form::open(['url'=>route('admin.project_category.destroy', $projectCategory->id), 'id' => 'form-item-'.$projectCategory->id, 'class' => 'sr-only']) }}
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
@endsection

@section('js')
	<script type="text/javascript">


	</script>
@endsection
