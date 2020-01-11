
  <div class="row">

    <div class="col-sm-6">
      <div class="form-group {!! (($errors->has('url'))? 'has-error':'') !!}">
        {!! Html::decode(Form::label('name', "URL <small>*</small>")) !!}
        {!! Form::text('url', ((isset($sub_sub_menus->url))? $sub_sub_menus->url : '' ), ['class' => 'form-control ','placeholder' => 'url','required']) !!}
        {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
      </div>
    </div>
    {{-- / .col --}}

    <div class="col-sm-3">
      <div class="form-group {!! (($errors->has('sub_menu_id'))? 'has-error':'') !!}">
        {!! Html::decode(Form::label('sub_menu_id', "Sub Menu <small>*</small>")) !!}
        {!! Form::select('sub_menu_id', $sub_sub_menus, ((isset($sub_sub_menus->sub_menu_id))? $sub_sub_menus->sub_menu_id : '' ), ['class' => 'form-control select2', 'required']) !!}
        {!! $errors->first('sub_menu_id', '<span class="help-block">:message</span>') !!}
      </div>
    </div>
    {{-- / .col --}}

    <div class="col-sm-1">
      <div class="form-group {!! (($errors->has('index'))? 'has-error':'') !!}">
        {!! Html::decode(Form::label('name', "Index <small>*</small>")) !!}
        {!! Form::text('index', ((isset($sub_sub_menus->index))? $sub_subMenu->index : $index ), ['class' => 'form-control ','placeholder' => 'index','required']) !!}
        {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
      </div>
    </div>
    {{-- / .col --}}

    <div class="col-sm-2">
      <div class="form-group text-center">
        {!! Html::decode(Form::label('status', "Status")) !!}
        <div class="togglebutton mt-4">
          <label>
            {!! Form::checkbox('status',((isset($sub_sub_menus->status))? $sub_sub_menus->status : 1 ), ((isset($sub_sub_menus->status))? (($sub_sub_menus->status==1)? true : false) : true) )  !!}
            <span class="toggle toggle-success"></span>
          </label>
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
            {!! Form::text('name_en', ((isset($sub_sub_menus->name_en))? $sub_sub_menus->name_en : '' ), ['class' => 'form-control ','placeholder' => 'name en','required']) !!}
            {!! $errors->first('name_en', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
      @endslot
      @slot('tab_kh')
        <div class="col-sm-12">
          <div class="form-group {!! (($errors->has('name_kh'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('name_kh', "Name in Khmer")) !!}
            {!! Form::text('name_kh', ((isset($sub_sub_menus->name_kh))? $sub_sub_menus->name_kh : '' ), ['class' => 'form-control ','placeholder' => 'name kh']) !!}
            {!! $errors->first('name_kh', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
      @endslot
      @slot('tab_my')
        <div class="col-sm-12">
          <div class="form-group {!! (($errors->has('name_my'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('name_my', "Name in Malay")) !!}
            {!! Form::text('name_my', ((isset($sub_sub_menus->name_my))? $sub_sub_menus->name_my : '' ), ['class' => 'form-control ','placeholder' => 'name my']) !!}
            {!! $errors->first('name_my', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
      @endslot
      @slot('tab_sa')
        <div class="col-sm-12">
          <div class="form-group {!! (($errors->has('name_sa'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('name_sa', "Name in Arab")) !!}
            {!! Form::text('name_sa', ((isset($sub_sub_menus->name_sa))? $sub_sub_menus->name_sa : '' ), ['class' => 'form-control ','placeholder' => 'name sa']) !!}
            {!! $errors->first('name_sa', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
      @endslot
    @endcomponent

  </div>
  {{-- / .row --}}
  