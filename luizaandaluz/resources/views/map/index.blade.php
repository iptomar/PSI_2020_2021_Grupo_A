@extends('layout.frontpage')

@section('css')
<link rel="stylesheet" href="/css/map.css">
@endsection

@section('content')
<div id="map"></div>
@include('map._modal')
@endsection

@section('scripts')
<script src="/js/map.js"></script>
@if(isset($message))
        <script>
            var json_messages = {!! $message !!}
        </script>
@endif

<script src="/js/toast.js"></script>
@endsection
