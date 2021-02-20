<div class="modal fade modal-slide-in-left" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-create-postgrado">
	<form action="{{ route('postgraduates.store') }}" method="POST" >
		@csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Agregar Postgrado</h3>
				</div>
				<div class="modal-body col-sm-12">
                    <div class="col-sm-6">
						<div class="form-group">
                            <label for="nombre">Tipo formacion profesional</label>
                            <input type="text" name="type" class="form-control" placeholder="tipo de formación">
						</div>

						<div class="form-group">
							<label for="nombre">Nombre de la actividad de formación profesional</label>
							<input type="text" name="activity_name" class="form-control" placeholder="Nombre de la actividad">
						</div>

                        <div class="form-group">
							<label for="nombre">Documento que sustenta dicha actividad(imagen)</label>
							<input type="text" name="document" class="form-control" placeholder="documento">
						</div>

						<div class="form-group">
							<label for="nombre">Descripción</label>
							<textarea name="description" rows="4" class="form-control" placeholder="Descripción"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
                            <label for="nombre">Institución</label>
                            <input type="text" name="institution" class="form-control" placeholder="Institucion">
						</div>

						<div class="form-group">
								<label for="nombre">Fecha inicio</label>
								<input type="date" class="form-control" name="start_date">
						</div>
						<div class="form-group">
							<label for="nombre">Fecha fin</label>
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
