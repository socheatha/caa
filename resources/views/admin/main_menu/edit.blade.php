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
						{{route('admin.main-menu.index')}}
					@endslot
				@endcomponent

				{{-- Dropdown Lang Button --}}
				<div class="dropdown">
					<button id="dLabel" class="btn btn-box-tool btn-info" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-pencil-alt"></i> Languages
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel">
						@foreach($mainMenu->AllLanguages() as $l => $language)
							@if ($language->nationality !== $lang)
								<li>
									<a href="{{ route('admin.main-menu.edit',[$mainMenu->id, $language->nationality]) }}" class="">{{ $language->language }}</a>
								</li>
							@endif
						@endforeach
					</ul>
				</div>

        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>

			<!-- Error Message -->
			@include('admin.components.errorSMS')
    </div>
    <!-- /.box-header -->

		{!! Form::open(['url' => route('admin.main-menu.update', $mainMenu->id),'method' => 'post','class' => 'mt-3']) !!}
		{!! Form::hidden('_method', 'PUT') !!}

    <div class="box-body">
			
			<!-- Form -->
			@include('admin.main_menu.form')
			
			{!! Form::hidden('language', $lang) !!}

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
