<div class="row">
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-9">
        <div class="form-group {!! (($errors->has('index'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name', "Index <small>*</small>")) !!}
          {!! Form::text('index', ((isset($about_us->index))? $about_us->index : $index ), ['class' => 'form-control ','placeholder' => 'index','required']) !!}
          {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group text-center">
          {!! Html::decode(Form::label('status', "Status")) !!}
          <div class="togglebutton mt-4">
            <label>
              {!! Form::checkbox('status',((isset($about_us->status))? $about_us->status : 1 ), ((isset($about_us->status))? (($about_us->status==1)? true : false) : true) )  !!}
              <span class="toggle toggle-success"></span>
            </label>
          </div>
        </div>
      </div>

      @if (!isset($about_us))
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('thumbnail'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('thumbnail', "Thumbnail (1000px x 690px) <small>*</small>")) !!}
          <div class="fileinput fileinput-new input-group" data-provides="fileinput">
            <div class="form-control nbr" data-trigger="fileinput">
              <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span>
            </div>
            <span class="input-group-addon btn-file btn btn-primary" style="border-radius: 0;">
              <span class="fileinput-new">{{ __('label.buttons.select') }}</span>
              <span class="fileinput-exists">{{ __('label.buttons.change') }}</span>
              {!! Form::file('thumbnail', ['accept' => 'image/jpeg,image/png','required']) !!}
            </span>
            <a href="#" class="input-group-addon fileinput-exists btn btn-danger" data-dismiss="fileinput">{{ __('label.buttons.remove') }}</a>
          </div>
          {!! $errors->first('thumbnail', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      @endif
      
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('seo_keywords'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name', "SEO Keywords <small>*</small>")) !!}
          {!! Form::text('seo_keywords', ((isset($about_us->seo_keywords))? $about_us->seo_keywords : '' ), ['class' => 'form-control ','placeholder' => 'seo keywords','required']) !!}
          {!! $errors->first('seo_keywords', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    </div>
  </div>
  {{-- / .col --}}
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('description'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name', "SEO Description <small>*</small>")) !!}
          {!! Form::textarea('seo_description', ((isset($about_us->seo_description))? $about_us->seo_description : '' ), ['class' => 'form-control ','style' => 'height: 108px;','placeholder' => 'seo description','required']) !!}
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
          {!! Form::text('name_en', ((isset($about_us->name_en))? $about_us->name_en : '' ), ['class' => 'form-control ','placeholder' => 'name en','required']) !!}
          {!! $errors->first('name_en', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('short_descript_en'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('short_descript_en', "Short Description in English <small>*</small>")) !!}
          {!! Form::textarea('short_descript_en', ((isset($about_us->short_descript_en))? $about_us->short_descript_en : '' ), ['class' => 'form-control ','rows' => '3','placeholder' => 'short description in english','required']) !!}
          {!! $errors->first('short_descript_en', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('detail_en'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('detail_en', "English Detail <small>*</small>")) !!}
          {!! Form::textarea('detail_en', ((isset($about_us->detail_en))? $about_us->detail_en : '' ), ['class' => 'form-control my-editor','id' => 'detail_en','placeholder' => 'detail in english','required']) !!}
          {!! $errors->first('detail_en', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
    @slot('tab_kh')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_kh'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_kh', "Name in Khmer")) !!}
          {!! Form::text('name_kh', ((isset($about_us->name_kh))? $about_us->name_kh : '' ), ['class' => 'form-control ','placeholder' => 'name khmer']) !!}
          {!! $errors->first('name_kh', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('description'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('short_descript_kh', "Short Description in Khmer")) !!}
          {!! Form::textarea('short_descript_kh', ((isset($about_us->short_descript_kh))? $about_us->short_descript_kh : '' ), ['class' => 'form-control ','rows' => '3','placeholder' => 'short description in khmer']) !!}
          {!! $errors->first('short_descript_kh', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('detail_kh'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('detail_kh', "Detail in Khmer")) !!}
          {!! Form::textarea('detail_kh', ((isset($about_us->detail_kh))? $about_us->detail_kh : '' ), ['class' => 'form-control my-editor','id' => 'detail_kh','placeholder' => 'detail in khmer']) !!}
          {!! $errors->first('detail_kh', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
    @slot('tab_my')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_my'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_my', "Name in Malay")) !!}
          {!! Form::text('name_my', ((isset($about_us->name_my))? $about_us->name_my : '' ), ['class' => 'form-control ','placeholder' => 'name malay']) !!}
          {!! $errors->first('name_my', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('short_descript_my'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('short_descript_my', "Short Description in Malay")) !!}
          {!! Form::textarea('short_descript_my', ((isset($about_us->short_descript_my))? $about_us->short_descript_my : '' ), ['class' => 'form-control ','rows' => '3','placeholder' => 'short description in malay']) !!}
          {!! $errors->first('short_descript_my', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('detail_my'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('detail_my', "Detail in Malay")) !!}
          {!! Form::textarea('detail_my', ((isset($about_us->detail_my))? $about_us->detail_my : '' ), ['class' => 'form-control my-editor','id' => 'detail_my','placeholder' => 'detail in malay']) !!}
          {!! $errors->first('detail_my', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
    @slot('tab_sa')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_sa'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_sa', "Name in Arab")) !!}
          {!! Form::text('name_sa', ((isset($about_us->name_sa))? $about_us->name_sa : '' ), ['class' => 'form-control ','placeholder' => 'name arab']) !!}
          {!! $errors->first('name_sa', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('short_descript_sa'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('short_descript_sa', "Short Description in Arab")) !!}
          {!! Form::textarea('short_descript_sa', ((isset($about_us->short_descript_sa))? $about_us->short_descript_sa : '' ), ['class' => 'form-control ','rows' => '3','placeholder' => 'short description in arab']) !!}
          {!! $errors->first('short_descript_sa', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('detail_sa'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('detail_sa', "Detail in Arab")) !!}
          {!! Form::textarea('detail_sa', ((isset($about_us->detail_sa))? $about_us->detail_sa : '' ), ['class' => 'form-control my-editor','id' => 'detail_sa','placeholder' => 'detail in arab']) !!}
          {!! $errors->first('detail_sa', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
  @endcomponent

</div>
{{-- / .row --}}
  