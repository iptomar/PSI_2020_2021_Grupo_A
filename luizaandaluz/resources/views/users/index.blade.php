@extends('layout.backoffice')

@section('title', lang('backoffice.side-mod'))

@section('css')

@endsection

@section('dashTitle', lang('backoffice.side-mod'))

@section('content')
    @include('users.show')
@endsection

