@extends('layouts.admin')
@section('panel')
    <li class="header"><span>Coordinador</span></li>

    <li class="treeview">
        <a href="#">
        <i class="fa fa-user"></i>
        <span>Perfil</span>
        <i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Mis datos</a></li>
        <li><a href="#"><i class="fa fa-info"></i> Actualizar información</a></li>
        <li><a href=" {{route('logout')}}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> Cerrar sesión</a>
                        <form action=" {{route('logout')}} " id="logout-form" method="POST" style="display:none;">
                            @csrf
                        </form>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
        <i class="fa fa-group"></i>
        <span>Egresados</span>
        <i class="fa fa-angle-right  pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-th-list"></i> Todos los egresados</a></li>
        <li><a href="#"><i class="fa fa-plus-circle"></i> Añadir egresado</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
        <i class="fa fa-th"></i>
        <span>Fichas de seguimiento</span>
            <i class="fa fa-angle-right  pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li><a href="breeds"><i class="fa fa-circle-o"></i> Actividad profesional</a></li>
        <li><a href="breeds"><i class="fa fa-circle-o"></i> Proyectos de investigación</a></li>
        <li><a href="breeds"><i class="fa fa-circle-o"></i> Participación en eventos académicos</a></li>
        <li><a href="breeds"><i class="fa fa-circle-o"></i> Estudios postgrado</a></li>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
        <i class="fa fa-user-plus"></i>
        <span>Usuarios</span>
        <i class="fa fa-angle-right  pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-th-list"></i> Todos los usuarios</a></li>
        <li><a href="#"><i class="fa fa-plus-circle"></i> Añadir usuario</a></li>
        </ul>
    </li>
@endsection