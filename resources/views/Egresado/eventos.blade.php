@extends('Egresado.panel')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Los eventos en los que participaste</h3>
        <a href="" data-target="#modal-create" data-toggle="modal">
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
                    @foreach ($eventos as $item)
                        <tr>
                            <td> {{$item->event_name}} </td>
                            <td> {{$item->institution}} </td>
                            <td> {{$item->condition}} </td>
                            <td> {{$item->type}} </td>
                            <td>
                                <a href="" data-target="" data-toggle="modal"><button class="btn btn-default"><span class="fa fa-pencil"></span> Editar</button></a>
                                <a href=""  data-target="" data-toggle="modal"><button class="btn btn-default"><span class="fa fa-search-plus"></span> Más info</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @include('Egresado.create')
        </div>
    </div>
</div>
@endsection