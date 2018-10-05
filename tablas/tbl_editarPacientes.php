<table class="table table-hover table-condensed" id="dataTable" width="100%" cellspacing="0">
  <thead>
	<tr style="background-color: #088A08; color:white; font-weight:bold;">
	  <th>DNI</th>
	  <th>Apellido y Nombre</th>
	  <th>Telefono</th>
	  <th style="text-align:center;">Editar</th>
	  <th style="text-align:center;">Eliminar</th>
	</tr>
  </thead>
  <tfoot>
  	<tr style="background-color: #A4A4A4; color:white; font-weight:bold;">
	  <td>DNI</td>
	  <td>Apellido y Nombre</td>
	  <td>Telefono</td>
	  <th style="text-align:center;">Editar</th>
	  <th style="text-align:center;">Eliminar</th>
	</tr>
  </tfoot>
  <tbody> 
  <?php 
	include_once 'lib/conexion.php';
	$cnn = conectar();
	
	$sql="select * from tbl_pacientes;";
	$resultado=mysqli_query($cnn,$sql);
	?>
	
	<?php while($paciente=mysqli_fetch_object($resultado)){
		$x_ID=$paciente->ID_paciente;
		$x_dni=$paciente->dni;
		$x_nom=$paciente->apellido ." ". $paciente->nombre;
		$x_telefono=$paciente->telefono;
		?>
	<tr>
	  <!--  <td><?php// echo "<a href='paciente.php?xid=$x_ID&xnom=$x_nom'> $x_ID </a>" ?></td> -->
	  <td><?php echo $x_dni ?></td>
	  <td><?php echo $x_nom?></td>
	  <td><?php echo $x_telefono ?></td>
	  <td style="text-align:center;">
		<span class="btn btn-warning btn-xs">
			<span class="fa fa-pencil-square-o"></span>
		  </span>
		</td>
	  <td style="text-align:center;"> 
		<span class="btn btn-danger btn-xs">
			<span class="fa fa-trash"></span>
		  </span>
		<td>
	</tr>
	<?php } ?>
  </tbody>
</table>

<script type="text/javascript">
	$(document).ready(function() {
		$('#dataTable').DataTable();
	} );
</script>