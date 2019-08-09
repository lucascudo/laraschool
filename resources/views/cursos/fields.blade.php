<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Título:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Turno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('turno', 'Turno:') !!}
    {!! Form::text('turno', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Strix Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_strix', 'Codigo da Strix:') !!}
    {!! Form::text('codigo_strix', null, ['class' => 'form-control']) !!}
</div>

<!-- Centro Custo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('centro_custo', 'Centro de Custo:') !!}
    {!! Form::text('centro_custo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('cursos.index') !!}" class="btn btn-default">Cancelar</a>
</div>