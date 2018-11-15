<?php
	require_once 'lib/conexion.php';
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$dni = $_POST['dni']

	if($nombre != ""){
		
		if ($apellido != ""){

			$conexion = conectar();
			$sql = "INSERT INTO tbl_pacientes (nombre, apellido, telefono, dni)
					VALUES ('$nombre', '$apellido', '$telefono','$dni')";
			$resultado = mysqli_query($conexion, $sql);

			alert('El paciente <b>$apellido</b> se registró correctamente.');

			include_once 'listaPacientes.php';
		}else{
			echo "<script type='text/javascript'>alert('Ingrese APELLIDO del paciente');</script>"; 
			}		
	}else{
		echo "<script type='text/javascript'>alert('Ingrese NOMBRE del paciente');</script>"; 
	
	}
	
?>