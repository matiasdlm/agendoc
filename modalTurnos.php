<?php
  include_once 'lib/conexion.php';
  $cnn = conectar();
  
  $sql = "SELECT * FROM tbl_pacientes ORDER BY apellido";
      
  $lista_pacientes = mysqli_query($cnn, $sql);

  $sql = "SELECT * FROM tbl_usuarios WHERE id_rol='2' ORDER BY apellido";
      
  $lista_doctores = mysqli_query($cnn, $sql);

  $sql = "SELECT * FROM tbl_horarios";
      
  $lista_horas = mysqli_query($cnn, $sql);
?>


<!-- ------------
    Modal NUEVO TURNO
    ---------- -->
<div class="modal fade" id="agregarTurno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reserva de Turnos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmNuevoTurno" >
        <div class="modal-body">
          
            <!-- Select Paciente -->
      			<label>Paciente</label>
              <select name="id_paciente" id="id_paciente">
                  <option value="0"></option>
                    <?php while($paciente=mysqli_fetch_object($lista_pacientes)) {
                      echo "<option value=\"$paciente->ID_paciente\">$paciente->dni - $paciente->apellido $paciente->nombre</option>"; 
                     } ?>
              </select> 
            <br>

            <!-- Select Especialista -->
      			<label>Especialista</label>
              <select name="id_especialista" id="id_especialista">
                  <option value="0"></option>
                    <?php while($especialista=mysqli_fetch_object($lista_doctores)) {
                      echo "<option value=\"$especialista->ID_usuario\">$especialista->apellido $especialista->nombre</option>"; 
                     } ?>
              </select>
            <br>

            <!-- Fecha -->
      			<label>FECHA: </label> 
            <input type="date" name="fecha" id="fecha" required>

            <!-- Hora -->

              <select name="id_hora" id="id_hora">
                  <option value="0"></option>
                    <?php while($hora=mysqli_fetch_object($lista_horas)) {
                      echo "<option value=\"$hora->id_horario\">$hora->hora</option>"; 
                     } ?>
              </select>
            <br><br>

    		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button id="btnReservar" type="submit" class="btn btn-primary">Reservar</button>
        </div>
      </form>
    </div>
  </div>
</div>



<script>
  var today = new Date().toISOString().split('T')[0];
  document.getElementsByName("fecha")[0].setAttribute('min', today);
</script>




<!-- Submit Reservar turno -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#btnReservar').click(function(){
      datos=$('#frmNuevoTurno').serialize();
      
      $.ajax({
        type:"POST",
        data:datos,
        url:"agregarTurno.php",
        success:function(r){
          if(r==1){
            $('#frmNuevoTurno')[0].reset();
            $('#tablaDataTableTurnos').reload('tbl_turnos.php');
            alert("Turno Reservado!");
            window.location.reload();
          }else{
            alert("Fallo al reservar Turno");
          }
        }
      });
    });
  });
</script>