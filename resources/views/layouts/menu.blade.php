<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{!! route('home') !!}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
</li>

<li class="{{ Request::is('alunos*') ? 'active' : '' }}">
    <a href="{!! route('alunos.index') !!}"><i class="fa fa-edit"></i><span>Alunos</span></a>
</li>

<li class="{{ Request::is('cursos*') ? 'active' : '' }}">
    <a href="{!! route('cursos.index') !!}"><i class="fa fa-edit"></i><span>Cursos</span></a>
</li>

<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{!! route('usuarios.index') !!}"><i class="fa fa-edit"></i><span>Usuários</span></a>
</li>

