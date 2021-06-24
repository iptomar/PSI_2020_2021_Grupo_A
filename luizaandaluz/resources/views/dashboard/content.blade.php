@section('scripts')
    <script>
        var datatable = "{{ json_encode(lang('backoffice.datatable')) }}"
        var logoImg = "{!! asset('imagem/LOGO-LACC.png') !!}"
        var faviconImg = "{!! asset('imagem/FAVICON-LACC-GRIZ.png') !!}"
    </script>
    <script src="/js/backoffice.js"></script>
@endsection
