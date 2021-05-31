@extends('layout.neutral')

@section('css')
    <link rel="stylesheet" href="/css/neutral.css">
@endsection

@section('content')
    <img id="img-ass" src="{{ asset('imagem/ASS-LACC-GRIZ.png') }}" alt="Luiza Andaluz Signature" />
    <img id="img-logo" src="{{ asset('imagem/FAVICON-LACC-GRIZ.png') }}" alt="Luiza Andaluz Logo" />
    <a id="start_buttom" href="{{route('map.map')}}"class="btn btn-start">@lang('fullstack.enter')</a>
@endsection
