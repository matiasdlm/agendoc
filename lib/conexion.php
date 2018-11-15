<?php 
	require_once 'conf/config.php';
	
	function conectar() {
		$conexion = mysqli_connect(HOST, USER, PASSWD, DBNAME)
					or die ("Error conectando al servidor");
		mysqli_select_db($conexion, DBNAME)
					or die ("Error seleccionando la base");
		return $conexion;
	
		
		
	}

?>