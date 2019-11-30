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
          
      			<label>Nombre</label>
      			<input type="text" class="form-control input-sm" id="nombre" name="nombre" required>
      			<label>Apellido</label>
      			<input type="text" class="form-control input-sm" id="apellido" name="apellido" required>
      			<label>Telefono</label>
            <input type="text" class="form-control input-sm" id="telefono" name="telefono" minlength="10">
            <label>DNI</label>
            <input type="text" class="form-control input-sm" id="dni" name="dni" minlength="7" required>
              <select name="estado">
                <?php echo $item_paciente; ?>

            </select>
    		  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button id="btnAgregar" type="submit" class="btn btn-primary">Agregar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php
  include_once 'lib/conexion.php';
  $cnn = conectar();
  
  $sql = "SELECT * FROM tbl_pacientes";
      
  $lista_pacientes = mysqli_query($cnn, $sql);

  $item_paciente="";
  //if ($lista_pacientes->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
  //{
      //$lista_pacientes="";

    //while($paciente=mysqli_fetch_object($lista_pacientes)){
    //$x_ID=$paciente->ID_paciente;
   // $x_dni=$paciente->dni;


      while($paciente=mysqli_fetch_object($lista_pacientes))
      // while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
      {
        $item_paciente =" <option value='".$paciente->dni."'>".$paciente->ID_paciente."</option>"; 
        echo "<script type='text/javascript'>alert('$item_paciente');</script>";
        
      }
  //}

  ?>