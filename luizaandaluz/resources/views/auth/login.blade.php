@extends('layout.neutral')

@section('css')
    <style>
        .login-box{
            position: fixed;
            top: 30%;left: 70%;
            transform: translate(-70%,-30%);
            box-shadow: 0 0 1px rgb(255 0 0), 0 1px 3px rgb(0 0 0);
        }

        .btn-block {
            height: 100%;
        }

        .card,.card-body{
            background-color: transparent;
        }

        .nosidepadding{
             padding: 20px 0 20px 0;
        }

        .login-logo{
            display: inline-flex
        }

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

@section('title', str_replace('<br />','',lang('backoffice.sign_in')))

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )


@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
@endif

<div class="login-box">
    <div class="login-logo">
        <div class="col-4 nosidepadding">
            <img src="{{ asset('imagem/FAVICON-LACC-GRIZ.png') }}" alt="FAVICON-LACC-GRIZ.png" width="auto;" height="50px;">
        </div>
        <div class="col-8 nosidepadding">
            <h5 class="login-box-msg"><b>@lang('fullstack.title')</b></h5>
        </div>


    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">

            <form action="{{ $login_url }}" method="post">
                {{ csrf_field() }}
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="{{ route('home') }}" class="btn btn-info btn-block">
                            <i class="fa fa-home"></i>@lang('backoffice.return')
                        </a>

                    </div>
                    <!-- /.col -->
                    <div class="col-5">
                        <button type="submit" class="btn btn-primary btn-block">
                        <span class="fas fa-sign-in-alt"></i>@lang('backoffice.sign_in')</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
