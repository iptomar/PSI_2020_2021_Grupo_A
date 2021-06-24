<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layout.partials.back._head')

        @yield('css')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @include('layout.partials.back._navbar')

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-light-primary elevation-4">
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
        </div>
        <!-- ./wrapper -->
        @include('layout.partials.back._javascript')
    </body>
</html>
