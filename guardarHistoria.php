<?php
	


	$detalle = $_POST['detalle'];
	$id_os = $_POST['id_ob_social'];
	$id_espe = $_POST['idus'];
	$id_pac = $_POST['idpac'];
	// $xid=$_GET['xid'];
	

	//include_once 'modalConsultaGuardada.php';
	include_once 'lib/conexion.php';

	$cnn=conectar();

	$sql = "INSERT INTO tbl_atencion (id_paciente, id_usuario, fecha, detalle, id_os_paciente)
			VALUES ('$id_pac','$id_espe',NOW(), '$detalle','$id_os')";
			
	$resultado = mysqli_query($cnn, $sql);
	$mensaje = '';
	if($resultado){
		//$mensaje = '<b>Sus datos se han guardado correctamente</b>';

		echo "<script>alert('Historia guardada de manera correcta');</script>";
		echo "<script>window.location.replace('historial.php');</script>";
	}
	else{
		$error = mysqli_error($cnn);
		$nro = mysqli_errno($cnn);
		$mensaje = "Hubo un error al guardar: $error. Error nro: $nro";
	}
	
	//include_once 'altaHistoria.php';
	
?>
