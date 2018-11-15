<?php

	class crud{
		public function agregar($datos){

			$cnn=conectar();
			
			$sql="INSERT into tbl_pacientes(nombre,apellido,telefono,dni)
					values ('$datos[0]',
							'$datos[1]',
							'$datos[2]',
							'$datos[3]')";
			return mysqli_query($cnn,$sql);
		}
	}
?>