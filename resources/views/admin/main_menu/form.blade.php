
  <div class="row">

    <div class="col-sm-6">
      <div class="form-group {!! (($errors->has('name'))? 'has-error':'') !!}">
        {!! Html::decode(Form::label('name', __('label.form.main-menu.name')." <small>*</small>")) !!}
        {!! Form::text('name', ((isset($mainMenu))? $mainMenu->translation($lang)->name : '' ), ['class' => 'form-control ','placeholder' => 'name','required']) !!}
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
      </div>
    </div>
    {{-- / .col --}}

    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group {!! (($errors->has('url'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('name', __('label.form.main-menu.url')." <small>*</small>")) !!}
            {!! Form::text('url', ((isset($mainMenu->url))? $mainMenu->url : '' ), ['class' => 'form-control ','placeholder' => 'url','required']) !!}
            {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group {!! (($errors->has('index'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('name', __('label.form.main-menu.index')." <small>*</small>")) !!}
            {!! Form::text('index', ((isset($mainMenu->index))? $mainMenu->index : '' ), ['class' => 'form-control ','placeholder' => 'index','required']) !!}
            {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
        <div class="col-sm-3">
          <div class="form-group text-center">
            {!! Html::decode(Form::label('status', __('label.form.main-menu.status'))) !!}
            <div class="togglebutton mt-4">
              <label>
                {!! Form::checkbox('status',((isset($mainMenu->status))? $mainMenu->status : 1 ), ((isset($mainMenu->status))? (($mainMenu->status==1)? true : false) : true) )  !!}
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
        {!! Form::textarea('description', ((isset($mainMenu->description))? $mainMenu->description : '' ), ['class' => 'form-control ','placeholder' => 'description']) !!}
        {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
      </div>
    </div> --}}
    {{-- / .col --}}


  </div>
  {{-- / .row --}}
  