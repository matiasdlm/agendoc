<?php
	
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$dni = $_POST['dni'];

	if($nombre != ""){
		
		if ($apellido != ""){

			require_once 'lib/conexion.php';
			$conexion = conectar();
			$sql = "INSERT INTO tbl_pacientes (nombre, apellido, telefono, dni)
					VALUES ('$nombre', '$apellido', '$telefono','$dni')";
			$resultado = mysqli_query($conexion, $sql);

			echo "<script type='text/javascript'>alert('El paciente se registró correctamente.')";

			//include_once "index.php";

		}else{
			echo "<script type='text/javascript'>alert('Ingrese APELLIDO del paciente');</script>"; 
			}		
	}else{
		echo "<script type='text/javascript'>alert('Ingrese NOMBRE del paciente');</script>"; 
	
	}
	
?>