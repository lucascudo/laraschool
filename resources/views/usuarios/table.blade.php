<div class="table-responsive">
    <table class="table" id="usuarios-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th colspan="3">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td>{!! $usuario->name !!}</td>
                <td>{!! $usuario->email !!}</td>
                <td>
                    {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('usuarios.show', [$usuario->id]) !!}" class='btn btn-primary'>
                            <i class="glyphicon glyphicon-eye-open"></i>
                        </a>
                        <a href="{!! route('usuarios.edit', [$usuario->id]) !!}" class='btn btn-primary'>
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