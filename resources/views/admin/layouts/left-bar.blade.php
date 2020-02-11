
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="{{ ((Auth::user()->sidebarActive() == 'admin' )? 'active':'') }}">
        <a href="{{ route('admin.home') }}"><i class="fa fa-home"></i> <span>{{ __('module.sidebar.dashboard') }}</span></a>
      </li>

      <li class="header">Data Management</li>

      <li class="treeview {{ ((strpos('main_menu sub_menu sub_sub_menu', Auth::user()->sidebarActive()) !== false)? 'active':'') }}">
        <a href="#">
          <i class="fas fa-bars"></i> <span> Main Menu</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
        <li class="{{ ((Auth::user()->sidebarActive() == 'main_menu' )? 'active':'') }}"><a href="{{ route('admin.main_menu.index') }}"><i class="far fa-circle"></i> Main Menu</a></li>
          <li class="{{ ((Auth::user()->sidebarActive() == 'sub_menu' )? 'active':'') }}"><a href="{{ route('admin.sub_menu.index') }}"><i class="far fa-circle"></i> Sub Menu</a></li>
          <li class="{{ ((Auth::user()->sidebarActive() == 'sub_sub_menu' )? 'active':'') }}"><a href="{{ route('admin.sub_sub_menu.index') }}"><i class="far fa-circle"></i> Sub Sub-Menu</a></li>
        </ul>
      </li>

      <li class="treeview {{ ((strpos('project_category project', Auth::user()->sidebarActive()) !== false)? 'active':'') }}">
        <a href="#">
          <i class="fa fa-project-diagram"></i> <span> Projects</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ ((Auth::user()->sidebarActive() == 'project_category' )? 'active':'') }}"><a href="{{ route('admin.project_category.index') }}"><i class="far fa-circle"></i> Project Category</a></li>
          <li class="{{ ((Auth::user()->sidebarActive() == 'project' )? 'active':'') }}"><a href="{{ route('admin.project.index') }}"><i class="far fa-circle"></i> Projects</a></li>
        </ul>
      </li>

      <li class="treeview {{ ((strpos('activity_category activity', Auth::user()->sidebarActive()) !== false)? 'active':'') }}">
        <a href="#">
          <i class="fa fa-fist-raised"></i> <span> Activty</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu {{ ((strpos('activity_category activity', Auth::user()->sidebarActive()) !== false)? 'active':'') }}">
          <li class="{{ ((Auth::user()->sidebarActive() == 'activity_category' )? 'active':'') }}"><a href="{{ route('admin.activity_category.index') }}"><i class="far fa-circle"></i> Activty Category</a></li>
          <li class="{{ ((Auth::user()->sidebarActive() == 'activity' )? 'active':'') }}"><a href="{{ route('admin.activity.index') }}"><i class="far fa-circle"></i> Activty List</a></li>
        </ul>
      </li>

      <li class="{{ ((Auth::user()->sidebarActive() == 'about_us' )? 'active':'') }}"><a href="{{ route('admin.about_us.index') }}"><i class="far fa-circle"></i> About Us</a></li>

      <li class="treeview {{ ((strpos('website-config slide_show partner documents donations', Auth::user()->sidebarActive()) !== false)? 'active':'') }}">
        <a href="#">
          <i class="fa fa-project-diagram"></i> <span> Setting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ ((Auth::user()->sidebarActive() == 'website-config' )? 'active':'') }}">
            <a href="{{ route('admin.website-config.index') }}"><i class="far fa-circle"></i> Website Config</a>
          </li>
          <li class="{{ ((Auth::user()->sidebarActive() == 'slide_show' )? 'active':'') }}"><a href="{{ route('admin.slide_show.index') }}"><i class="far fa-circle"></i> Slide Show</a></li>
          <li class="{{ ((Auth::user()->sidebarActive() == 'partner' )? 'active':'') }}"><a href="{{ route('admin.partner.index') }}"><i class="far fa-circle"></i> Our Parthner</a></li>
          {{-- <li class=""><a href="{{ route('admin.extra_menu.index') }}"><i class="far fa-circle"></i> Extra Menu</a></li> --}}
          <li class="{{ ((Auth::user()->sidebarActive() == 'documents' )? 'active':'') }}"><a href="{{ route('admin.documents.index') }}"><i class="far fa-circle"></i> Document</a></li>
          <li class="{{ ((Auth::user()->sidebarActive() == 'donations' )? 'active':'') }}"><a href="{{ route('admin.donation.index') }}"><i class="far fa-circle"></i> Donation</a></li>
        </ul>
      </li>

      <li class="{{ ((Auth::user()->sidebarActive() == 'user' )? 'active':'') }}"><a href="{{ route('admin.user.index') }}"><i class="fa fa-user-friends"></i> Users</a></li>

      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>

{{-- 
      <li class="header">LABELS</li>
      <li><a href="#"><i class="far fa-circle text-red"></i> <span>Logout</span></a></li> --}}
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>