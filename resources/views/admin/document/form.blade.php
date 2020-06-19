<div class="row">
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('soft'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('soft', "Soft (PDF) <small>*</small>")) !!}
          <div class="fileinput fileinput-new input-group" data-provides="fileinput">
            <div class="form-control nbr" data-trigger="fileinput">
              <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename">{{ ((isset($document->soft))? $document->soft : '' ) }}</span>
            </div>
            <span class="input-group-addon btn-file btn btn-primary" style="border-radius: 0;">
              <span class="fileinput-new">{{ __('label.buttons.select') }}</span>
              <span class="fileinput-exists">{{ __('label.buttons.change') }}</span>
              {!! Form::file('soft', ['accept' => 'image/jpeg,image/png,application/pdf',((isset($document->soft))? '' : 'required' )]) !!}
            </span>
            <a href="#" class="input-group-addon fileinput-exists btn btn-danger" data-dismiss="fileinput">{{ __('label.buttons.remove') }}</a>
          </div>
          {!! $errors->first('soft', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
          <div class="form-group {!! (($errors->has('seo_keywords'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('name', "SEO Keywords <small>*</small>")) !!}
            {!! Form::text('seo_keywords', ((isset($document->seo_keywords))? $document->seo_keywords : '' ), ['class' => 'form-control ','placeholder' => 'seo keywords','required']) !!}
            {!! $errors->first('seo_keywords', '<span class="help-block">:message</span>') !!}
          </div>
      </div>
    </div> <!-- row -->
  </div>
  {{-- / .col --}}

  <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group {!! (($errors->has('description'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('name', "SEO Description <small>*</small>")) !!}
            {!! Form::textarea('seo_description', ((isset($document->seo_description))? $document->seo_description : '' ), ['class' => 'form-control ','style' => 'height: 108px;','placeholder' => 'seo description','required']) !!}
            {!! $errors->first('seo_description', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
      </div> <!-- row -->
  </div>
  {{-- / .col --}}
  
  <!-- Component Languages Table -->
  @component('admin.components.languageTab')
    @slot('tab_en')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_en'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_en', "Name in English <small>*</small>")) !!}
          {!! Form::text('name_en', ((isset($document))? $document->name_en : '' ), ['class' => 'form-control ','placeholder' => 'name en','required']) !!}
          {!! $errors->first('name_en', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
    @slot('tab_kh')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_kh'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_kh', "Name in Khmer")) !!}
          {!! Form::text('name_kh', ((isset($document))? $document->name_kh : '' ), ['class' => 'form-control ','placeholder' => 'name khmer']) !!}
          {!! $errors->first('name_kh', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      
    @endslot
    @slot('tab_my')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_my'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_my', "Name in Malay")) !!}
          {!! Form::text('name_my', ((isset($document))? $document->name_my : '' ), ['class' => 'form-control ','placeholder' => 'name malay']) !!}
          {!! $errors->first('name_my', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      
    @endslot
    @slot('tab_sa')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_sa'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_sa', "Name in Arab")) !!}
          {!! Form::text('name_sa', ((isset($document))? $document->name_sa : '' ), ['class' => 'form-control ','placeholder' => 'name arab']) !!}
          {!! $errors->first('name_sa', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      
    @endslot
  @endcomponent

</div>
{{-- / .row --}}
  