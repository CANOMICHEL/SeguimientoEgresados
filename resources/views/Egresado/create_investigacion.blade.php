<div class="modal fade modal-slide-in-left" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-create-investigacion">
	<form action="{{ route('investigations.store') }}" method="POST" >
		@csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Agregar Registro</h3>
				</div>
				<div class="modal-body col-sm-12">
          <div class="col-sm-6">
						<div class="form-group">
              <label for="nombre">Tipo de proyecto</label>
              <select name="type" class="form-control" >
                <option value="INVESTIGACIÓN">PROYECTO DE INVESTIGACIÓN</option>
                <option value="PUBLICACIÓN">PUBLICACIÓN</option>
              </select>
						</div>

						<div class="form-group">
							<label for="draft_name">Nombre del proyecto</label>
							<input name="draft_name" type="text" class="form-control" placeholder="Nombre del proyecto">
						</div>

						<div class="form-group">
							<label for="description">Descripción</label>
							<textarea name="description" rows="4" class="form-control" placeholder="Descripción"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
              <label for="institution">Institución</label>
              <input name="institution" type="text" class="form-control" placeholder="Institución (si corresponde)">
						</div>

						<div class="form-group">
								<label for="nombre">Fecha</label>
								<input type="date" class="form-control" name="date">
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
