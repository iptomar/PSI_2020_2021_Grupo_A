@extends('layout.backoffice')

@section('title', lang('backoffice.dash'))

@section('css')

@endsection

@section('dashTitle', lang('backoffice.dash'))

@section('content')

@endsection

@section('scripts')
    <script>
        var datatable = "{{ json_encode(lang('backoffice.datatable')) }}"
        var logoImg = "{!! asset('imagem/LOGO-LACC.png') !!}"
        var faviconImg = "{!! asset('imagem/FAVICON-LACC-GRIZ.png') !!}"
    </script>
    <script src="/js/backoffice.js"></script>
@endsection
