<!-- ---------------
    Modal BAJA TURNO
    ------------- -->
<div class="modal fade" id="modalBajaTurno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancelar Turno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frm_BorrarTurno">
        <!-- Modal content-->
            <div class="modal-body">

              <input type="" hidden="" id="id_turno_borrar" name="id_turno_borrar">
              <!-- <input class="form-control" id="nombre_borrar" name="apellido_borrar" disabled>
              <input type="text" class="form-control input-sm" id="apellido_borrar" name="apellido_borrar" required>  --> 

              <div class="alert alert-danger">¿ Confirma la baja ?</div>

            </div>
            <div class="modal-footer">
                <button type="submit" id="btnBorrarTurno" class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span> SÍ</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
            </div>

    </form>
    </div>
  </div>
</div>



<!-- ---------------
    Modal RECEPCIONAR TURNO
    ------------- -->
<div class="modal fade" id="modalRecepcionar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recepcionar Paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frm_RecepcionarPaciente">
        <!-- Modal content-->
            <div class="modal-body">

              <input type="" hidden="" id="id_turno_recepcionar" name="id_turno_recepcionar">
              <!-- <input class="form-control" id="nombre_borrar" name="apellido_borrar" disabled>
              <input type="text" class="form-control input-sm" id="apellido_borrar" name="apellido_borrar" required>  --> 

              <div class="alert alert-success">¿ Confirma recepción ?</div>

            </div>
            <div class="modal-footer">
                <button type="submit" id="btnRecepcionarTurno" class="btn btn-success" ><span class="glyphicon glyphicon-trash"></span> SÍ</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
            </div>

    </form>
    </div>
  </div>
</div>