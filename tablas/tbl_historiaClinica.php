<?php 
	require_once 'lib/conexion.php';
	include_once 'encabezado.php';

	
?>

<table class="table table-hover table-condensed" id="dataTable" width="100%" cellspacing="0">
  <thead>
	<tr>
	  <th colspan=3; style="text-align:right">
	  	<?php 
	  		//$xid=$_GET['xid'];
	  		echo "<a href='altaHistoria.php?xesp=$id_usuario&xid=$id_pac'>Agregar Historia</a>";	
	  	
	  	?>
	  </th>
	</tr>
	<tr style="background-color: #5858FA; color:white; font-weight:bold;">
	  <th width="120">Fecha</th>
	  <th width="180">Especialista</th>
	  <th>Comentarios</th>
	</tr>
  </thead>
  <tbody> 
  <?php 
	//$xid=$_GET['xid'];
	include_once 'lib/conexion.php';
	$cnn = conectar();
	
	$sql="SELECT atenciones.id_paciente, atenciones.detalle, atenciones.fecha, pacientes.nombre as Nom_Paciente,
				pacientes.apellido as Ape_Paciente, usuarios.nombre as Nom_Especialista, usuarios.apellido as Ape_Especialista
			FROM tbl_atencion as atenciones 
				INNER JOIN tbl_pacientes as pacientes 
					ON atenciones.id_paciente = pacientes.ID_paciente
				INNER JOIN tbl_usuarios as usuarios 
					ON atenciones.id_usuario = usuarios.ID_usuario
				WHERE atenciones.habilitado='1' and atenciones.id_paciente=" .$id_pac. " ORDER BY atenciones.id_atencion desc;";
	$resultado=mysqli_query($cnn,$sql);
	?>
	
	<?php while($historia=mysqli_fetch_object($resultado)){
		$x_fecha=$historia->fecha;
		$x_especialista=$historia->Ape_Especialista ." ". $historia->Nom_Especialista;
		$x_comentario=$historia->detalle;
	
		echo "<tr>";
		  echo "<td>" .$x_fecha. "</td>";
		  echo "<td>" .$x_especialista. "</td>";
		  echo "<td>" .$x_comentario. "</td>";
		echo "</tr>";
		
	} ?>
  </tbody>
</table>

