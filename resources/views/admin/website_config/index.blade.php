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
				{{--@component('admin.components.action')
					@slot('btnCreate')
						{{route('admin.website-config.create')}}
					@endslot
				@endcomponent--}}
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
			<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#_modal_basic_info">Basic Info <i class="fa fa-edit"></i></a>
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
			</div><!-- table-responsive -->
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
			</div><!-- modal basic info -->
<!-- End of block logo -->

			<br>
			<br>
			<a  href="#" class="btn btn-primary" data-toggle="modal" data-target="#_modal_color_and_background">Color and Background <i class="fa fa-edit"></i></a>
			<div class = "table-responsive">
				<table class="table table-bordered table-hover table-striped" width="100%">
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
									<rect width="30" height="10" style="fill:{{!empty($config->header_color)?$config->header_color:'none'}};" />
								</svg>
								{{!empty($config->header_color)?$config->header_color:'default'}}
							</td>
							<td>background color at header</td>
						</tr>
						<tr>
							<td class="text-center">2</td>
							<td>Header</td>
							<td>menu active color</td>
							<td width="150px">
								<svg width="30" height="10">
									<rect width="30" height="10" style="fill:{{!empty($config->menu_active_color)?$config->menu_active_color:'none'}};" />
								</svg>
								{{!empty($config->menu_active_color)?$config->menu_active_color:'default'}}
							</td>
							<td>text color at header when menu active</td>
						</tr>
						<tr>
							<td class="text-center">3</td>
							<td>Header+Body+Footer</td>
							<td>text color</td>
							<td width="150px">
								<svg width="30" height="10">
									<rect width="30" height="10" style="fill:{{!empty($config->text_color)?$config->text_color:'none'}};" />
								</svg>
								{{!empty($config->text_color)?$config->text_color:'default'}}
							</td>
							<td>tde color of text in website</td>
						</tr>
						<tr>
							<td class="text-center">4</td>
							<td>Body</td>
							<td>body bg</td>
							<td width="150px">
								<svg width="30" height="10">
									<rect width="30" height="10" style="fill:{{!empty($config->body_color)?$config->body_color:'none'}};" />
								</svg>
								{{!empty($config->body_color)?$config->body_color:'default'}}
							</td>
							<td>background color of body</td>
						</tr>
						<tr>
							<td class="text-center">5</td>
							<td>Footer</td>
							<td>footer bg</td>
							<td width="150px">
								<svg width="30" height="10">
									<rect width="30" height="10" style="fill:{{!empty($config->footer_color)?$config->footer_color:'none'}};" />
								</svg>
								{{!empty($config->footer_color)?$config->footer_color:'default'}}
							</td>
							<td>background color of footer</td>
						</tr>
					</tbody>
				</table>
			</div>
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
										<input type="color" class="form-control" name="footer_color" value="{{!empty($config->footer_color)? $config->footer_color:''}}">
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
<!-- end of block color -->

			<br>
			<br>
			<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#_modal_text_and_label">Text and Label <i class="fa fa-edit"></i></a>
			<div class = "table-responsive">
				<table class="table table-bordered table-striped" width="100%">
					<tbody>
						<tr>
							<th class="text-center">N&deg;</th>
							<th width="150px">Title</th>
							<th>Translate in En</th>
							<th>Translate in Kh</th>
							<th>Translate in My</th>
							<th>Translate in Sa</th>
						</tr>
						<tr>
							<td class="text-center">1</td>
							<th>welcome title</th>
							<td>{{!empty($config->welcome_title_en)? $config->welcome_title_en:'---'}}</td>
							<td>{{!empty($config->welcome_title_kh)? $config->welcome_title_kh:'---'}}</td>
							<td>{{!empty($config->welcome_title_my)? $config->welcome_title_my:'---'}}</td>
							<td>{{!empty($config->welcome_title_sa)? $config->welcome_title_sa:'---'}}</td>
						</tr>
						<tr>
							<td class="text-center">1</td>
							<th>welcome message</th>
							<td>{{!empty($config->welcome_message_en)? $config->welcome_message_en:'---'}}</td>
							<td>{{!empty($config->welcome_message_kh)? $config->welcome_message_kh:'---'}}</td>
							<td>{{!empty($config->welcome_message_my)? $config->welcome_message_my:'---'}}</td>
							<td>{{!empty($config->welcome_message_sa)? $config->welcome_message_sa:'---'}}</td>
						</tr>
						<tr>
							<td class="text-center">2</td>
							<th>phone</th>
							<td>{{!empty($config->phone_en)? $config->phone_en:'---'}}</td>
							<td>{{!empty($config->phone_kh)? $config->phone_kh:'---'}}</td>
							<td>{{!empty($config->phone_my)? $config->phone_my:'---'}}</td>
							<td>{{!empty($config->phone_sa)? $config->phone_sa:'---'}}</td>
						</tr>
						<tr>
							<td class="text-center">3</td>
							<th>address</th>
							<td>{{!empty($config->address_en)? $config->address_en:'---'}}</td>
							<td>{{!empty($config->address_kh)? $config->address_kh:'---'}}</td>
							<td>{{!empty($config->address_my)? $config->address_my:'---'}}</td>
							<td>{{!empty($config->address_sa)? $config->address_sa:'---'}}</td>
						</tr>
						<tr>
							<td class="text-center">4</td>
							<th>copy right text</th>
							<td>{{!empty($config->copyright_en)? $config->copyright_en:'---'}}</td>
							<td>{{!empty($config->copyright_kh)? $config->copyright_kh:'---'}}</td>
							<td>{{!empty($config->copyright_my)? $config->copyright_my:'---'}}</td>
							<td>{{!empty($config->copyright_sa)? $config->copyright_sa:'---'}}</td>
						</tr>
						<tr>
							<td class="text-center">5</td>
							<th>Map Location</th>
							<td colspan="4">
								<div style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 350px;">{{!empty($config->map_location)? $config->map_location:'---'}}</div>
							</td>
						</tr>
						<tr>
							<td class="text-center">6</td>
							<th>email address</th>
							<td colspan="4">{{!empty($config->email)? $config->email:'---'}}</td>
						</tr>
						<tr>
							<td class="text-center">7</td>
							<th>facebook url</th>
							<td colspan="4">{{!empty($config->fb_url)? $config->fb_url:'---'}}</td>
						</tr>
						<tr>
							<td class="text-center">8</td>
							<th>instagram url</th>
							<td colspan="4">{{!empty($config->instagram_url)? $config->instagram_url:'---'}}</td>
						</tr>
						<tr>
							<td class="text-center">9</td>
							<th>tweeter url</th>
							<td colspan="4">{{!empty($config->tw_url)? $config->tw_url:'---'}}</td>
						</tr>
						<tr>
							<td class="text-center">10</td>
							<th>linkedin url</th>
							<td colspan="4">{{!empty($config->linkedin_url)? $config->linkedin_url:'---'}}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="modal fade" id="_modal_text_and_label" tabindex="-1" role="dialog" aria-labelledby="main_menuModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content" style="margin-top: 80px;">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
							<h4 class="modal-title" id="main_menuModalLabel">Please input data becarefully</h4>
						</div>
						<div class="modal-body">
							{!! Form::open(['url' => route('admin.config.update', $config->id),'method' => 'patch','class' => 'mt-3','enctype'=>'multipart/form-data']) !!}
							<input type="hidden" value="{{!empty($config->id)?$config->id:''}}" name="id">
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<label for="" class="form-label">email address:</label>
										<input type="text" class="form-control" rows="5" name="email" value="{{!empty($config->email)? $config->email:''}}">
									</div>
									<div class="form-group">
										<label for="" class="form-label">facebook url:</label>
										<input type="text" class="form-control" rows="5" name="fb_url" value="{{!empty($config->fb_url)? $config->fb_url:''}}">
									</div>
									<div class="form-group">
										<label for="" class="form-label">instagram url:</label>
										<input type="text" class="form-control" rows="5" name="instagram_url" value="{{!empty($config->instagram_url)? $config->instagram_url:''}}">
									</div>
									<div class="form-group">
										<label for="" class="form-label">tweeter url:</label>
										<input type="text" class="form-control" rows="5" name="tw_url" value="{{!empty($config->tw_url)? $config->tw_url:''}}">
									</div>
									<div class="form-group">
										<label for="" class="form-label">linkedin url:</label>
										<input type="text" class="form-control" rows="5" name="linkedin_url" value="{{!empty($config->linkedin_url)? $config->linkedin_url:''}}">
									</div>
									<div class="form-group">
										<label for="" class="form-label">map location:</label>
										<input type="text" class="form-control" rows="5" name="map_location" value="{{!empty($config->map_location)? $config->map_location:''}}">
									</div>
								</div>
							</div>

							<br>
							<!-- Component Languages Table -->
							<div class="_container">
								@component('admin.components.languageTab',['unique_tab'=>'3'])
									@slot('tab_en')
										<div class="form-group">
											<label for="" class="form-label">welcome Title En:</label>
											<input type="text" class="form-control" name="welcome_title_en" value="{{!empty($config->welcome_title_en)? $config->welcome_title_en:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">welcome message En:</label>
											<input type="text" class="form-control" name="welcome_message_en" value="{{!empty($config->welcome_message_en)? $config->welcome_message_en:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">phone En:</label>
											<input type="text" class="form-control" name="phone_en" value="{{!empty($config->phone_en)? $config->phone_en:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">address En:</label>
											<input type="text" class="form-control" name="address_en" value="{{!empty($config->address_en)? $config->address_en:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">copy right text En:</label>
											<input type="text" class="form-control" name="copyright_en" value="{{!empty($config->copyright_en)? $config->copyright_en:''}}" />
										</div>
									@endslot
									@slot('tab_kh')
										<div class="form-group">
											<label for="" class="form-label">welcome Title Kh:</label>
											<input type="text" class="form-control" name="welcome_title_kh" value="{{!empty($config->welcome_title_kh)? $config->welcome_title_kh:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">welcome message Kh:</label>
											<input type="text" class="form-control" name="welcome_message_kh" value="{{!empty($config->welcome_message_kh)? $config->welcome_message_kh:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">phone Kh:</label>
											<input type="text" class="form-control" name="phone_kh" value="{{!empty($config->phone_kh)? $config->phone_kh:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">address Kh:</label>
											<input type="text" class="form-control" name="address_kh" value="{{!empty($config->address_kh)? $config->address_kh:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">copy right text Kh:</label>
											<input type="text" class="form-control" name="copyright_kh" value="{{!empty($config->copyright_kh)? $config->copyright_kh:''}}" />
										</div>
									@endslot
									@slot('tab_my')
										<div class="form-group">
											<label for="" class="form-label">welcome Title My:</label>
											<input type="text" class="form-control" name="welcome_title_my" value="{{!empty($config->welcome_title_my)? $config->welcome_title_my:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">welcome message My:</label>
											<input type="text" class="form-control" name="welcome_message_my" value="{{!empty($config->welcome_message_my)? $config->welcome_message_my:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">phone My:</label>
											<input type="text" class="form-control" name="phone_my" value="{{!empty($config->phone_my)? $config->phone_my:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">address My:</label>
											<input type="text" class="form-control" name="address_my" value="{{!empty($config->address_my)? $config->address_my:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">copy right text My:</label>
											<input type="text" class="form-control" name="copyright_my" value="{{!empty($config->copyright_my)? $config->copyright_my:''}}" />
										</div>
									@endslot
									@slot('tab_sa')
										<div class="form-group">
											<label for="" class="form-label">welcome Title Sa:</label>
											<input type="text" class="form-control" name="welcome_title_sa" value="{{!empty($config->welcome_title_sa)? $config->welcome_title_sa:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">welcome message Sa:</label>
											<input type="text" class="form-control" name="welcome_message_sa" value="{{!empty($config->welcome_message_sa)? $config->welcome_message_sa:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">phone Sa:</label>
											<input type="text" class="form-control" name="phone_sa" value="{{!empty($config->phone_sa)? $config->phone_sa:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">address Sa:</label>
											<input type="text" class="form-control" name="address_sa" value="{{!empty($config->address_sa)? $config->address_sa:''}}" />
										</div>
										<div class="form-group">
											<label for="" class="form-label">copy right text Sa:</label>
											<input type="text" class="form-control" name="copyright_sa" value="{{!empty($config->copyright_sa)? $config->copyright_sa:''}}" />
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
				<!-- end of modal address -->

				<br>
				<br>
				{{-- <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#_modal_languages">Languages <i class="fa fa-edit"></i></a>
				<table class="table table-bordered nowrap table-striped" width="100%">
					<thead>
						<tr>
							<th>English</th>
							<th>Khmer</th>
							<th>Malaysia</th>
							<th>Arab</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{!empty($config->language_en)?$config->language_en:''}}</td>
							<td>{{!empty($config->language_kh)?$config->language_kh:''}}</td>
							<td>{{!empty($config->language_my)?$config->language_my:''}}</td>
							<td>{{!empty($config->language_sa)?$config->language_sa:''}}</td>
						</tr>
					</tbody>
				</table>
				<div class="modal fade" id="_modal_languages" tabindex="-1" role="dialog" aria-labelledby="main_menuModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content" style="margin-top: 80px;">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
								<h4 class="modal-title" id="main_menuModalLabel">Please input data becarefully</h4>
							</div>
							<div class="modal-body">
							{!! Form::open(['url' => route('admin.config.update', $config->id),'method' => 'patch','class' => 'mt-3','enctype'=>'multipart/form-data']) !!}
								<input type="hidden" value="{{!empty($config->id)?$config->id:''}}" name="id">
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<label for="" class="form-label">English Language</label>
											<input type="text" class="form-control" rows="5" name="language_en" value="{{!empty($config->language_en)? $config->language_en:''}}">
										</div>
										<div class="form-group">
											<label for="" class="form-label">Khmer Language</label>
											<input type="text" class="form-control" rows="5" name="language_kh" value="{{!empty($config->language_kh)? $config->language_kh:''}}">
										</div>
										<div class="form-group">
											<label for="" class="form-label">Malaysia Language</label>
											<input type="text" class="form-control" rows="5" name="language_my" value="{{!empty($config->language_my)? $config->language_my:''}}">
										</div>
										<div class="form-group">
											<label for="" class="form-label">Arab Language</label>
											<input type="text" class="form-control" rows="5" name="language_sa" value="{{!empty($config->language_sa)? $config->language_sa:''}}">
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
				</div><!-- modal languages --> --}}

				<br>
				<br>
				
				<button class="btn btn-primary btnImage" data-url="{{ route('admin.config.sidebar_right', $config->id) }}" data-src="{{ $config->sidebar_right }}" data-id="{{ $config->id }}">Edit Sidebar Image <i class="fa fa-edit"></i> </button>
				<table class="table table-bordered nowrap table-striped" width="100%">
					<tbody>
						<tr>
							<th width="250px">
								{!! ((isset($config->sidebar_right))? $config->sidebar_right : '' ) !!}
								{{-- <img class="img-thumbnail" width="100px" src="/images/sidebar_right/{{ $config->id }}/sidebar_img_{{ $config->sidebar_right }}" alt=""> --}}
							</th>
						</tr>
					</tbody>
				</table>
				<div class="modal fade" id="SidebarImageModal" tabindex="-1" role="dialog" aria-labelledby="SidebarImageModalLabel">
					<div class="modal-dialog" role="document" style="margin-top: 50px;">
						<div class="modal-content">
							<div class="modal-header">
						  		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
						  		<h4 class="modal-title" id="SidebarImageModalLabel">Change Sidebar Right</h4>
							</div>
							
							{!! Form::open(['url' => '','method' => 'post', 'enctype'=>'multipart/form-data','class' => 'mt-3','id' => 'imageForm']) !!}
							{!! Form::hidden('_method', 'PUT') !!}
							<div class="col-sm-12">
								<div class="form-group {!! (($errors->has('sidebar_right'))? 'has-error':'') !!}">
									{!! Html::decode(Form::label('sidebar_right', "Sidebar Right")) !!}
									{!! Form::textarea('sidebar_right', ((isset($config->sidebar_right))? $config->sidebar_right : '' ), ['class' => 'form-control my-editor','id' => 'sidebar_right','placeholder' => 'sidebar right']) !!}
									{!! $errors->first('sidebar_right', '<span class="help-block">:message</span>') !!}
								</div>
							</div>



								<!-- <div class="modal-body text-center">
									<div class="fileinput fileinput-new" data-provides="fileinput" style="max-width: 100%;">
										<div class="fileinput-new thumbnail" style="width: 100%; height: auto;">
											<img id="sidebar_Img" data-src="" src="" alt="...">
										</div>
										<div>
											<span class="btn btn-primary btn-file mt-2">
												<span class="fileinput-new">Select image</span>
												<span class="fileinput-exists">Change</span><input type="file" name="sidebar_right">
											</span>
											<a href="#" class="btn btn-warning fileinput-exists mt-2" data-dismiss="fileinput">Remove</a>
										</div>
									</div>
								</div> -->
								<div class="modal-footer">
									@include('admin.components.submit')
								</div>

							{!! Form::close() !!}
							
						</div>
					</div>
				</div>
	<!-- End of block logo -->

   </div><!-- ./box-body -->
</div><!-- /.box -->

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
		<script src="{{ asset('admin_asset/js/jasny-bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin_asset/ckeditor/ckeditor.js') }}"></script>
	<script type="text/javascript">
		$('.btnImage').click(function () {

				$('#sidebar_Img').attr({
					"data-src": "/images/sidebar_right/"+ $(this).data('id') + "/sidebar_img_"+ $(this).data('src'),
					"src": "/images/sidebar_right/"+ $(this).data('id') + "/sidebar_img_"+ $(this).data('src')
				});

				$('#imageForm').attr('action',$(this).data('url'));

				$('#SidebarImageModal').modal();
			});

	</script>
@endsection
