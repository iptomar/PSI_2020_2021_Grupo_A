@extends('layout.frontpage')

@section('title', lang('fullstack.title'))

@section('css')
    <link rel="stylesheet" href="/css/map.css">
@endsection

@section('content')
    <div id="map"></div>
    @include('map._modal')
    @include('map._details')
@endsection
@section('scripts')
<script>
    var json_translations = {!! json_encode(lang('frontoffice.uploadform')) !!}
</script>

<script src="/js/map.js"></script>
@if(\Session::has('message'))
        <script>
            var json_messages = {!! json_encode(\Session::get('message')) !!}
        </script>
@endif

<script src="/js/toast.js"></script>
@endsection
@php
    \Session::forget('message');
@endphp
