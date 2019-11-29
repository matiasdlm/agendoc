<?php 
	//require_once '../conf/config.php';
	
	function conectar() {
		$conexion = mysqli_connect("localhost", "root", "", "bd_consultorio")
					or die ("Error conectando al servidor");
		mysqli_select_db($conexion, "bd_consultorio")
					or die ("Error seleccionando la base");
		return $conexion;
	
		
		
	}

?>