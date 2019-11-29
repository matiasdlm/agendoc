<!-- ------------
    Modal NUEVO
    ---------- -->
<div class="modal fade" id="agregarDatosPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevos Paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmNuevoPaciente" >
        <div class="modal-body">
          
      			<label>Nombre</label>
      			<input type="text" class="form-control input-sm" id="nombre" name="nombre" required>
      			<label>Apellido</label>
      			<input type="text" class="form-control input-sm" id="apellido" name="apellido" required>
      			<label>Telefono</label>
            <input type="text" class="form-control input-sm" id="telefono" name="telefono" minlength="10">
            <label>DNI</label>
            <input type="text" class="form-control input-sm" id="dni" name="dni" minlength="7" required>
    		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button id="btnAgregar" type="submit" class="btn btn-primary">Agregar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- ---------------
    Modal MODIFICAR
    ------------- -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmNuevoPaciente_editar" >
        <div class="modal-body">

            <input type="text" hidden="" id="id_paciente_editar" name="id_paciente_editar">
            <label>Nombre</label>
            <input type="text" class="form-control input-sm" id="nombre_editar" name="nombre_editar" required>
            <label>Apellido</label>
            <input type="text" class="form-control input-sm" id="apellido_editar" name="apellido_editar" required>
            <label>Telefono</label>
            <input type="text" class="form-control input-sm" id="telefono_editar" name="telefono_editar" minlength="10">
            <label>DNI</label>
            <input type="text" class="form-control input-sm" id="dni_editar" name="dni_editar" minlength="7" required>  
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button id="btnActualizar" type="submit" class="btn btn-warning">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- ---------------
    Modal BORRAR
    ------------- -->
<div class="modal fade" id="modalBorrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Borrar Paciente</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmNuevoPaciente_borrar">
        <!-- Modal content-->
            <div class="modal-body">

              <input type="" hidden="" id="id_paciente_borrar" name="id_paciente_borrar">
              <!-- <input class="form-control" id="nombre_borrar" name="apellido_borrar" disabled>
              <input type="text" class="form-control input-sm" id="apellido_borrar" name="apellido_borrar" required>  --> 

              <div class="alert alert-danger">¿ Confirma la baja ?</div>

            </div>
            <div class="modal-footer">
                <button type="submit" name="borrarPaciente" class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span> SÍ</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
            </div>

    </form>
    </div>
  </div>
</div>

