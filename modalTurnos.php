<?php
 

  include_once 'lib/conexion.php';
  include_once 'lib/crud.php';
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
          
          <table cellpadding="5">
            <tr>
              
              <!-- Select Paciente -->
              <td> 
                <label>Paciente</label> 
              </td>
          		<td>
                  <select name="id_paciente" id="id_paciente" required>
                      <!-- <option value="0"></option> -->
                        <?php while($paciente=mysqli_fetch_object($lista_pacientes)) {
                          echo "<option value=\"$paciente->ID_paciente\">$paciente->dni - $paciente->apellido $paciente->nombre</option>"; 
                         } ?>
                  </select> 
              </td>
            </tr>

            <tr>
              <!-- Select Especialista -->
              <td>
        			   <label>Especialista</label>
              </td>
              <td>
                <select name="id_especialista" id="id_especialista" required>
                    <!--<option value="0"></option> -->
                      <?php while($especialista=mysqli_fetch_object($lista_doctores)) {
                        echo "<option value=\"$especialista->ID_usuario\">$especialista->apellido $especialista->nombre</option>"; 
                       } ?>
                </select>
              </td>
            </tr>

            <tr>
              <!-- Fecha -->
              <td>
                <label>FECHA: </label> 
              </td>
              <td>
                <input type="date" name="fecha" id="fecha" required>

                <!-- Hora -->
                <label>HORA: &nbsp;</label>
                <select name="id_hora" id="id_hora" required>


                </select>
              </td>
            </tr>
          </table>

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

    // Reservar Turno
    // con control de campos vacíos
    $('#btnReservar').click(function(){

    /*  $pac = $('#id_paciente').val();

      if ($pac != ""){

        alert($pac);

        $esp = $('#id_especialista').val();

        if ($esp != ""){ */

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

  


  /* buscar los turnos disponibles (hs) 
  segun la Fecha seleccionada */
  $('#fecha').on('change',function(){

    var dia = $('#fecha').val();

    $.ajax ({
      type:"POST",
      data: {"dia": dia},
      url: "funciones/obtenerHs.php",
      success: function(response){

          $('#id_hora').html(' ');
          ls_horas=jQuery.parseJSON(response);
          
          console.log(ls_horas); 

          ls_horas.forEach(function(elem, index){
            $("#id_hora").append("<option value='"+elem.id_horario+"'>"+elem.hora+"</option>");
          }); 
      }
  }); 
  });
});
</script>


