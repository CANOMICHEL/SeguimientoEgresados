@extends('Egresado.panel')
@section('titulo')
<h3>Seguimiento a la participación en eventos académicos y/o científicos</h3>
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <a href="" data-target="#modal-create-event" data-toggle="modal">
            <button class="btn btn-primary"><span class="fa fa-plus-circle"></span> Agregar </button>
        </a>
    </div>

</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <th>Nombre</th>
                    <th>Institución</th>
                    <th>Condición</th>
                    <th>Tipo</th>
                </thead>
                <tbody>
                    @foreach ($eventos as $event)
                        <tr>
                            <td> {{$event->event_name}} </td>
                            <td> {{$event->institution}} </td>
                            <td> {{$event->condition}} </td>
                            <td> {{$event->type}} </td>
                            <td>
                                <a href="" data-target="#modal-edit-event{{ $event->id }}" data-toggle="modal"><button class="btn btn-default"><span class="fa fa-pencil"></span> Editar</button></a>
                                @include('Egresado.edit_evento')
                                <a href=""  data-target="" data-toggle="modal"><button class="btn btn-default"><span class="fa fa-search-plus"></span> Más info</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @include('Egresado.create_event')
        </div>
    </div>
</div>
@endsection
