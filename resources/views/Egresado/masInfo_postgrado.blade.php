<div class="modal fade modal-slide-in-left" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-masInfo-postgrado{{$item->id}}">
	<form action="" method="" >
		@csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Más informacion del Estudio de actualizacion o capacitacion</h3>
				</div>
				<div class="modal-body col-sm-12">
                    <div class="col-sm-6">
						<div class="form-group">
                            <label for="nombre">Tipo formacion profesional</label>
                            <input type="text" name="type" class="form-control" placeholder="tipo de formación" value="{{$item->type}}" readonly>
						</div>

						<div class="form-group">
							<label for="nombre">Nombre de la actividad de formación profesional</label>
							<input type="text" name="activity_name" class="form-control" placeholder="Nombre de la actividad" value="{{$item->activity_name}}" readonly>
						</div>

            			<div class="form-group">
							<label for="document">Documento que sustenta dicha actividad</label>
							<input type="text" name="document" class="form-control" placeholder="documento" value="{{$item->document}}" readonly>

						</div>

						<div class="form-group">
							<label for="nombre">Descripción</label>
							<textarea name="description" rows="4" class="form-control" placeholder="Descripción" value="{{$item->description}}" readonly></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
                            <label for="nombre">Institución</label>
                            <input type="text" name="institution" class="form-control" placeholder="Institucion" value="{{$item->institution}}" readonly>
						</div>

						<div class="form-group">
								<label for="nombre">Fecha inicio</label>
								<input type="date" class="form-control" name="start_date" value="{{$item->start_date}}" readonly>
						</div>
						<div class="form-group">
							<label for="nombre">Fecha fin</label>
							<input type="date" class="form-control" name="end_date" value="{{$item->end_date}}" readonly>
						</div>
					</div>
                </div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					
				</div>
			</div>
		</div>
	</form>
	</div>
