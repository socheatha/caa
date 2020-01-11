
<header class="main-header">
  <!-- Logo -->
    <a href="{{ route('admin.home') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>CAA</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>C.A.A</b> Admin</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="fa"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="/images/users/{{ Auth::user()->profile }}" class="user-image" alt="User Image">
						<span class="hidden-xs">{{ Auth::user()->name }}</span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="/images/users/{{ Auth::user()->profile }}" class="img-circle" alt="User Image">

							<p>
								{{ Auth::user()->name }}
								<small>Member since : {{ Auth::user()->created_at->format('M d Y') }}</small>
							</p>
						</li>

						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="{{ route('admin.user.show', Auth::user()->id) }}" class="btn btn-info btn-flat"><i
										class="fa fa-user"></i>
									&nbsp;Profile</a>
							</div>
							<div class="pull-right">
								<a class="btn btn-flat btn-danger" href="{{ route('logout') }}"
									onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i
										class="fas fa-sign-out-alt"></i> &nbsp;Sign out</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					</ul>
				</li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fas fa-cog"></i></a>
        </li>

      </ul>
    </div>
  </nav>
</header>