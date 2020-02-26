<!-- ---------------
    Modal MODIFICAR TURNO PERDIDO
    ------------- -->
<div class="modal fade" id="modalEditarTurnoPerdido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Turno</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmEditarTurno" >
        <div class="modal-body">
          
          <table cellpadding="5">
            <tr>
              <!-- Select Paciente -->
              <td> 
                <label>Paciente</label> 
              </td>
              <td>
                  <input type="text" hidden="" id="id_turno_editar" name="id_turno_editar">
                  <input type="text" class="form-control input-sm" id="paciente" name="paciente" disabled="">
              </td>
            </tr>

            <tr>
              <td>
                 <label>Especialista</label>
              </td>
              <td>
                  <input type="text" class="form-control input-sm" id="especialista" name="especialista" disabled>
              </td>
            </tr>

            <tr>
              <!-- Fecha -->
              <td>
                <label>FECHA: </label> 
              </td>
              <td>
                <input type="date" name="fecha_editar" id="fecha_editar" required>

                <!-- Hora -->
                <label>HORA: &nbsp;</label>
                <select name="id_hora_editar" id="id_hora_editar" required>


                </select>
              </td>
            </tr>
          </table>

            <br><br>

          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button id="btnActualizarTurno" type="submit" class="btn btn-primary">Reasignar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">
  var today = new Date().toISOString().split('T')[0];
  document.getElementsByName("fecha_editar")[0].setAttribute('min', today);
</script>


<script type="text/javascript">
   $(document).ready(function(){
    
      $('#fecha_editar').on('change',function(){

        var dia = $('#fecha_editar').val();

        $.ajax ({
          type:"POST",
          data: {"dia": dia},
          url: "funciones/obtenerHs.php",
          success: function(response){

              $('#id_hora_editar').html(' ');
              ls_horas=jQuery.parseJSON(response);
              
              console.log(ls_horas); 

              ls_horas.forEach(function(elem, index){
                $("#id_hora_editar").append("<option value='"+elem.id_horario+"'>"+elem.hora+"</option>");
              }); 
          }
      }); 
      });
  });

</script>
