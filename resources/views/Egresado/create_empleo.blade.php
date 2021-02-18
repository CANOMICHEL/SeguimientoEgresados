<!-- Debe crear un formulario modal para registrar nuevos empleos
PUEDES GUIARTE CON EL ARCHIVO create_event.blade.php
-->
<div class="modal fade modal-slide-in-left" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-create-empleo">
	<form action="{{ route('jobs.store') }}" method="POST" >
		@csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Agregar trabajo</h3>
				</div>
				<div class="modal-body col-sm-12">
                    <div class="col-sm-6">
						<div class="form-group">
                            <label for="nombre">Institución</label>
                            <input type="text" name="institution" class="form-control" placeholder="tipo de formación">
						</div>

						<div class="form-group">
							<label for="nombre">Nombre de la actividad</label>
							<input type="text" name="activity_name" class="form-control" placeholder="Nombre de la actividad">
						</div>

						<div class="form-group">
							<label for="nombre">Posicion</label>
							<input type="text" name="position" class="form-control" placeholder="Posicion">
						</div>

						<div class="form-group">
							<label for="nombre">Tipo de institución</label>
							<textarea name="institution_type" rows="4" class="form-control" placeholder="Tipo de institución"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
                            <label for="nombre">Rubro de la institución</label>
                            <input type="text" name="institution_heading" class="form-control" placeholder="Rubro de la institución">
						</div>

						<div class="form-group">
								<label for="nombre">Descripcion</label>
								<input type="text" class="form-control" name="description" placeholder="Descripcion">
						</div>
						<div class="form-group">
							<label for="nombre">Fecha de inicio</label>
							<input type="date" class="form-control" name="start_date" >
						</div>
                        <div class="form-group">
							<label for="nombre">Fecha de fin</label>
							<input type="date" class="form-control" name="end_date">
						</div>
					</div>
                </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-success">
						<span class="fa-floppy-o"></span> Guardar
					</button>
				</div>
			</div>
		</div>
	</form>
	</div>
