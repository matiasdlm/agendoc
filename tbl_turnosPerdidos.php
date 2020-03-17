<table class="table table-hover table-condensed" id="dataTableTurnosPerdidos" width="100%" cellspacing="0">
  <thead>
	<tr style="background-color: #5858FA; color:white; font-weight:bold;">
	  <th>FECHA</th>
	  <th>HORA</th>
	  <th>Paciente</th>
	  <th>Especialista</th>
	  <th style="text-align:center;">Reasignar</th>
	</tr>
  </thead>
  <tfoot>
  	<tr style="background-color: #A4A4A4; color:white; font-weight:bold;">
	  <td>FECHA</td>
	  <td>HORA</tf>
	  <td>Paciente</td>
	  <td>Especialista</td>
	  <th style="text-align:center;">Reasignar</th>
	</tr>
  </tfoot>
  <tbody> 
  <?php 
	require_once "lib/conexion.php";
	$cnn = conectar();
	$hoy = date("Y-m-d"); 

 	$sql= "select * from vista_turnos where atendido='0' and fecha between (CURDATE()-15) and '". $hoy . "';";
	
	$resultado=mysqli_query($cnn,$sql);
	
	while($turno=mysqli_fetch_object($resultado)){
		$x_fecha=$turno->fecha;
		$x_hora=$turno->hora;
		$x_esp=$turno->esp_ape ." ". $turno->esp_nom;
		$x_nom=$turno->pac_ape ." ". $turno->pac_nom;
		$x_idturno=$turno->id_turno;

	?>
	<tr>
	  <td><?php echo $x_fecha ?></td>
	  <td><?php echo $x_hora ?></td>
	  <td><?php echo $x_nom ?></td>
	  <td><?php echo $x_esp ?></td>

	  <td style="text-align:center;">
		<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditarTurnoPerdido" onclick="editarTurnoPerdido('<?php echo $x_idturno ?>')" style="font-size:10px;">
			<span class="fa fa-pencil-square-o" style="font-size:16px;" ></span>
		  </span>
		</td>

	</tr>
	<?php } ?>
  </tbody>
</table>


<script type="text/javascript">
	$(document).ready(function() {
		$('#dataTableTurnosPerdidos').DataTable();
	});
</script>


