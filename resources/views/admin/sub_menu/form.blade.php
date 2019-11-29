
  <div class="row">

    <div class="col-sm-6">
      <div class="form-group {!! (($errors->has('name'))? 'has-error':'') !!}">
        {!! Html::decode(Form::label('name', __('label.form.sub-menu.name')." <small>*</small>")) !!}
        {!! Form::text('name', ((isset($sub_menu->name))? $sub_menu->name : '' ), ['class' => 'form-control ','placeholder' => 'khmer name','required']) !!}
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
      </div>
      <div class="form-group {!! (($errors->has('name_en'))? 'has-error':'') !!}">
        {!! Html::decode(Form::label('name', __('label.form.sub-menu.name_en')." <small>*</small>")) !!}
        {!! Form::text('name_en', ((isset($sub_menu->name_en))? $sub_menu->name_en : '' ), ['class' => 'form-control ','placeholder' => 'english name','required']) !!}
        {!! $errors->first('name_en', '<span class="help-block">:message</span>') !!}
      </div>
    </div>
    {{-- / .col --}}

    <div class="col-sm-6">
      <div class="form-group {!! (($errors->has('description'))? 'has-error':'') !!}">
        {!! Html::decode(Form::label('name', __('label.form.sub-menu.description'))) !!}
        {!! Form::textarea('description', ((isset($sub_menu->description))? $sub_menu->description : '' ), ['class' => 'form-control ','placeholder' => 'description','style' => 'height: 108px;']) !!}
        {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
      </div>
    </div>
    {{-- / .col --}}

  </div>
  {{-- / .row --}}
  