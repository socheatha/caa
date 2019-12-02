
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="{{ ((Auth::user()->sidebarActive() == 'admin' )? 'active':'') }}">
        <a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> <span>{{ __('module.sidebar.dashboard') }}</span></a>
      </li>

      <li class="header">{{ __('module.sidebar.header.data') }}</li>

      <li class="treeview {{ ((strpos('main-menu sub-menu other-menu', Auth::user()->sidebarActive()) !== false)? 'active':'') }}">
        <a href="#">
          <i class="fas fa-bars"></i> <span> {{ __('module.sidebar.main.main-menu') }}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        <li class="{{ ((Auth::user()->sidebarActive() == 'main-menu' )? 'active':'') }}"><a href="{{ route('admin.main-menu.index') }}"><i class="far fa-circle"></i> {{ __('module.sidebar.sub.main-menu') }}</a></li>
          <li class="{{ ((Auth::user()->sidebarActive() == 'sub-menu' )? 'active':'') }}"><a href="{{ route('admin.sub-menu.index') }}"><i class="far fa-circle"></i> {{ __('module.sidebar.sub.sub-menu') }}</a></li>
          <li class="{{ ((Auth::user()->sidebarActive() == 'other-menu' )? 'active':'') }}"><a href="{{ route('admin.other-menu.index') }}"><i class="far fa-circle"></i> {{ __('module.sidebar.sub.other-menu') }}</a></li>
        </ul>
      </li>

      <li class="treeview {{ ((strpos('project-category project', Auth::user()->sidebarActive()) !== false)? 'active':'') }}">
        <a href="#">
          <i class="fa fa-project-diagram"></i> <span> {{ __('module.sidebar.main.project') }}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ ((Auth::user()->sidebarActive() == 'project-category' )? 'active':'') }}"><a href="{{ route('admin.project-categories.index') }}"><i class="far fa-circle"></i> {{ __('module.sidebar.sub.project-category') }}</a></li>
          <li class="{{ ((Auth::user()->sidebarActive() == 'project' )? 'active':'') }}"><a href="{{ route('admin.projects.index') }}"><i class="far fa-circle"></i> {{ __('module.sidebar.sub.project') }}</a></li>
        </ul>
      </li>

      <li class="treeview {{ ((strpos('project-category project', Auth::user()->sidebarActive()) !== false)? 'active':'') }}">
        <a href="#">
          <i class="fa fa-project-diagram"></i> <span> Activty</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="#"><i class="far fa-circle"></i> Activty Category</a></li>
          <li class=""><a href="#"><i class="far fa-circle"></i> Activty List</a></li>
        </ul>
      </li>

      <li class="treeview {{ ((strpos('project-category project', Auth::user()->sidebarActive()) !== false)? 'active':'') }}">
        <a href="#">
          <i class="fa fa-project-diagram"></i> <span> Setting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="#"><i class="far fa-circle"></i> Website Config</a></li>
          <li class=""><a href="#"><i class="far fa-circle"></i> Slide Show</a></li>
          <li class=""><a href="#"><i class="far fa-circle"></i> Our Parthner</a></li>
          <li class=""><a href="#"><i class="far fa-circle"></i> Extra Menu</a></li>
          <li class=""><a href="#"><i class="far fa-circle"></i> Document</a></li>
          <li class=""><a href="#"><i class="far fa-circle"></i> Donation</a></li>
        </ul>
      </li>


      <li class="header">LABELS</li>
      <li><a href="#"><i class="far fa-circle text-red"></i> <span>Logout</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>