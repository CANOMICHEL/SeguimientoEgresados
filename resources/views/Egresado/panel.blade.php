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
        <span>Formación y empleo</span>
            <i class="fa fa-angle-right pull-right"></i>
        </a>
        <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-briefcase"></i> Actividad profesional</a></li>
        <li><a href="investigations"><i class="fa fa-flask"></i> Proyectos de investigación</a></li>
        <li><a href="events"><i class="fa fa-certificate"></i> Eventos académicos</a></li>
        <li><a href="postgraduates"><i class="fa fa-graduation-cap"></i> Estudios postgrado</a></li>
        </ul>
    </li>
@endsection