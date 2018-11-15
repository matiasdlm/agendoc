<?php
	require_once '../lib/conexion.php';
	
	require_once '../lib/crud.php';
	$obj=new crud();
	
	$datos=array(
		$_POST[nombre],
		$_POST[apellido],
		$_POST[telefono],
		$_POST[dni]
	);
	
	echo $obj->agregar($datos);

?>