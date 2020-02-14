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
	
	$hoy = date("Y-m-d"); 

	/* $sql= "SELECT tbl_usuarios.nombre AS esp_nom,tbl_usuarios.apellido AS esp_ape,tbl_turnos.fecha AS fecha,tbl_turnos.habilitado AS habilitado,tbl_turnos.id_turno AS id_turno,tbl_pacientes.nombre AS pac_nom,tbl_pacientes.apellido AS pac_ape,tbl_horarios.hora AS hora 
		FROM ((tbl_turnos join tbl_usuarios ON tbl_turnos.id_especialista = tbl_usuarios.ID_usuario) 
			INNER JOIN tbl_pacientes ON tbl_turnos.id_paciente = tbl_pacientes.ID_paciente) 
			INNER JOIN tbl_horarios ON tbl_turnos.id_hora = tbl_horarios.id_horario
		WHERE ((tbl_turnos.habilitado = 1) AND (tbl_turnos.fecha='" . $hoy . "'));"; */

	//echo $hoy;
	//echo $sql;

 	$sql= "select * from vista_turnos where fecha='". $hoy . "';";

	$resultado=mysqli_query($cnn,$sql);
	
	while($turno=mysqli_fetch_object($resultado)){
		$x_fecha=$turno->fecha;
		$x_hora=$turno->hora;
		$x_esp=$turno->esp_ape ." ". $turno->esp_nom;
		$x_nom=$turno->pac_ape ." ". $turno->pac_nom;

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


