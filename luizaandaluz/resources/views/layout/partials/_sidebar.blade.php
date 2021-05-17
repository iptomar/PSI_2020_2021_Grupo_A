<!-- Brand Logo -->
<a href={{route('home')}} class="brand-link text-center">
    <img src="./imagem/logo_origin.png" width="50px" height="50px">
    <span class="brand-text font-weight-bold">@lang('fullstack.logo')</span>
</a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!--
    </!-- Sidebar user panel (optional) --/>
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link text-left">
            <i class="nav-icon fas fa-envelope"></i>
            <p class="font-weight-bold">
                @lang('backoffice.side-interation')
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link text-left">
              <i class="nav-icon fas fa-user"></i>
              <p class="font-weight-bold">
                @lang('backoffice.side-mod')
              </p>
            </a>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
