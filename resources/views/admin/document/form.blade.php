<div class="row">
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-9">
        <div class="form-group {!! (($errors->has('seo_keywords'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name', "SEO Keywords <small>*</small>")) !!}
          {!! Form::text('seo_keywords', ((isset($document->seo_keywords))? $document->seo_keywords : '' ), ['class' => 'form-control ','placeholder' => 'seo keywords','required']) !!}
          {!! $errors->first('seo_keywords', '<span class="help-block">:message</span>') !!}
        </div>
      </div>

      
      @if (!isset($document))
        <div class="col-sm-12">
          <div class="form-group {!! (($errors->has('image'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('image', "image (1000px x 690px) <small>*</small>")) !!}
            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
              <div class="form-control nbr" data-trigger="fileinput">
                <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span>
              </div>
              <span class="input-group-addon btn-file btn btn-primary" style="border-radius: 0;">
                <span class="fileinput-new">{{ __('label.buttons.select') }}</span>
                <span class="fileinput-exists">{{ __('label.buttons.change') }}</span>
                {!! Form::file('image', ['accept' => 'image/jpeg,image/png','required']) !!}
              </span>
              <a href="#" class="input-group-addon fileinput-exists btn btn-danger" data-dismiss="fileinput">{{ __('label.buttons.remove') }}</a>
            </div>
            {!! $errors->first('image', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
      @endif

    </div>
  </div>
  {{-- / .col --}}

  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('description'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name', "SEO Description <small>*</small>")) !!}
          {!! Form::textarea('seo_description', ((isset($document->seo_description))? $document->seo_description : '' ), ['class' => 'form-control ','style' => ((!isset($document))? 'height: 108px;' : 'height: 33px;'),'placeholder' => 'seo description','required']) !!}
          {!! $errors->first('seo_description', '<span class="help-block">:message</span>') !!}
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
          {!! Form::text('name_en', ((isset($document))? $document->name_en : '' ), ['class' => 'form-control ','placeholder' => 'name en','required']) !!}
          {!! $errors->first('name_en', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('short_desc_en'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('short_desc_en', "Short Description in English <small>*</small>")) !!}
          {!! Form::textarea('short_desc_en', ((isset($document->short_desc_en))? $document->short_desc_en : '' ), ['class' => 'form-control ','rows' => '3','placeholder' => 'short description in english','required']) !!}
          {!! $errors->first('short_desc_en', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('detail_en'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('detail_en', "English Detail <small>*</small>")) !!}
          {!! Form::textarea('detail_en', ((isset($document->detail_en))? $document->detail_en : '' ), ['class' => 'form-control my-editor','id' => 'detail_en','placeholder' => 'detail in english','required']) !!}
          {!! $errors->first('detail_en', '<span class="help-block">:message</span>') !!}
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
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('description'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('short_desc_kh', "Short Description in Khmer")) !!}
          {!! Form::textarea('short_desc_kh', ((isset($document->short_desc_kh))? $document->short_desc_kh : '' ), ['class' => 'form-control ','rows' => '3','placeholder' => 'short description in khmer']) !!}
          {!! $errors->first('short_desc_kh', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('detail_kh'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('detail_kh', "Detail in Khmer")) !!}
          {!! Form::textarea('detail_kh', ((isset($document->detail_kh))? $document->detail_kh : '' ), ['class' => 'form-control my-editor','id' => 'detail_kh','placeholder' => 'detail in khmer']) !!}
          {!! $errors->first('detail_kh', '<span class="help-block">:message</span>') !!}
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
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('short_desc_my'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('short_desc_my', "Short Description in Malay")) !!}
          {!! Form::textarea('short_desc_my', ((isset($document->short_desc_my))? $slide_show->short_desc_my : '' ), ['class' => 'form-control ','rows' => '3','placeholder' => 'short description in malay']) !!}
          {!! $errors->first('short_desc_my', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('detail_my'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('detail_my', "Detail in Malay")) !!}
          {!! Form::textarea('detail_my', ((isset($slide_show->detail_my))? $slide_show->detail_my : '' ), ['class' => 'form-control my-editor','id' => 'detail_my','placeholder' => 'detail in malay']) !!}
          {!! $errors->first('detail_my', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
    @slot('tab_sa')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_sa'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_sa', "Name in Arab")) !!}
          {!! Form::text('name_sa', ((isset($slide_show))? $slide_show->name_sa : '' ), ['class' => 'form-control ','placeholder' => 'name arab']) !!}
          {!! $errors->first('name_sa', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('short_desc_sa'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('short_desc_sa', "Short Description in Arab")) !!}
          {!! Form::textarea('short_desc_sa', ((isset($slide_show->short_desc_sa))? $slide_show->short_desc_sa : '' ), ['class' => 'form-control ','rows' => '3','placeholder' => 'short description in arab']) !!}
          {!! $errors->first('short_desc_sa', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('detail_sa'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('detail_sa', "Detail in Arab")) !!}
          {!! Form::textarea('detail_sa', ((isset($slide_show->detail_sa))? $slide_show->detail_sa : '' ), ['class' => 'form-control my-editor','id' => 'detail_sa','placeholder' => 'detail in arab']) !!}
          {!! $errors->first('detail_sa', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
  @endcomponent

</div>
{{-- / .row --}}
  