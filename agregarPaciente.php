<?php
	require_once 'lib/conexion.php';
	
	require_once 'lib/crud.php';
	$obj=new crud();
	
	if ( $_POST)
	{
		if ( isset($_POST['id_paciente_editar'])) //entra por el form MODIFICAR
		{	
				//entra por MODIFICAR
				$datos=array(
					$_POST['nombre_editar'],
					$_POST['apellido_editar'],
					$_POST['dni_editar'],
					$_POST['telefono_editar'],
					$_POST['id_paciente_editar']
			);
			
			echo $obj->actualizar($datos);

			} 

		elseif(isset($_POST['id_paciente_borrar'])) //entra por el form de BORRAR
		{
				//entra por BORRAR
				$datos=array(
					$_POST['id_paciente_borrar']
			);
			
			echo $obj->borrarPaciente($datos);				
			}
		else  //entra por el form NUEVO
		{	
			$datos=array(
				$_POST['nombre'],
				$_POST['apellido'],
				$_POST['telefono'],
				$_POST['dni']
			);
			
			echo $obj->agregar($datos);
		}
	}
	else
	{
		echo "Manda un post papa";
	}
?>


