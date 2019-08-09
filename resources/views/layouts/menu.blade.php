<li class="header">Inscrições</li>

<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{!! route('home') !!}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
</li>

<li class="header">Gestão</li>

<li class="{{ Request::is('cursos*') ? 'active' : '' }}">
    <a href="{!! route('cursos.index') !!}"><i class="fa fa-edit"></i><span>Cursos</span></a>
</li>

<li class="{{ Request::is('concursos*') ? 'active' : '' }}">
    <a href="{!! route('concursos.index') !!}"><i class="fa fa-edit"></i><span>Concursos</span></a>
</li>

<li class="{{ Request::is('processosSeletivos*') ? 'active' : '' }}">
    <a href="{!! route('processosSeletivos.index') !!}"><i class="fa fa-edit"></i><span>Processos Seletivos</span></a>
</li>

<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{!! route('usuarios.index') !!}"><i class="fa fa-edit"></i><span>Usuários</span></a>
</li>