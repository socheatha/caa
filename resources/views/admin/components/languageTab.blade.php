<?php 
  if(!isset($unique_tab)){ $unique_tab = ''; }
  // if there are muitiple tabs in 1 screen just declare $unique_tab=xxx before include
?>
<div class="col-sm-12 mt-7">
  <!-- Custom Tabs -->
  <div class="nav-tabs-custom nav-tabs-custom-ns">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#{{$unique_tab}}_tab_en" data-toggle="tab"><div class="flag flag-en"></div> English</a></li>
      <li><a href="#{{$unique_tab}}_tab_kh" data-toggle="tab"><div class="flag flag-kh"></div> Khmer</a></li>
      <li><a href="#{{$unique_tab}}_tab_my" data-toggle="tab"><div class="flag flag-my"></div> Malay</a></li>
      <li><a href="#{{$unique_tab}}_tab_sa" data-toggle="tab"><div class="flag flag-sa"></div> Arab</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="{{$unique_tab}}_tab_en">
        <div class="row">
          
          {!! $tab_en !!}

        </div>
        {{-- / .col --}}
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="{{$unique_tab}}_tab_kh">
        <div class="row">

          {!! $tab_kh !!}

        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="{{$unique_tab}}_tab_my">
        <div class="row">

          {!! $tab_my !!}

        </div>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="{{$unique_tab}}_tab_sa">
        <div class="row">

          {!! $tab_sa !!}

        </div>
      </div>
      <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
  </div>
  <!-- nav-tabs-custom -->
</div>
{{-- / .col --}}
