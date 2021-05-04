<!DOCTYPE html>
<html>
<head>
    @include('layout.partials._head')

    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  @include('layout.partials._navbar')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    @include('layout.partials._sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        @include('layout.partials._header')
        @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    @include('layout.partials._footer')
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('layout.partials._javascript')
</body>
</html>
