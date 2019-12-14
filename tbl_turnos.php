<table class="table table-hover table-condensed" id="dataTableTurnos" width="100%" cellspacing="0">
  <thead>
	<tr style="background-color: #5858FA; color:white; font-weight:bold;">
	  <th>FECHA</th>
	  <th>HORA</th>
	  <th>Paciente</th>
	  <th>Especialista</th>
	</tr>
  </thead>
  <tfoot>
  	<tr style="background-color: #A4A4A4; color:white; font-weight:bold;">
	  <td>FECHA</td>
	  <td>HORA</tf>
	  <td>Paciente</td>
	  <td>Especialista</td>
	</tr>
  </tfoot>
  <tbody> 
  <?php 
	require_once "lib/conexion.php";
	$cnn = conectar();
	
	$sql="select * from vista_turnos;";
	$resultado=mysqli_query($cnn,$sql);
	
	while($turno=mysqli_fetch_object($resultado)){
		$x_fecha=$turno->fecha;
		$x_hora=$turno->hora;
		$x_esp=$turno->apeEspecialista;
		$x_nom=$turno->apellido ." ". $turno->nombre;

	?>
	<tr>
	  <td><?php echo $x_fecha ?></td>
	  <td><?php echo $x_hora ?></td>
	  <td><?php echo $x_nom ?></td>
	  <td><?php echo $x_esp ?></td>

	</tr>
	<?php } ?>
  </tbody>
</table>


<script type="text/javascript">
	$(document).ready(function() {
		$('#dataTableTurnos').DataTable();
	} );
</script>


