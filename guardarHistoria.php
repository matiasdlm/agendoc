<?php
	$cnn=mysqli_connect("localhost","root","","bd_consultorio");
	$detalle = $_POST['detalle'];
	// $xid=$_GET['xid'];
	
	$sql = "INSERT INTO tbl_atenciones (id_paciente, id_usuario, fecha, detalle, id_os_paciente)
			VALUES ('1','1',NOW(), '$detalle','1')";
			
	$resultado = mysqli_query($cnn, $sql);
	$mensaje = '';
	if($resultado){
		$mensaje = 'Se guardó correctamente';
	}
	else{
		$error = mysqli_error($cnn);
		$nro = mysqli_errno($cnn);
		$mensaje = "Hubo un error al guardar: $error. Error nro: $nro";
	}
	
	include_once 'altaHistoria.php';
?>