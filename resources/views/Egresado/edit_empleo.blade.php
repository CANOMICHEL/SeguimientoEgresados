<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-edit-empleo{{ $job->id }}">
	<form action="{{route('jobs.update',$job->id)}}" method="POST" >
        @csrf
        @method('PUT')
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Editar trabajo</h3>
				</div>
				<div class="modal-body col-sm-12">
                    <div class="col-sm-6">
						<div class="form-group">
              <label for="nombre">Institución</label>
              <input type="text" name="institution" class="form-control" value="{{$job->institution}}">
						</div>

						<div class="form-group">
							<label for="nombre">Nombre de la actividad</label>
							<input type="text" name="activity_name" class="form-control" placeholder="Nombre de la actividad" value="{{$job->activity_name}}">
						</div>

						<div class="form-group">
							<label for="nombre">Posicion</label>
							<input type="text" name="position" class="form-control" placeholder="Posicion" value="{{$job->position}}">
						</div>

						<div class="form-group">
							<label for="nombre">Descripción</label>
							<textarea name="description" rows="4" class="form-control" placeholder="Descripción" value="">{{$job->description}}</textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
                            <label for="nombre">Rubro de la institución</label>
                            <input type="text" name="institution_heading" class="form-control" placeholder="Rubro de la institución" value="{{$job->institution_heading}}">
						</div>

						<div class="form-group">
								<label for="nombre">Tipo de institución</label>
								<input type="text" class="form-control" name="institution_type" placeholder="Tipo de institución" value="{{$job->institution_type}}">
						</div>
						<div class="form-group">
							<label for="nombre">Fecha de inicio</label>
							<input type="date" class="form-control" name="start_date" value="{{$job->start_date}}">
						</div>
                        <div class="form-group">
							<label for="nombre">Fecha de fin</label>
							<input type="date" class="form-control" name="end_date" value="{{$job->end_date}}">
						</div>
					</div>
        </div>
        <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-success">
						<span class="fa-floppy-o"></span> Actualizar
					</button>
				</div>
			</div>
		</div>
	</form>
</div>
