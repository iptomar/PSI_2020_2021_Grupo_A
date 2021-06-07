<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layout.partials.front._head_f')

        @yield('css')
    </head>
    <body class="layout-footer-fixed layout-top-nav">
        <div class="wrapper">
            @include('layout.partials.front._navbar_f')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" >
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
