<div class="row">
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('url'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('url', "URL <small>*</small>")) !!}
          {!! Form::text('url', ((isset($partner->url))? $partner->url : '' ), ['class' => 'form-control ','placeholder' => 'url','required']) !!}
          {!! $errors->first('url', '<span class="help-block">:message</span>') !!}
        </div>
      </div>

      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('thumbnail'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('thumbnail', "Thumbnail (500px x 500px) <small>*</small>")) !!}
          <div class="fileinput fileinput-new input-group" data-provides="fileinput">
            <div class="form-control nbr" data-trigger="fileinput">
            <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename">{{ ((isset($partner->thumbnail))? $partner->thumbnail : '' ) }}</span>
            </div>
            <span class="input-group-addon btn-file btn btn-primary" style="border-radius: 0;">
              <span class="fileinput-new">{{ __('label.buttons.select') }}</span>
              <span class="fileinput-exists">{{ __('label.buttons.change') }}</span>
              {!! Form::file('thumbnail', ['accept' => 'image/jpeg,image/png', ((isset($partner->thumbnail))? $partner->thumbnail : 'required' )]) !!}
            </span>
            <a href="#" class="input-group-addon fileinput-exists btn btn-danger" data-dismiss="fileinput">{{ __('label.buttons.remove') }}</a>
          </div>
          {!! $errors->first('thumbnail', '<span class="help-block">:message</span>') !!}
        </div>
      </div>

    </div>
  </div>
  {{-- / .col --}}

  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-9">
        <div class="form-group {!! (($errors->has('index'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('index', "Index <small>*</small>")) !!}
          {!! Form::text('index', ((isset($partner->index))? $partner->index : $index ), ['class' => 'form-control ','placeholder' => 'index','required']) !!}
          {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group text-center">
          {!! Html::decode(Form::label('status', "Status")) !!}
          <div class="togglebutton mt-4">
            <label>
              {!! Form::checkbox('status',((isset($partner->status))? $partner->status : 1 ), ((isset($partner->status))? (($partner->status==1)? true : false) : true) )  !!}
              <span class="toggle toggle-success"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- / .col --}}

</div>
{{-- / .row --}}
  