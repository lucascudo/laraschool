@extends('home')

@section('content_header')
    <h1>Curso</h1>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row" style="padding-left: 20px">
                @include('cursos.show_fields')
                <a href="{!! route('cursos.index') !!}" class="btn btn-default">Voltar</a>
            </div>
        </div>
    </div>
@endsection