@extends('home')

@section('content_header')
    <h1>Usuário</h1>
@endsection

@section('content')
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id], 'method' => 'patch']) !!}

                @include('usuarios.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
