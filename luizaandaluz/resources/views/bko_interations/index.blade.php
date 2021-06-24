@extends('layout.backoffice')

@section('title', lang('backoffice.side-interation'))

@section('css')

@endsection

@section('dashTitle', lang('backoffice.side-interation'))

@section('content')


    @include('bko_interations.show')
    @include('layout.partials.back._modal')
@endsection
@section('scripts')
<script>
    var lengthMenu = "{!! lang('backoffice.datatable.lengthMenu') !!}";
    var zeroRecords = "{!! lang('backoffice.datatable.zeroRecords') !!}";
    var info = "{!! lang('backoffice.datatable.info') !!}";
    var infoEmpty = "{!! lang('backoffice.datatable.infoEmpty') !!}";
    var infoFiltered = "{!! lang('backoffice.datatable.infoFiltered') !!}";
    var next = "{!! lang('backoffice.datatable.next') !!}";
    var previous = "{!! lang('backoffice.datatable.previous') !!}";
    var search = "{!! lang('backoffice.datatable.search') !!}";

    var logoImg = "{!! asset('imagem/LOGO-LACC.png') !!}"
    var faviconImg = "{!! asset('imagem/FAVICON-LACC-GRIZ.png') !!}"
</script>
<script src="/js/backoffice.js"></script>


@if(\Session::has('message'))
    <script>
        var json_messages = {!! json_encode(\Session::get('message')) !!}
    </script>
@endif
<script src="/js/toast.js"></script>

@endsection
