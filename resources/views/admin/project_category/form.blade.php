<div class="row">
  <div class="col-sm-6">

    <div class="form-group {!! (($errors->has('index'))? 'has-error':'') !!}">
      {!! Html::decode(Form::label('name', "Index <small>*</small>")) !!}
      {!! Form::text('index', ((isset($projectCategory->index))? $projectCategory->index : $index ), ['class' => 'form-control ','placeholder' => 'index','required']) !!}
      {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
    </div>
  

    <div class="row">
      <div class="col-sm-9">
        <div class="form-group {!! (($errors->has('seo_keywords'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name', "SEO Keywords")) !!}
          {!! Form::text('seo_keywords', ((isset($projectCategory->seo_keywords))? $projectCategory->seo_keywords : '' ), ['class' => 'form-control ','placeholder' => 'seo keywords','required']) !!}
          {!! $errors->first('seo_keywords', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group {!! (($errors->has('index'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name', "Index <small>*</small>")) !!}
          {!! Form::input('color','color', '', ['class' => 'form-control ','placeholder' => 'index','required']) !!}
          {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    </div>
  </div>
  {{-- / .col --}}

  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('description'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name', __('label.form.role.description')." <small>*</small>")) !!}
          {!! Form::textarea('description', ((isset($role->description))? $role->description : '' ), ['class' => 'form-control ','style' => 'height: 108px;','placeholder' => 'english name','required']) !!}
          {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    </div>
  </div>
  {{-- / .col --}}
  
  <!-- Component Languages Table -->
  @component('admin.components.languageTab')
    @slot('tab_en')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_en'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_en', "Name in English <small>*</small>")) !!}
          {!! Form::text('name_en', ((isset($projectCategory))? $projectCategory->name_en : '' ), ['class' => 'form-control ','placeholder' => 'name en','required']) !!}
          {!! $errors->first('name_en', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
    @slot('tab_kh')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_kh'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_kh', "Name in Khmer")) !!}
          {!! Form::text('name_kh', ((isset($projectCategory))? $projectCategory->name_kh : '' ), ['class' => 'form-control ','placeholder' => 'name kh']) !!}
          {!! $errors->first('name_kh', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
    @slot('tab_my')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_my'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_my', "Name in Malay")) !!}
          {!! Form::text('name_my', ((isset($projectCategory))? $projectCategory->name_my : '' ), ['class' => 'form-control ','placeholder' => 'name my']) !!}
          {!! $errors->first('name_my', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
    @slot('tab_sa')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_sa'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_sa', "Name in Arab")) !!}
          {!! Form::text('name_sa', ((isset($projectCategory))? $projectCategory->name_sa : '' ), ['class' => 'form-control ','placeholder' => 'name sa']) !!}
          {!! $errors->first('name_sa', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
  @endcomponent

</div>
{{-- / .row --}}
  