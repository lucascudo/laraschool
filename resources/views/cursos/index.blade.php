@extends('home')

@section('content_header')
<h1 class="pull-left">Cursos</h1>
<a class="btn btn-primary pull-right" href="{!! route('cursos.create') !!}">Adicionar novo</a>
<div class="clearfix"></div>
@endsection

@section('content')
<div class="clearfix"></div>

@include('flash::message')
<div class="box box-primary">
    <div class="box-body">
        @include('cursos.table')
    </div>
</div>
<div class="text-center">

    @include('adminlte-templates::common.paginate', ['records' => $cursos])

</div>
@endsection