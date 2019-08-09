<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Código:') !!}
    <p>{!! $curso->id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Data de Criação:') !!}
    <p>{!! $curso->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Data de Atualização:') !!}
    <p>{!! $curso->updated_at !!}</p>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Título:') !!}
    <p>{!! $curso->titulo !!}</p>
</div>

<!-- Turno Field -->
<div class="form-group">
    {!! Form::label('turno', 'Turno:') !!}
    <p>{!! $curso->turno !!}</p>
</div>

<!-- Codigo Strix Field -->
<div class="form-group">
    {!! Form::label('codigo_strix', 'Codigo da Strix:') !!}
    <p>{!! $curso->codigo_strix !!}</p>
</div>

<!-- Centro Custo Field -->
<div class="form-group">
    {!! Form::label('centro_custo', 'Centro de Custo:') !!}
    <p>{!! $curso->centro_custo !!}</p>
</div>

