<!-- Modal -->
<div class="modal fade" id="agregarDatosPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmNuevoPaciente" action="pacientes_guardar.php" method="post" >
    			<label>Nombre</label>
    			<input type="text" class="form-control input-sm" id="nombre" name="nombre">
    			<label>Apellido</label>
    			<input type="text" class="form-control input-sm" id="apellido" name="apellido">
    			<label>Telefono</label>
    			<input type="text" class="form-control input-sm" id="telefono" name="telefono">
    			<label>DNI</label>
    			<input type="text" class="form-control input-sm" id="dni" name="dni">		
  		  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button id="btnAgregar" type="submit" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>