@extends('home')

@section('content_header')
    <h1>Curso</h1>
@endsection

@section('content')
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">

        <div class="box-body">
            <div class="row">
                {!! Form::open(['route' => 'cursos.store']) !!}

                @include('cursos.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection