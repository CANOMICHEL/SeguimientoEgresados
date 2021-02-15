@extends('layouts.admin')
@section('panel')
    <li class="header"><span>Egresado</span></li>
    <li class="treeview">
        <a href="#">
        <i class="fa fa-user"></i>
        <span>Perfil</span>
        <i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-id-badge"></i> Mis datos</a></li>
        <li><a href="#"><i class="fa fa-pencil"></i> Editar información</a></li>
        <li><a href=" {{route('logout')}}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> Cerrar sesión</a>
                        <form action=" {{route('logout')}} " id="logout-form" method="POST" style="display:none;">
                            @csrf
                        </form>
        </ul>
    </li>

    <li class="treeview">
        <a href="#">
        <i class="fa fa-th"></i>
        <span>Seguimiento</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Actividad profesional</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Proyectos de investigación</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Participación en eventos académicos</a></li>
        <li><a href="postgraduates"><i class="fa fa-circle-o"></i> Estudios postgrado</a></li>
        </ul>
    </li>
@endsection