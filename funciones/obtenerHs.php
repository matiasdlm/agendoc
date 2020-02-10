<?php
	require_once "../lib/conexion.php";
	require_once "../lib/crud.php";

	$obj = new crud();

	echo json_encode($obj->obtener_Hs_disponibles($_POST['dia']));
	//if ( $_POST){
	//echo $obj->obtener_Hs_disponibles($_POST['dia']);
	//};

?>
