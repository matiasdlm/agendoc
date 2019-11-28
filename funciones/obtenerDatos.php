<?php
	require_once "../lib/conexion.php";
	require_once "../lib/crud.php";

	$obj = new crud();

	echo json_encode($obj->obtenerDatos($_POST['id_paciente']));

	//echo json_encode($obj->borrarPaciente($_POST['id_paciente']));
?>
