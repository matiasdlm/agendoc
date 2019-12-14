<?php 
	require_once 'lib/conexion.php';
	include_once 'encabezado.php';

	
	 if(!isset($_SESSION['usuario'])){

	 	require_once 'usuarios_autorizar.php';

	 }

			$us = $_SESSION['usuario'];

	   		$conexion = conectar();
			$sql = "SELECT id_rol
					FROM tbl_usuarios 
					WHERE usuario ='" .$us ."';";
			$resultado = mysqli_query($conexion, $sql);
			while ($row = $resultado-> fetch_assoc()){
				 $rol = $row["id_rol"];
				 }

			if ($rol>1){

				 include_once 'asignarTurnos.php';

			 }else{
				//login secretaria
				include_once 'asignarTurnos.php';
				
				//require_once 'inicio_secretaria.php';
			}



   		
	 include_once "pie.php";

?>