@extends('home')

@section('content')
    <section class="content-header">
        <h1>
            Aluno
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('alunos.show_fields')
                    <a href="{!! route('alunos.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
