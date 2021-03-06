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
								{{route('admin.other-menu.create')}}
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
	          <th width="5%">{!! __('module.other_menu.table.no') !!}</th>
	          <th>{{ __('module.other_menu.table.name_kh') }}</th>
	          <th>{{ __('module.other_menu.table.name_en') }}</th>
	          <th>{{ __('module.other_menu.table.index') }}</th>
	          <th>{{ __('module.other_menu.table.url') }}</th>
	          <th width="10%">{{ __('module.general.table.action') }}</th>
	        </tr>
        </thead>
        <tbody>
        	@foreach($other_menus as $i => $other_menu)
						<tr>
							<td>{{ ++$i }}</td>
							<td>{{ $other_menu->name }}</td>
							<td>{{ $other_menu->name_en }}</td>
							<td>{{ $other_menu->description}}</td>
							<td class="text-center"><span class="label label-primary">{{ $other_menu->client->count()}}</span></td>
							<td class="td-action text-right">

								{{-- Edit Button --}}
								<a href="{{ route('admin.other-menu.edit',$other_menu->id) }}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>

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
