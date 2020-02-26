<?php
	require_once 'lib/conexion.php';
	
	require_once 'lib/crud.php';
	$obj=new crud();
	
	if ( $_POST)
	{
		if ( isset($_POST['id_turno_editar'])) 
		{	

			$datos=array(
				$_POST['id_turno_editar'],
				$_POST['fecha_editar'],
				$_POST['id_hora_editar'],
			);
			
			echo $obj->actualizarTurno($datos);
		}
		else
			{
				if ( isset($_POST['id_turno_borrar']))
				{
					$datos=array(
						$_POST['id_turno_borrar'],
					);
					
					echo $obj->cancelarTurno($datos);
				}
			} 
	}	
	else
	{
		echo "Manda un post papa";
	}
?>


