
<?php 
	require_once "../lib/conexion.php"
	require_once "../lib/crud.php"

	$obj = new crud();

	$datos = array(
		$_POST['nombre'],
		$_POST['apellido'],
		$_POST['dni'],
		$_POST['telefono'],
		$_POST['id_paciente']);

	echo $obj->actualizar($datos);
	)

?>