<?php
	require_once 'lib/conexion.php';
	
	require_once 'lib/crud.php';
	$obj=new crud();
	
	if ( $_POST)
	{
		if ( isset($_POST['id_paciente'])) 
		{		
			$datos=array(
				$_POST['id_paciente'],
				$_POST['id_especialista'],
				$_POST['fecha'],
				$_POST['id_hora']
			);
			
			echo $obj->agregarTurno($datos);
		}
	}
	else
	{
		echo "Manda un post papa";
	}
?>


