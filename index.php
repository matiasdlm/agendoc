<?php 
	require_once 'lib/conexion.php';
	include_once "encabezado.php";


        //<!-- /.container-fluid -->
        //<!-- <div id="content-wrapper">
		//<div class="container-fluid">
		//	<ol class="breadcrumb">
		//    <li class="breadcrumb-item active">BIENVENIDO</li>
		//  </ol>
		// </div> -->
	
	 if(isset($_SESSION['usuario'])){

			$us = $_SESSION['usuario'];

	   		$conexion = conectar();
			$sql = "SELECT id_rol
					FROM tbl_usuarios 
					WHERE usuario ='" .$us ."';";
			$resultado = mysqli_query($conexion, $sql);
			while ($row = $resultado-> fetch_assoc()){
				 $rol = $row["id_rol"];
				 }

			if ($rol>1){ ?>
				<!-- //login de especialista
				//echo "especialista";
				// require_once 'listaPacientes2.php';  
				<iframe src="https://calendar.google.com/calendar/embed?height=500&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=America%2FArgentina%2FBuenos_Aires&amp;src=dmhzNGRqMm5yZjZiYm84ZHZkbGFlbWVsaHNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZXMuYXIjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23336699&amp;color=%231F753C&amp;showNav=1&amp;showDate=1&amp;showTabs=1&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;showTitle=1" style="border-width:0" width="700" height="500" frameborder="0" scrolling="no"></iframe> -->

				<?php include_once 'asignarTurnos.php' ?> 

			<?php }else{
				//login secretaria
				echo "secretaria";
				//require_once 'inicio_secretaria.php';
			}
		}else { 
   			require_once 'usuarios_autorizar.php';
   			} 


   		
	// include_once "pie.php";

?>