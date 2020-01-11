<div class="row">

  <div class="col-sm-6">
    <div class="form-group {!! (($errors->has('name'))? 'has-error':'') !!}">
      {!! Html::decode(Form::label('name', __('label.form.user.name')." <small>*</small>")) !!}
      {!! Form::text('name', ((isset($user->name))? $user->name : '' ), ['class' => 'form-control ','placeholder' =>
      'name','required']) !!}
      {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group {!! (($errors->has('gender'))? 'has-error':'') !!}">
      {!! Html::decode(Form::label('gender', __('label.form.user.gender')." <small>*</small>")) !!}
      {!! Form::select('gender', ['1'=>__('label.form.male'),'2'=>__('label.form.female'),'3'=>__('label.form.other')],
      ((isset($user->gender))? $user->gender : '' ), ['class' => 'form-control select2','placeholder' =>
      __('label.form.choose'),'required']) !!}
      {!! $errors->first('gender', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group {!! (($errors->has('phone'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('phone', __('label.form.user.phone'))) !!}
          {!! Form::text('phone', ((isset($user->phone))? $user->phone : '' ), ['class' => 'form-control ','placeholder'
          => 'phone']) !!}
          {!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    </div>
  </div>
  {{-- / .col --}}

  <div class="col-sm-6">
    <div class="form-group {!! (($errors->has('email'))? 'has-error':'') !!}">
      {!! Html::decode(Form::label('email', __('label.form.user.email')." <small>*</small>")) !!}
      {!! Form::email('email', ((isset($user->email))? $user->email : '' ), ['class' => 'form-control ','placeholder' =>
      'email','required']) !!}
      {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group {!! (($errors->has('password'))? 'has-error':'') !!}">
      {!! Html::decode(Form::label('password', __('label.form.user.password')." <small>*</small>")) !!}
      {!! Form::password('password', ['class' => 'form-control ','placeholder' => 'password','id' =>
      'password','required']) !!}
      {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group {!! (($errors->has('password_confirmation'))? 'has-error':'') !!}">
      {!! Html::decode(Form::label('password-confirm', __('label.form.user.password_confirmation')." <small>*</small>"))
      !!}
      {!! Form::password('password_confirmation', ['class' => 'form-control ','placeholder' => 'password-confirm','id'
      => 'password-confirm','required']) !!}
      {!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
    </div>
  </div>
  {{-- / .col --}}

</div>
{{-- / .row --}}