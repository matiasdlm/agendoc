<?php
  include_once 'lib/conexion.php';
  $cnn = conectar();
  
  $sql = "SELECT * FROM tbl_pacientes ORDER BY apellido";
      
  $lista_pacientes = mysqli_query($cnn, $sql);

  $sql = "SELECT * FROM tbl_usuarios WHERE id_rol='2' ORDER BY apellido";
      
  $lista_doctores = mysqli_query($cnn, $sql);
?>


<!-- ------------
    Modal NUEVO TURNO
    ---------- -->
<div class="modal fade" id="agregarTurno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevos Paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmNuevoTurno" >
        <div class="modal-body">
          
      			<label>Paciente</label>
              <select id="paciente">
                  <option value="0"></option>
                    <?php while($paciente=mysqli_fetch_object($lista_pacientes)) {
                      echo "<option value=\"$paciente->ID_paciente\">$paciente->dni - $paciente->apellido $paciente->nombre</option>"; 
                     } ?>
              </select> 
            <br>
      			<label>Especialista</label>
              <select id="doctor">
                  <option value="0"></option>
                    <?php while($especialista=mysqli_fetch_object($lista_doctores)) {
                      echo "<option value=\"$especialista->ID_usuario\">$especialista->apellido $especialista->nombre</option>"; 
                     } ?>
              </select>
            <br>
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





<script type="text/javascript">
  function cargarDNI(){
    $.ajax ({
      type:"POST",
      data: "",
      url: "funciones/obtenerListaDniPacientes.php",
      success:function(r){
          datos=jQuery.parseJSON(r);
          $('#id_paciente').val(datos['id_paciente']);
          $('#dni').val(datos['dni']);
      }
    });
  }
</script>

