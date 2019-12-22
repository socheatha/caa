@extends('admin.layouts.app')

@section('css')
<link href="{{ asset('admin_asset/css/jasny-bootstrap.min.css') }}" rel="stylesheet">
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
						{{route('admin.donation.index')}}
					@endslot
				@endcomponent

        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>

			<!-- Error Message -->
			@include('admin.components.errorSMS')
    </div>
    <!-- /.box-header -->

		{!! Form::open(['url' => route('admin.donation.update'),'method' => 'post','class' => 'mt-3']) !!}
		{!! Form::hidden('_method', 'PUT') !!}

    <div class="box-body">
			
			<!-- Form -->
			<div class="row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group {!! (($errors->has('seo_keywords'))? 'has-error':'') !!}">
								{!! Html::decode(Form::label('name', "SEO Keywords <small>*</small>")) !!}
								{!! Form::text('seo_keywords', ((isset($donation->seo_keywords))? $donation->seo_keywords : '' ), ['class' => 'form-control ','placeholder' => 'seo keywords','required']) !!}
								{!! $errors->first('seo_keywords', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					</div>
				</div>
				{{-- / .col --}}
			
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group {!! (($errors->has('description'))? 'has-error':'') !!}">
								{!! Html::decode(Form::label('name', "SEO Description <small>*</small>")) !!}
								{!! Form::textarea('seo_description', ((isset($donation->seo_description))? $donation->seo_description : '' ), ['class' => 'form-control ','rows' => '1','placeholder' => 'seo description','required']) !!}
								{!! $errors->first('seo_description', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					</div>
				</div>
				{{-- / .col --}}
				
				<!-- Component Languages Table -->
				@component('admin.components.languageTab')
					@slot('tab_en')
						<div class="col-sm-12">
							<div class="form-group {!! (($errors->has('detail_en'))? 'has-error':'') !!}">
								{!! Html::decode(Form::label('detail_en', "English Detail <small>*</small>")) !!}
								{!! Form::textarea('detail_en', ((isset($donation->detail_en))? $donation->detail_en : '' ), ['class' => 'form-control my-editor','id' => 'detail_en','placeholder' => 'detail in english','required']) !!}
								{!! $errors->first('detail_en', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					@endslot
					@slot('tab_kh')
						<div class="col-sm-12">
							<div class="form-group {!! (($errors->has('detail_kh'))? 'has-error':'') !!}">
								{!! Html::decode(Form::label('detail_kh', "Detail in Khmer")) !!}
								{!! Form::textarea('detail_kh', ((isset($donation->detail_kh))? $donation->detail_kh : '' ), ['class' => 'form-control my-editor','id' => 'detail_kh','placeholder' => 'detail in khmer']) !!}
								{!! $errors->first('detail_kh', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					@endslot
					@slot('tab_my')
						<div class="col-sm-12">
							<div class="form-group {!! (($errors->has('detail_my'))? 'has-error':'') !!}">
								{!! Html::decode(Form::label('detail_my', "Detail in Malay")) !!}
								{!! Form::textarea('detail_my', ((isset($donation->detail_my))? $donation->detail_my : '' ), ['class' => 'form-control my-editor','id' => 'detail_my','placeholder' => 'detail in malay']) !!}
								{!! $errors->first('detail_my', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					@endslot
					@slot('tab_sa')
						<div class="col-sm-12">
							<div class="form-group {!! (($errors->has('detail_sa'))? 'has-error':'') !!}">
								{!! Html::decode(Form::label('detail_sa', "Detail in Arab")) !!}
								{!! Form::textarea('detail_sa', ((isset($donation->detail_sa))? $donation->detail_sa : '' ), ['class' => 'form-control my-editor','id' => 'detail_sa','placeholder' => 'detail in arab']) !!}
								{!! $errors->first('detail_sa', '<span class="help-block">:message</span>') !!}
							</div>
						</div>
					@endslot
				@endcomponent
			
			</div>
			{{-- / .row --}}


    </div>
    <!-- ./box-body -->

    <div class="box-footer no-border text-center">
			@include('admin.components.submit')
    </div>
    <!-- ./box-body -->

		{!! Form::close() !!}

  </div>
	<!-- /.box -->
	
	
@endsection

@section('js')
<script src="{{ asset('admin_asset/js/jasny-bootstrap.min.js') }}"></script>
<script src="{{ asset('admin_asset/ckeditor/ckeditor.js') }}"></script>
	<script type="text/javascript">
		
	</script>
@endsection
