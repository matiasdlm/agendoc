<?php include_once "encabezado.php"?>
        <!-- /.container-fluid -->
        <div id="content-wrapper">
		<div class="container-fluid">
			<ol class="breadcrumb">
		    <li class="breadcrumb-item active">BIENVENIDO</li>
		  </ol>
		</div>
   		<?php require_once 'usuarios_autorizar.php' ?>

   		<?php 

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
				//login de especialista
				require_once 'listaPacientes2.php';
			}else{
				//login secretaria
				require_once 'inicio_secretaria.php';
			}
		?>
<?php include_once "pie.php"?>