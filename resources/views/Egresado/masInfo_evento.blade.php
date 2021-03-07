<div class="modal fade modal-slide-in-right" aria-hidden="true"
		role="dialog" tabindex="-1" id="modal-masInfo-event{{$event->id}}">
	<form action="" method="" >
    @csrf
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<h3 class="modal-title">Más información del evento</h3>
				</div>
				<div class="modal-body col-sm-12">
          <div class="col-sm-6">
						<div class="form-group">
              <label for="nombre">Tipo de evento</label>
              <input type="text" name="type" class="form-control" value="{{$event->type}}" readonly>
						</div>

						<div class="form-group">
							<label for="nombre">Nombre de evento</label>
							<input type="text" name="event_name" class="form-control" value="{{$event->event_name}}" readonly>
						</div>

						<div class="form-group">
							<label for="nombre">Condición</label>
							<input type="text" name="condition" class="form-control" value="{{$event->condition}}" readonly>
						</div>

						<div class="form-group">
							<label for="nombre">Descripción</label>
							<textarea name="description" rows="4" class="form-control" value="" readonly>{{$event->description}}</textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
                            <label for="nombre">Institución</label>
                            <input type="text" name="institution" class="form-control" value="{{$event->institution}}" readonly>
						</div>

						<div class="form-group">
								<label for="nombre">Fecha inicio</label>
								<input type="date" class="form-control" name="start_date" value="{{$event->start_date}}" readonly>
						</div>
						<div class="form-group">
							<label for="nombre">Fecha fin</label>
							<input type="date" class="form-control" name="end_date" value="{{$event->end_date}}" readonly>
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
