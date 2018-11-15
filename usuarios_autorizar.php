<?php
	require_once 'lib/conexion.php';
	session_start();
	
	if(!isset($_SESSION['usuario'])){
		$autorizado = false;
		$usuario = '';
		$password = '';
		
		if(isset($_POST['usuario'])){
			$usuario = $_POST['usuario'];
			$password = $_POST['password'];
		}

		$conexion = conectar();
		$sql = "
			SELECT id_usuario, usuario, password
			FROM tbl_usuarios
			WHERE usuario = '$usuario';";
		$resultado = mysqli_query($conexion, $sql);
		$registro = mysqli_fetch_object($resultado);
		
		if($registro){
			$password_guardada = $registro->password;
			$autorizado = password_verify($password, $password_guardada);
		}
		
		if($autorizado){
			$_SESSION['usuario'] = $usuario;
			$_SESSION['id_usuario'] =  $registro->id_usuario;
		}
		else{
			if($usuario != ''){
				$mensaje = '========================  Usuario y Contraseña erróneos ======================== ';
			}
			require_once("login.php");
			exit;
		}
	}
?>