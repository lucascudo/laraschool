<div class="table-responsive">
    <table class="table" id="cursos-table">
        <thead>
            <tr>
                <th>Título</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <td>{!! $curso->titulo !!}</td>
                <td>
                    {!! Form::open(['route' => ['cursos.destroy', $curso->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('cursos.show', [$curso->id]) !!}" class='btn btn-primary'>
                            <i class="glyphicon glyphicon-eye-open"></i>
                        </a>
                        <a href="{!! route('cursos.edit', [$curso->id]) !!}" class='btn btn-primary'>
                            <i class="glyphicon glyphicon-edit"></i>
                        </a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Tem certeza que deseja deletar?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>