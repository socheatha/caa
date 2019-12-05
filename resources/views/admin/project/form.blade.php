<div class="row">
  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('category_id'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('category_id', "Project Category <small>*</small>")) !!}
          {!! Form::select('category_id', $project_categories, ((isset($project->category_id))? $project->category_id : '' ), ['class' => 'form-control select2','placeholder' => '== Please Select ==', 'required']) !!}
          {!! $errors->first('category_id', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-9">
        <div class="form-group {!! (($errors->has('index'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name', "Index <small>*</small>")) !!}
          {!! Form::text('index', ((isset($project->index))? $project->index : $index ), ['class' => 'form-control ','placeholder' => 'index','required']) !!}
          {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group text-center">
          {!! Html::decode(Form::label('status', "Status")) !!}
          <div class="togglebutton mt-4">
            <label>
              {!! Form::checkbox('status',((isset($project->status))? $project->status : 1 ), ((isset($project->status))? (($project->status==1)? true : false) : true) )  !!}
              <span class="toggle toggle-success"></span>
            </label>
          </div>
        </div>
      </div>

      @if (!isset($project))
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('thumbnail'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('thumbnail', "Thumbnail (750px x 520px) <small>*</small>")) !!}
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

    </div>
  </div>
  {{-- / .col --}}

  <div class="col-sm-6">
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('seo_keywords'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name', "SEO Keywords <small>*</small>")) !!}
          {!! Form::text('seo_keywords', ((isset($project->seo_keywords))? $project->seo_keywords : '' ), ['class' => 'form-control ','placeholder' => 'seo keywords','required']) !!}
          {!! $errors->first('seo_keywords', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('description'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name', "SEO Description <small>*</small>")) !!}
          {!! Form::textarea('seo_description', ((isset($project->seo_description))? $project->seo_description : '' ), ['class' => 'form-control ','style' => 'height: 108px;','placeholder' => 'seo description','required']) !!}
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
          {!! Form::text('name_en', ((isset($project))? $project->name_en : '' ), ['class' => 'form-control ','placeholder' => 'name en','required']) !!}
          {!! $errors->first('name_en', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('short_descript_en'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('short_descript_en', "Short Description in English <small>*</small>")) !!}
          {!! Form::textarea('short_descript_en', ((isset($project->short_descript_en))? $project->short_descript_en : '' ), ['class' => 'form-control ','rows' => '3','placeholder' => 'short description in english','required']) !!}
          {!! $errors->first('short_descript_en', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('detail_en'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('detail_en', "English Detail <small>*</small>")) !!}
          {!! Form::textarea('detail_en', ((isset($project->detail_en))? $project->detail_en : '' ), ['class' => 'form-control my-editor','id' => 'detail_en','placeholder' => 'detail in english','required']) !!}
          {!! $errors->first('detail_en', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
    @slot('tab_kh')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_kh'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_kh', "Name in Khmer")) !!}
          {!! Form::text('name_kh', ((isset($project))? $project->name_kh : '' ), ['class' => 'form-control ','placeholder' => 'name khmer']) !!}
          {!! $errors->first('name_kh', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('description'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('short_descript_kh', "Short Description in Khmer")) !!}
          {!! Form::textarea('short_descript_kh', ((isset($project->short_descript_kh))? $project->short_descript_kh : '' ), ['class' => 'form-control ','rows' => '3','placeholder' => 'short description in khmer']) !!}
          {!! $errors->first('short_descript_kh', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('detail_kh'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('detail_kh', "Detail in Khmer")) !!}
          {!! Form::textarea('detail_kh', ((isset($project->detail_kh))? $project->detail_kh : '' ), ['class' => 'form-control my-editor','id' => 'detail_kh','placeholder' => 'detail in khmer']) !!}
          {!! $errors->first('detail_kh', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
    @slot('tab_my')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_my'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_my', "Name in Malay")) !!}
          {!! Form::text('name_my', ((isset($project))? $project->name_my : '' ), ['class' => 'form-control ','placeholder' => 'name malay']) !!}
          {!! $errors->first('name_my', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('short_descript_my'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('short_descript_my', "Short Description in Malay")) !!}
          {!! Form::textarea('short_descript_my', ((isset($project->short_descript_my))? $project->short_descript_my : '' ), ['class' => 'form-control ','rows' => '3','placeholder' => 'short description in malay']) !!}
          {!! $errors->first('short_descript_my', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('detail_my'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('detail_my', "Detail in Malay")) !!}
          {!! Form::textarea('detail_my', ((isset($project->detail_my))? $project->detail_my : '' ), ['class' => 'form-control my-editor','id' => 'detail_my','placeholder' => 'detail in malay']) !!}
          {!! $errors->first('detail_my', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
    @slot('tab_sa')
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('name_sa'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('name_sa', "Name in Arab")) !!}
          {!! Form::text('name_sa', ((isset($project))? $project->name_sa : '' ), ['class' => 'form-control ','placeholder' => 'name arab']) !!}
          {!! $errors->first('name_sa', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('short_descript_sa'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('short_descript_sa', "Short Description in Arab")) !!}
          {!! Form::textarea('short_descript_sa', ((isset($project->short_descript_sa))? $project->short_descript_sa : '' ), ['class' => 'form-control ','rows' => '3','placeholder' => 'short description in arab']) !!}
          {!! $errors->first('short_descript_sa', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group {!! (($errors->has('detail_sa'))? 'has-error':'') !!}">
          {!! Html::decode(Form::label('detail_sa', "Detail in Arab")) !!}
          {!! Form::textarea('detail_sa', ((isset($project->detail_sa))? $project->detail_sa : '' ), ['class' => 'form-control my-editor','id' => 'detail_sa','placeholder' => 'detail in arab']) !!}
          {!! $errors->first('detail_sa', '<span class="help-block">:message</span>') !!}
        </div>
      </div>
    @endslot
  @endcomponent

</div>
{{-- / .row --}}
  