@extends('layout.neutral')

@section('css')
<style>
    @media (min-width: 1281px) {

        body{
            width: max-content;
            background-image: url("../imagem/Pagina_inicial_nologo.png");
            background-repeat: no-repeat;
            background-position: left bottom;
        }
    }

    @media (min-width: 1281px) and (orientation: landscape) {

        body{
            width: max-content;
            background-image: url("../imagem/Pagina_inicial_nologo.png");
            background-repeat: no-repeat;
            background-position: left bottom;
            background-size: cover;
        }
    }

    @media (min-width: 1025px) and (max-width: 1280px) {

        body{
            width: max-content;
            background-image: url("../imagem/Pagina_inicial_nologo.png");
            background-repeat: no-repeat;
            background-position: left bottom;
            background-size: cover;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) and (orientation: landscape) {

        body{
            background-image: none;
            width: max-content;
            background-image: url("../imagem/Pagina_inicial_nologo.png");
            background-repeat: no-repeat;
            background-position: left bottom;
            background-size: cover;
        }
    }
    </style>
@endsection

@section('content')
    <img id="img-ass" src="{{ asset('imagem/ASS-LACC-GRIZ.png') }}" alt="Luiza Andaluz Signature" />
    <img id="img-logo" src="{{ asset('imagem/FAVICON-LACC-GRIZ.png') }}" alt="Luiza Andaluz Logo" />
    <a id="start_buttom" href="{{route('map.map')}}"class="btn btn-start">@lang('fullstack.enter')</a>
@endsection
