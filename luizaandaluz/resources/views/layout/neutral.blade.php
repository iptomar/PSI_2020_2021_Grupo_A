<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layout.partials._head')

        @yield('css')
    </head>
    <body>
        <div class="wrapper">
            @yield('content')
        </div>
        <!-- ./wrapper -->
        @include('layout.partials._javascript')
    </body>
</html>
