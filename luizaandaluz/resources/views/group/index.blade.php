@extends('layout.neutral')

@section('title', lang('fullstack.title'))
@section('css')
    <style>
        .mb-6{
            margin-bottom: 5rem!important;
        }
    </style>
@endsection

@section('content')
@include('group.content')
@endsection

