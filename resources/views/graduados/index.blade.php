@extends('layouts.admin')
@section('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de egresados
                <a href="" data-target="#modal-create" data-toggle="modal">
                    <button class="btn btn-success">Nuevo</button>
                </a>
            </h3>
        </div>
    </div>

    <div class="row" id="app">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombres</th>
                        <th>DNI</th>
                        <th>Operacion</th>
                    </thead>
                    @foreach($graduados as $graduado)
                        <td>{{ $graduado->id }}</td>
                        <td>{{ $graduado->paternal }}</td>
                        <td>{{ $graduado->maternal }}</td>
                        <td>{{ $graduado->name }}</td>
                        <td>{{ $graduado->dni }}</td>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection