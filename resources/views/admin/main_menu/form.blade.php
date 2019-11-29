
  <div class="row">

    <div class="col-sm-6">
      <div class="form-group {!! (($errors->has('name'))? 'has-error':'') !!}">
        {!! Html::decode(Form::label('name', __('label.form.main-menu.name')." <small>*</small>")) !!}
        {!! Form::text('name', ((isset($main_menu->name))? $main_menu->name : '' ), ['class' => 'form-control ','placeholder' => 'name','required']) !!}
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
      </div>
    </div>
    {{-- / .col --}}

    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group {!! (($errors->has('url'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('name', __('label.form.main-menu.url')." <small>*</small>")) !!}
            {!! Form::text('url', ((isset($main_menu->url))? $main_menu->url : '' ), ['class' => 'form-control ','placeholder' => 'url','required']) !!}
            {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group {!! (($errors->has('index'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('name', __('label.form.main-menu.index')." <small>*</small>")) !!}
            {!! Form::text('index', ((isset($main_menu->index))? $main_menu->index : '' ), ['class' => 'form-control ','placeholder' => 'index','required']) !!}
            {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group text-center">
            {!! Html::decode(Form::label('status', __('label.form.main-menu.status'))) !!}
            <div class="togglebutton mt-4">
              <label>
                {!! Form::checkbox('status',((isset($main_menu->status))? $main_menu->status : 1 ), ((isset($main_menu->status) && $main_menu->status==1)? true : false)) !!}
                <span class="toggle toggle-success"></span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- / .col --}}

    {{-- <div class="col-sm-12">
      <div class="form-group {!! (($errors->has('description'))? 'has-error':'') !!}">
        {!! Html::decode(Form::label('name', __('label.form.main-menu.description'))) !!}
        {!! Form::textarea('description', ((isset($main_menu->description))? $main_menu->description : '' ), ['class' => 'form-control ','placeholder' => 'description']) !!}
        {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
      </div>
    </div> --}}
    {{-- / .col --}}


  </div>
  {{-- / .row --}}
  