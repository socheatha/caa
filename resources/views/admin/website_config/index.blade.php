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
    		<div class="col-sm-6 col-md-5">
		      <div class="box-tools pull-right">
				<!-- Action Dropdown -->
				@component('admin.components.action')
					@slot('btnCreate')
						{{route('admin.website-config.create')}}
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
		<a href="#" data-toggle="modal" data-target="#_modal_basic_info"><h4>Basic Info <i class="fa fa-edit"></i></a></h4>
		<div class = "table-responsive">
			<table class="table table-bordered nowrap table-striped" width="100%">
				<thead>
					<tr>
						<th class="text-center">Logo</th>
						<th>Title</th>
						<th>Keywords</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th class="text-center" width="150px">
							<img class="img-thumbnail" width="100px" src="/{{!empty($config->logo)?$config->logo:''}}" alt="">
						</th>
						<td>
							EN: {{!empty($config->title_en)?$config->title_en:''}} <br>
							KH: {{!empty($config->title_kh)?$config->title_kh:''}} <br>
							MY: {{!empty($config->title_my)?$config->title_my:''}} <br>
							SA: {{!empty($config->title_sa)?$config->title_sa:''}} <br>
						</td>
						<td>{{!empty($config->keyword)?$config->keyword:''}}</td>
						<td>
							EN: {{!empty($config->description_en)?$config->description_en:''}}<br>
							KH: {{!empty($config->description_kh)?$config->description_kh:''}}<br>
							MY: {{!empty($config->description_my)?$config->description_my:''}}<br>
							SA: {{!empty($config->description_sa)?$config->description_sa:''}}<br>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="modal fade" id="_modal_basic_info" tabindex="-1" role="dialog" aria-labelledby="main_menuModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content" style="margin-top: 80px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						<h4 class="modal-title" id="main_menuModalLabel">Please input data becarefully</h4>
					</div>
					<div class="modal-body">
					{!! Form::open(['url' => route('admin.config.update', $config->id),'method' => 'patch','class' => 'mt-3','enctype'=>'multipart/form-data']) !!}
						<input type="hidden" value="{{!empty($config->id)?$config->id:''}}" name="id">
						<p><strong>Logo</strong></p>
						<img class="img-thumbnail" width="100%" src="/{{!empty($config->logo)?$config->logo:''}}" alt="">
						<div class="form-group">
							<input type="file" class="form-control" name="logo">
						</div>

						<div class="_container">
							@component('admin.components.languageTab',['unique_tab'=>'1'])
								@slot('tab_en')
									<div class="form-group">
										<label for="" class="form-label">Title En:</label>
										<input type="text" class="form-control" name="title_en" value="{{!empty($config->title_en)?$config->title_en:''}}">
									</div>
								@endslot
								@slot('tab_kh')
									<div class="form-group">
										<label for="" class="form-label">Title Kh:</label>
										<input type="text" class="form-control" name="title_kh" value="{{!empty($config->title_kh)?$config->title_kh:''}}">
									</div>
								@endslot
								@slot('tab_my')
									<div class="form-group">
										<label for="" class="form-label">Title My:</label>
										<input type="text" class="form-control" name="title_my" value="{{!empty($config->title_my)?$config->title_my:''}}">
									</div>
								@endslot
								@slot('tab_sa')
									<div class="form-group">
										<label for="" class="form-label">Title Sa:</label>
										<input type="text" class="form-control" name="title_sa" value="{{!empty($config->title_sa)?$config->title_sa:''}}">
									</div>
								@endslot
							@endcomponent
							<div class="clearfix"></div>
						</div>
						<br> 

						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
									<label for="" class="form-label">keywords:</label>
									<textarea type="color" class="form-control" rows="5" name="keyword">{{!empty($config->keyword)?$config->keyword:''}}</textarea>
								</div>
							</div>
						</div>

						<br>
						<!-- Component Languages Table -->
						<div class="_container">
							@component('admin.components.languageTab',['unique_tab'=>'2'])
								@slot('tab_en')
									<div class="form-group">
										<label for="" class="form-label">Description En:</label>
										<textarea type="text" class="form-control" rows="4" name="description_en">{{!empty($config->description_en)?$config->description_en:''}}</textarea>
									</div>
								@endslot
								@slot('tab_kh')
									<div class="form-group">
										<label for="" class="form-label">Description Kh:</label>
										<textarea type="text" class="form-control" rows="4" name="description_kh">{{!empty($config->description_kh)?$config->description_kh:''}}</textarea>
									</div>
								@endslot
								@slot('tab_my')
									<div class="form-group">
										<label for="" class="form-label">Description My:</label>
										<textarea type="text" class="form-control" rows="4" name="description_my">{{!empty($config->description_my)?$config->description_my:''}}</textarea>
									</div>
								@endslot
								@slot('tab_sa')
									<div class="form-group">
										<label for="" class="form-label">Description Sa:</label>
										<textarea type="text" class="form-control" rows="4" name="description_sa">{{!empty($config->description_sa)?$config->description_sa:''}}</textarea>
									</div>
								@endslot
							@endcomponent
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="box-footer text-center">
						@include('admin.components.submit')
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>


		<br>
		<br>
		<br>
		<br>
		<a  href="#" data-toggle="modal" data-target="#_modal_color_and_background"><h4>Color and Background <i class="fa fa-edit"></i></a></h4>
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<tr>
				<th width="5%">N&deg;</th>
				<th>Position</th>
				<th>Name</th>
				<th class="text-center">Color</th>
				<th>Description</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$color = '#444';
				?>
				<tr>
					<td class="text-center">1</td>
					<td>Header</td>
					<td>header bg</td>
					<td width="150px" style="color: #000A19;">
						<svg width="30" height="10">
							<rect width="30" height="10" style="fill:{{!empty($config->header_color)?$config->header_color:'#FFF'}};" />
						</svg>
						{{!empty($config->header_color)?$config->header_color:'default'}}
					</td>
					<td>background color at header</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Header</td>
					<td>menu active color</td>
					<td width="150px">
						<svg width="30" height="10">
							<rect width="30" height="10" style="fill:{{!empty($config->menu_active_color)?$config->menu_active_color:'#FFF'}};" />
						</svg>
						{{!empty($config->menu_active_color)?$config->menu_active_color:'default'}}
					</td>
					<td>text color at header when menu active</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Header+Body+Footer</td>
					<td>text color</td>
					<td width="150px">
						<svg width="30" height="10">
							<rect width="30" height="10" style="fill:{{!empty($config->text_color)?$config->text_color:''}};" />
						</svg>
						{{!empty($config->text_color)?$config->text_color:'default'}}
					</td>
					<td>tde color of text in website</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Body</td>
					<td>body bg</td>
					<td width="150px">
						<svg width="30" height="10">
							<rect width="30" height="10" style="fill:{{!empty($config->body_color)?$config->body_color:''}};" />
						</svg>
						{{!empty($config->body_color)?$config->body_color:'default'}}
					</td>
					<td>background color of body</td>
				</tr>
				<tr>
					<td>5</td>
					<td>Footer</td>
					<td>footer bg</td>
					<td width="150px">
						<svg width="30" height="10">
							<rect width="30" height="10" style="fill:{{!empty($config->footer_color)?$config->footer_color:''}};" />
						</svg>
						{{!empty($config->footer_color)?$config->footer_color:'default'}}
					</td>
					<td>background color of footer</td>
				</tr>
			</tbody>
		</table>
		<div class="modal fade" id="_modal_color_and_background" tabindex="-1" role="dialog" aria-labelledby="main_menuModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content" style="margin-top: 80px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						<h4 class="modal-title" id="main_menuModalLabel">Please input data becarefully</h4>
					</div>
					<div class="modal-body">
					{!! Form::open(['url' => route('admin.config.update', $config->id),'method' => 'patch','class' => 'mt-3','enctype'=>'multipart/form-data']) !!}
						<input type="hidden" value="{{!empty($config->id)?$config->id:''}}" name="id">
						<p><strong>Header</strong></p>
						<div class="row">
							<div class="col-xs-4">
								<div class="form-group">
									<label for="" class="form-label">header bg:</label>
									<input type="color" class="form-control" name="header_color" value="{{!empty($config->header_color)?$config->header_color:''}}">
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<label for="" class="form-label">menu active color:</label>
									<input type="color" class="form-control" name="menu_active_color" value="{{!empty($config->menu_active_color)?$config->menu_active_color:''}}">
								</div>
							</div>
						</div>

						<p><strong>Body</strong></p>
						<div class="row">
							<div class="col-xs-4">
								<div class="form-group">
									<label for="" class="form-label">body bg:</label>
									<input type="color" class="form-control" name="body_color" value="{{!empty($config->body_color)?$config->body_color:''}}">
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<label for="" class="form-label">text color:</label>
									<input type="color" class="form-control" name="text_color" value="{{!empty($config->text_color)? $config->text_color:''}}">
								</div>
							</div>
						</div>

						<p><strong>Footer</strong></p>
						<div class="row">
							<div class="col-xs-4">
								<div class="form-group">
									<label for="" class="form-label">footer bg</label>
									<input type="color" class="form-control" name="footer_color" value="{{!empty($config->fooer_color)? $config->fooer_color:''}}">
								</div>
							</div>
						</div>
						
					</div>
					<div class="box-footer text-center">
						@include('admin.components.submit')
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>

		<br>
		<br>
		<br>
		<br>
		<a href="#" data-toggle="modal" data-target="#_modal_text_and_label"><h4>Text and Label <i class="fa fa-edit"></i></a></h4>
		<table class="table table-bordered table-striped">
			<tbody>
				<tr>
					<th class="text-center">N&deg;</th>
					<th>Title</th>
					<th>Translate in En</th>
					<th>Translate in Kh</th>
					<th>Translate in My</th>
					<th>Translate in Sa</th>
					<th>Position</th>
					<th>Description</th>
				</tr>
				<tr>
					<td class="text-center">1</td>
					<th>welcome message</th>
					<td>33</td>
					<td>44</td>
					<td>55</td>
					<td>66</td>
					<td>---</td>
					<td>---</td>
				</tr>
				<tr>
					<td class="text-center">1</td>
					<th>map location</th>
					<td>33</td>
					<td>44</td>
					<td>55</td>
					<td>66</td>
					<td>---</td>
					<td>---</td>
				</tr>
				<tr>
					<td class="text-center">1</td>
					<th>phone</th>
					<td>33</td>
					<td>44</td>
					<td>55</td>
					<td>66</td>
					<td>---</td>
					<td>---</td>
				</tr>
				<tr>
					<td class="text-center">1</td>
					<th>address</th>
					<td>33</td>
					<td>44</td>
					<td>55</td>
					<td>66</td>
					<td>---</td>
					<td>---</td>
				</tr>
				<tr>
					<td class="text-center">1</td>
					<th>copy right text</th>
					<td>33</td>
					<td>44</td>
					<td>55</td>
					<td>66</td>
					<td>---</td>
					<td>---</td>
				</tr>
				<tr>
					<th class="text-center">N&deg;</th>
					<th>Social Media</th>
					<th colspan="6">URL link</th>
				</tr>
				<tr>
					<td class="text-center">1</td>
					<th>email address</th>
					<td colspan="6">33</td>
				</tr>
				<tr>
					<td class="text-center">1</td>
					<th>facebook url</th>
					<td colspan="6">33</td>
				</tr>
				<tr>
					<td class="text-center">1</td>
					<th>tweeter url</th>
					<td colspan="6">33</td>
				</tr>
				<tr>
					<td class="text-center">1</td>
					<th>linkedin url</th>
					<td colspan="6">33</td>
				</tr>
			</tbody>
		</table>
		<div class="modal fade" id="_modal_text_and_label" tabindex="-1" role="dialog" aria-labelledby="main_menuModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content" style="margin-top: 80px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						<h4 class="modal-title" id="main_menuModalLabel">Please input data becarefully</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
									<label for="" class="form-label">email address:</label>
									<input type="text" class="form-control" rows="5"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="form-label">facebook url:</label>
									<input type="text" class="form-control" rows="5"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="form-label">map location:</label>
									<input type="text" class="form-control" rows="5"></textarea>
								</div>
							</div>
						</div>

						<br>
						<!-- Component Languages Table -->
						<div class="_container">
							@component('admin.components.languageTab',['unique_tab'=>'3'])
								@slot('tab_en')
									<div class="form-group">
										<label for="" class="form-label">welcome message En:</label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label for="" class="form-label">phone En:</label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label for="" class="form-label">address En:</label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label for="" class="form-label">copy right text En:</label>
										<input type="text" class="form-control" />
									</div>
								@endslot
								@slot('tab_kh')
									<div class="form-group">
										<label for="" class="form-label">welcome message Kh:</label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label for="" class="form-label">phone Kh:</label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label for="" class="form-label">address Kh:</label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label for="" class="form-label">copy right text Kh:</label>
										<input type="text" class="form-control" />
									</div>
								@endslot
								@slot('tab_my')
									<div class="form-group">
										<label for="" class="form-label">welcome message My:</label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label for="" class="form-label">phone My:</label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label for="" class="form-label">address My:</label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label for="" class="form-label">copy right text My:</label>
										<input type="text" class="form-control" />
									</div>
								@endslot
								@slot('tab_sa')
									<div class="form-group">
										<label for="" class="form-label">welcome message Sa:</label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label for="" class="form-label">phone Sa:</label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label for="" class="form-label">address Sa:</label>
										<input type="text" class="form-control" />
									</div>
									<div class="form-group">
										<label for="" class="form-label">copy right text Sa:</label>
										<input type="text" class="form-control" />
									</div>
								@endslot
							@endcomponent
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('alert.swal.button.no') }}</button>
						<button type="button" class="btn btn btn-success" id="update_lang_main_menu">{{ __('alert.swal.button.yes') }}</button>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- ./box-body -->
</div>
<!-- /.box -->

@endsection

@section('js')
	<style>
		._container{
			border: 1px solid purple;
		}
		.nowrap *{
			white-space: nowrap;
		}
	</style>
	<script type="text/javascript">


	</script>
@endsection
