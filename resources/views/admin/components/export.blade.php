<div class="btn-group">
  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-file-export"></i>&nbsp; {{ __('label.buttons.export') }} &nbsp;&nbsp;<i class="fa fa-caret-down"></i>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{ $btnExportAll }}"><i class="fa fa-database"></i> {{ __('label.buttons.export_all') }}</a></li>
    <li><a href="{{ $btnExportEVAT }}"><i class="fa fa-copy"></i> {{ __('label.buttons.export_evat') }}</a></li>
    <li><a href="{{ $btnExportQB }}"><i class="fa fa-file-excel"></i> {{ __('label.buttons.export_qb') }}</a></li>
  </ul>
</div>