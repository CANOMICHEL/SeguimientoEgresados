@extends('Egresado.panel')
@section('contenido')

	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3><b>Listado de estudios postgrado</b>
				<a href="" data-target="#modal-create" data-toggle="modal">
					<button class="btn btn-success"><b>+ Nuevo</b></button>
                </a>
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-sm">
					<thead>
						<th>Id</th>
                        <th>Nombre</th>
                        <th>Tipo Documento</th>
						<th>Nro Doc. Identidad</th>
                        <th>Pais Origen</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Operaciones</th>

                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
                </table>
                @include('Egresado.create')
			</div>
		</div>
	</div>

@endsection
