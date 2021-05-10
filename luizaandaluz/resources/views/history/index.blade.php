@extends('layout.frontpage')

@section('title', lang('fullstack.title'))

@section('css')
<link rel="stylesheet" href="/css/map.css">
@endsection

@section('content')

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
