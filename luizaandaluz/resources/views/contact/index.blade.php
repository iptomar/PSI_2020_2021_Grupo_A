@extends('layout.frontpage')

@section('title', lang('fullstack.title'))

@section('css')
<link rel="stylesheet" href="/css/map.css">
@endsection

@section('content')
@include('contact.content')
@endsection

@section('scripts')
<script>
    var tooltip = "{{ lang('fullstack.logo') }}";
</script>
<script src="/js/contact.js"></script>
@endsection
