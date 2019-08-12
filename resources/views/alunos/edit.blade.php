@extends('home')

@section('content')
    <section class="content-header">
        <h1>
            Aluno
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($aluno, ['route' => ['alunos.update', $aluno->id], 'method' => 'patch']) !!}

                        @include('alunos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection