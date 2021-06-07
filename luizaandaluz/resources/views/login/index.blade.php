@extends('layout.neutral')

@section()
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
