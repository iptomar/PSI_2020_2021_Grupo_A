<!-- Brand Logo -->
<a href={{route('backoffice.start')}} class="brand-link text-center" style="height='57px'">
    <div width="50px" height="50px">&nbsp;</div>
</a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item has-treeview">
          <a href="{{ route('backoffice.interation.list') }}" class="nav-link text-left">
            <i class="nav-icon fas fa-envelope"></i>
            <p class="font-weight-bold">
                @lang('backoffice.side-interation')
            </p>
          </a>
        </li>
        @if (user()->role == 'superadmin')
        <li class="nav-item has-treeview">
            <a href="{{ route('backoffice.user.list') }}" class="nav-link text-left">
              <i class="nav-icon fas fa-user"></i>
              <p class="font-weight-bold">
                @lang('backoffice.side-mod')
              </p>
            </a>
          </li>
        @endif

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
