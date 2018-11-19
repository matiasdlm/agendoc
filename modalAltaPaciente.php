<!-- Modal Nuevo-->
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
        <form id="frmNuevoPaciente" >
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


<!-- Modal Modif-->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmNuevoPaciente_editar" >
          <input type="text" hidden="" id="id_paciente" name="id_paciente">
          <label>Nombre</label>
          <input type="text" class="form-control input-sm" id="nombre" name="nombre_editar">
          <label>Apellido</label>
          <input type="text" class="form-control input-sm" id="apellido" name="apellido_editar">
          <label>Telefono</label>
          <input type="text" class="form-control input-sm" id="telefono" name="telefono_editar">
          <label>DNI</label>
          <input type="text" class="form-control input-sm" id="dni" name="dni_editar">   
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button id="btnActualizar" type="submit" class="btn btn-warning">Actualizar</button>
      </div>
    </div>
  </div>
</div>