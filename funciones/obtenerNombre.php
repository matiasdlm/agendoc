<?php
	require_once "../lib/conexion.php";
	require_once "../lib/crud.php";

	$obj = new crud();

	echo json_encode($obj->obtenerNombre($_POST['id_paciente']));

?>
