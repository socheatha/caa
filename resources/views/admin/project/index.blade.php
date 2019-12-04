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
								{{route('admin.project.create')}}
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
	          <th>index</th>
	          <th>SEO Keywords</th>
	          <th>SEO Description</th>
	          <th>Project Category</th>
	          <th width="10%">Action</th>
	        </tr>
        </thead>
        <tbody>
        	@foreach($projects as $i => $project)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $project->name_en .' : '. $project->name_kh .' : '. $project->name_my .' : '. $project->name_sa }}</td>
							<td>{{ $project->index }}</td>
							<td>{{ $project->seo_keywords }}</td>
							<td>{{ $project->seo_descrition }}</td>
							<td class="text-center"><span class="label label-primary">{{ $project->ProjectCategory->name_en }}</span></td>
							<td class="td-action text-right">

								{{-- Edit Button --}}
								<a href="{{ route('admin.project.edit',$project->id) }}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>
								{{-- Delete Button --}}
								<button class="btn btn-danger BtnDelete" value="{{ $project->id }}"><i class="fa fa-trash-alt"></i></button>
								{{ Form::open(['url'=>route('admin.project.destroy', $project->id), 'id' => 'form-item-'.$project->id, 'class' => 'sr-only']) }}
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
