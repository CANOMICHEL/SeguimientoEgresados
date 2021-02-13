<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-create">
	<form action="{{ route('postgraduates.store') }}" method="POST" >
		@csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Agregar estudios de postgrado</h3>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                            <label for="nombre">Tipo formación</label>
                            <input type="text" name="type" class="form-control" placeholder="tipo de formación">
                    </div>

                    <div class="form-group">
                            <label for="nombre">Nombre de la actividad</label>
                            <input type="text" name="name" class="form-control" placeholder="Nombre de la actividad">
                    </div>

                    <div class="form-group">
                            <label for="nombre">Descripción</label>
                            <input type="text" name="description" class="form-control" placeholder="Descripción de la actividad">
                    </div>
                </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary" onclick="alerta()">Guardar</button>
				</div>
			</div>
		</div>
	</form>
	</div>
