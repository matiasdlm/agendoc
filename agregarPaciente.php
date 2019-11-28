<?php
	require_once 'lib/conexion.php';
	
	require_once 'lib/crud.php';
	$obj=new crud();
	
	if ( $_POST)
	{
		if ( isset($_POST['id_paciente_editar'])) //si tiene ID entrar por form de MODIFICAR o BORRAR
		{	
			if ( isset($_POST['dni_editar'])) 
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
			else{
				//entra por BORRAR
				$datos=array(
					$_POST['id_paciente_editar']
			);
			
			echo $obj->deshabilitar($datos);				
			}

		}
		else if (isset($_POST['nombre'])) // como no tiene ID, entra por el form de NUEVO paciente
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


