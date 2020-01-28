
  <div class="row">

    <div class="col-sm-2">
      <div class="form-group">
        {!! Html::decode(Form::label('select_default_url', "Default Pages Suggestion")) !!}
        <select class="form-control" id="select_default_url">
          <option value="">== Get Default URL ==</option>
          <option value="{{ route('home') }}">Home page</option>
          <option value="{{ route('about-us') }}">About Us</option>
          <option value="{{ route('contact-us') }}">Contact Us</option>
          <option value="{{ route('donation') }}">Donation</option>
        </select>
      </div>
    </div>
    {{-- / .col --}}
    <div class="col-sm-4">
      <div class="form-group {!! (($errors->has('url'))? 'has-error':'') !!}">
        {!! Html::decode(Form::label('name', "URL <small>*</small>")) !!}
        {!! Form::text('url', ((isset($mainMenu->url))? $mainMenu->url : '' ), ['class' => 'form-control ','placeholder' => 'url','required']) !!}
        {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
      </div>
    </div>
    {{-- / .col --}}

    <div class="col-sm-3">
      <div class="form-group {!! (($errors->has('index'))? 'has-error':'') !!}">
        {!! Html::decode(Form::label('name', "Index <small>*</small>")) !!}
        {!! Form::text('index', ((isset($mainMenu->index))? $mainMenu->index : $index ), ['class' => 'form-control ','placeholder' => 'index','required']) !!}
        {!! $errors->first('index', '<span class="help-block">:message</span>') !!}
      </div>
    </div>
    {{-- / .col --}}

    <div class="col-sm-3">
      <div class="form-group text-center">
        {!! Html::decode(Form::label('status', "Status")) !!}
        <div class="togglebutton mt-4">
          <label>
            {!! Form::checkbox('status',((isset($mainMenu->status))? $mainMenu->status : 1 ), ((isset($mainMenu->status))? (($mainMenu->status==1)? true : false) : true) )  !!}
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
            {!! Form::text('name_en', ((isset($mainMenu))? $mainMenu->name_en : '' ), ['class' => 'form-control ','placeholder' => 'name en','required']) !!}
            {!! $errors->first('name_en', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
      @endslot
      @slot('tab_kh')
        <div class="col-sm-12">
          <div class="form-group {!! (($errors->has('name_kh'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('name_kh', "Name in Khmer")) !!}
            {!! Form::text('name_kh', ((isset($mainMenu))? $mainMenu->name_kh : '' ), ['class' => 'form-control ','placeholder' => 'name kh']) !!}
            {!! $errors->first('name_kh', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
      @endslot
      @slot('tab_my')
        <div class="col-sm-12">
          <div class="form-group {!! (($errors->has('name_my'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('name_my', "Name in Malay")) !!}
            {!! Form::text('name_my', ((isset($mainMenu))? $mainMenu->name_my : '' ), ['class' => 'form-control ','placeholder' => 'name my']) !!}
            {!! $errors->first('name_my', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
      @endslot
      @slot('tab_sa')
        <div class="col-sm-12">
          <div class="form-group {!! (($errors->has('name_sa'))? 'has-error':'') !!}">
            {!! Html::decode(Form::label('name_sa', "Name in Arab")) !!}
            {!! Form::text('name_sa', ((isset($mainMenu))? $mainMenu->name_sa : '' ), ['class' => 'form-control ','placeholder' => 'name sa']) !!}
            {!! $errors->first('name_sa', '<span class="help-block">:message</span>') !!}
          </div>
        </div>
      @endslot
    @endcomponent

  </div>
  {{-- / .row --}}
  