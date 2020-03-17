<table class="table table-hover table-condensed" id="dataTable" width="100%" cellspacing="0">
  <thead>
	<tr style="background-color: #5858FA; color:white; font-weight:bold;">
	  <th>N° Historia</th>
	  <th>DNI</th>
	  <th>Apellido y Nombre</th>
	  <th>Telefono</th>
	</tr>
  </thead>
  <tfoot>
  	<tr style="background-color: #A4A4A4; color:white; font-weight:bold;">
	  <td>N° Historia</td>
	  <td>DNI</td>
	  <td>Apellido y Nombre</td>
	  <td>Telefono</td>
	</tr>
  </tfoot>
  <tbody> 
  <?php 
	include_once 'lib/conexion.php';
	$cnn = conectar();
	
	$sql="select * from tbl_pacientes where habilitado='1';";
	$resultado=mysqli_query($cnn,$sql);
	?>
	
	<?php while($paciente=mysqli_fetch_object($resultado)){
		$x_ID=$paciente->ID_paciente;
		switch (strlen($x_ID)) {
			case 1:
				$x_ID="000".$x_ID;
				break;
			case 2:
				$x_ID="00".$x_ID;
				break;
			case 3:
				$x_ID="0".$x_ID;
				break;
		}
		$x_dni=$paciente->dni;
		$x_nom=$paciente->apellido ." ". $paciente->nombre;
		$x_telefono=$paciente->telefono;
		?>
	<tr>
	  <td><?php echo "<a href='paciente.php?xesp=$id_usuario&xid=$x_ID&xnom=$x_nom'> $x_ID </a>" ?></td>
	  <td><?php echo $x_dni ?></td>
	  <td><?php echo $x_nom?></td>
	  <td><?php echo $x_telefono ?></td>
	</tr>
	<?php } ?>
  </tbody>
</table>

<script type="text/javascript">
	$(document).ready(function() {
		$('#dataTable').DataTable();
	} );
</script>