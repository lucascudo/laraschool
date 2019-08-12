<div class="table-responsive">
    <table class="table" id="alunos-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($alunos as $aluno)
            <tr>
                <td>{!! $aluno->nome !!}</td>
                <td>
                    {!! Form::open(['route' => ['alunos.destroy', $aluno->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('alunos.show', [$aluno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('alunos.edit', [$aluno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
