@extends('home')


@section('content_header')
    <h1>Usuário</h1>
@endsection

@section('content')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row" style="padding-left: 20px">
                @include('usuarios.show_fields')
                <a href="{!! route('usuarios.index') !!}" class="btn btn-default">Voltar</a>
            </div>
        </div>
    </div>
@endsection
