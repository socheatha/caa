
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="treeview">
        <a href="#"><i class="fa fa-home"></i> <span>Dashboard</span></a>
      </li>

      <li class="header">MAIN NAVIGATION</li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-circle"></i> <span> {{ __('module.sidebar.main.main-menu') }}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="index.html"><i class="far fa-circle"></i> {{ __('module.sidebar.sub.main-menu') }}</a></li>
          <li><a href="index2.html"><i class="far fa-circle"></i> {{ __('module.sidebar.sub.sub-menu') }}</a></li>
        </ul>
      </li>

      <li class="header">LABELS</li>
      <li><a href="#"><i class="far fa-circle text-red"></i> <span>Important</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>