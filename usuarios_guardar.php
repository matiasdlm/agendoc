<?php
	require_once 'lib/conexion.php';
	
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$confirmar_pw = $_POST['confirmar_pw'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$id_rol = $_POST['id_rol'];

	if($password == $confirmar_pw){
		
		$password = password_hash($password, PASSWORD_DEFAULT);
		
		
		$conexion = conectar();
		$sql = "INSERT INTO tbl_usuarios (usuario, password, nombre, apellido, id_rol)
				VALUES ('$usuario', '$password', '$nombre', '$apellido', '$id_rol')";
		$resultado = mysqli_query($conexion, $sql);
		$mensaje = "El usuario <b>$usuario</b> se registró correctamente.";
		include_once 'index.php';
	}
	else
	{
		$mensaje = 'ERROR: Las contraseñas no coiciden.';
		include_once 'usuarios_registro.php';
	}
?>