@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    {{--@livewire('admin.users-index')--}}
    @livewire('admin.admin-user-table')
@stop

@section('js')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@stop
