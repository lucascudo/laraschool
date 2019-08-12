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
