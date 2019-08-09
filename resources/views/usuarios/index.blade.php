@extends('home')

@section('content_header')
    <h1 class="pull-left">Usuários</h1>
    <h1 class="pull-right">
        <a class="btn btn-primary pull-right" href="{!! route('usuarios.create') !!}">Adicionar novo</a>
    </h1>
    <div class="clearfix"></div>
@endsection

@section('content')
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
            @include('usuarios.table')
        </div>
    </div>
    <div class="text-center">

        @include('adminlte-templates::common.paginate', ['records' => $usuarios])

    </div>
@endsection
