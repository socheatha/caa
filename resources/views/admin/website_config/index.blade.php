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
						{{route('admin.main-menu.create')}}
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
						<th  class="text-center">Logo</th>
						<th>Title</th>
						<th>Keywords</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th  class="text-center">
							<img class="img-thumbnail" width="100px" src="data:image/jpeg;base64,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" alt="">
						</th>
						<td>
							EN: Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
							KH: Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
							MY: Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
							SA: Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
						</td>
						<td>Lorem, ipsum, dolor, sit, amet, consectetur, adipisicing, elit.</td>
						<td>
							EN: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione reiciendis quis ullam, numquam placeat sed, veniam vitae animi quasi, debitis est excepturi praesentium! Officia sed alias possimus facilis doloribus molestiae?<br>
							KH: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione reiciendis quis ullam, numquam placeat sed, veniam vitae animi quasi, debitis est excepturi praesentium! Officia sed alias possimus facilis doloribus molestiae?<br>
							MY: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione reiciendis quis ullam, numquam placeat sed, veniam vitae animi quasi, debitis est excepturi praesentium! Officia sed alias possimus facilis doloribus molestiae?<br>
							SA: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione reiciendis quis ullam, numquam placeat sed, veniam vitae animi quasi, debitis est excepturi praesentium! Officia sed alias possimus facilis doloribus molestiae?<br>
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

						<p><strong>Logo</strong></p>
						<img class="img-thumbnail" width="100%" src="data:image/jpeg;base64,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" alt="">
						<div class="form-group">
							<input type="file" class="form-control">
						</div>

						<div class="_container">
							@component('admin.components.languageTab',['unique_tab'=>'1'])
								@slot('tab_en')
									<div class="form-group">
										<label for="" class="form-label">Title En:</label>
										<input type="text" class="form-control">
									</div>
								@endslot
								@slot('tab_kh')
									<div class="form-group">
										<label for="" class="form-label">Title Kh:</label>
										<input type="text" class="form-control">
									</div>
								@endslot
								@slot('tab_my')
									<div class="form-group">
										<label for="" class="form-label">Title My:</label>
										<input type="text" class="form-control">
									</div>
								@endslot
								@slot('tab_sa')
									<div class="form-group">
										<label for="" class="form-label">Title Sa:</label>
										<input type="text" class="form-control">
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
									<textarea type="color" class="form-control" rows="5"></textarea>
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
										<textarea type="text" class="form-control" rows="4"> </textarea>
									</div>
								@endslot
								@slot('tab_kh')
									<div class="form-group">
										<label for="" class="form-label">Description Kh:</label>
										<textarea type="text" class="form-control" rows="4"> </textarea>
									</div>
								@endslot
								@slot('tab_my')
									<div class="form-group">
										<label for="" class="form-label">Description My:</label>
										<textarea type="text" class="form-control" rows="4"> </textarea>
									</div>
								@endslot
								@slot('tab_sa')
									<div class="form-group">
										<label for="" class="form-label">Description Sa:</label>
										<textarea type="text" class="form-control" rows="4"> </textarea>
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
					<th class="text-center">1</th>
					<th>Header</th>
					<th>header bg</th>
					<th class="text-center" width="150px" style="background:{{ $color }}; color: #fff;">{{ $color }}</th>
					<th>background color at header</th>
				</tr>
				<tr>
					<th class="text-center">2</th>
					<th>Header</th>
					<th>menu active color</th>
					<th class="text-center" width="150px" style="background:{{ $color }}; color: #fff;">{{ $color }}</th>
					<th>text color at header when menu active</th>
				</tr>
				<tr>
					<th class="text-center">3</th>
					<th>Header+Body+Footer</th>
					<th>text color</th>
					<th class="text-center" width="150px" style="background:{{ $color }}; color: #fff;">{{ $color }}</th>
					<th>the color of text in website</th>
				</tr>
				<tr>
					<th class="text-center">4</th>
					<th>Body</th>
					<th>body bg</th>
					<th class="text-center" width="150px" style="background:{{ $color }}; color: #fff;">{{ $color }}</th>
					<th>background color of body</th>
				</tr>
				<tr>
					<th class="text-center">5</th>
					<th>Footer</th>
					<th>footer bg</th>
					<th class="text-center" width="150px" style="background:{{ $color }}; color: #fff;">{{ $color }}</th>
					<th>background color of footer</th>
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

						<p><strong>Header</strong></p>
						<div class="row">
							<div class="col-xs-4">
								<div class="form-group">
									<label for="" class="form-label">header bg:</label>
									<input type="color" class="form-control">
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<label for="" class="form-label">menu active color:</label>
									<input type="color" class="form-control">
								</div>
							</div>
						</div>

						<p><strong>Body</strong></p>
						<div class="row">
							<div class="col-xs-4">
								<div class="form-group">
									<label for="" class="form-label">body bg:</label>
									<input type="color" class="form-control">
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<label for="" class="form-label">text color:</label>
									<input type="color" class="form-control">
								</div>
							</div>
						</div>

						<p><strong>Footer</strong></p>
						<div class="row">
							<div class="col-xs-4">
								<div class="form-group">
									<label for="" class="form-label">footer bg</label>
									<input type="color" class="form-control">
								</div>
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('alert.swal.button.no') }}</button>
						<button type="button" class="btn btn btn-success" id="update_lang_main_menu">{{ __('alert.swal.button.yes') }}</button>
					</div>
				</div>
			</div>
		</div>

		<br>
		<br>
		<br>
		<br>
		<a href="#" data-toggle="modal" data-target="#_modal_text_and_label"><h4>Text and Label <i class="fa fa-edit"></i></a></h4>
		<table class="table table-bordered table-hover table-striped">
			<thead>
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
			</thead>
			<tbody>
				<tr>
					<th class="text-center">1</th>
					<th>welcome message</th>
					<th>33</th>
					<th>44</th>
					<th>55</th>
					<th>66</th>
					<th>---</th>
					<th>---</th>
				</tr>
				<tr>
					<th class="text-center">1</th>
					<th>email address</th>
					<th>33</th>
					<th>44</th>
					<th>55</th>
					<th>66</th>
					<th>---</th>
					<th>---</th>
				</tr>
				<tr>
					<th class="text-center">1</th>
					<th>facebook url</th>
					<th>33</th>
					<th>44</th>
					<th>55</th>
					<th>66</th>
					<th>---</th>
					<th>---</th>
				</tr>
				<tr>
					<th class="text-center">1</th>
					<th>map location</th>
					<th>33</th>
					<th>44</th>
					<th>55</th>
					<th>66</th>
					<th>---</th>
					<th>---</th>
				</tr>
				<tr>
					<th class="text-center">1</th>
					<th>phone</th>
					<th>33</th>
					<th>44</th>
					<th>55</th>
					<th>66</th>
					<th>---</th>
					<th>---</th>
				</tr>
				<tr>
					<th class="text-center">1</th>
					<th>address</th>
					<th>33</th>
					<th>44</th>
					<th>55</th>
					<th>66</th>
					<th>---</th>
					<th>---</th>
				</tr>
				<tr>
					<th class="text-center">1</th>
					<th>copy right text</th>
					<th>33</th>
					<th>44</th>
					<th>55</th>
					<th>66</th>
					<th>---</th>
					<th>---</th>
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
