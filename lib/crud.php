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

		public function obtenerDatos($id_paciente){
			$cnn=conectar();
			
			$sql="SELECT * from tbl_pacientes
					WHERE id_paciente='$id_paciente'";
			$result = mysqli_query($cnn,$sql);

			$ver=mysqli_fetch_row($result);

			$datos= array(
				'id_paciente' =>$ver[0],
				'nombre' =>$ver[1],
				'apellido' =>$ver[2],
				'dni' =>$ver[3],
				'telefono' =>$ver[4]
				)	;
			return $datos;
		}


		public function obtenerNombre($id_paciente){
			$cnn=conectar();
			
			$sql="SELECT id_paciente, nombre, apellido from tbl_pacientes
					WHERE id_paciente='$id_paciente'";
			$result = mysqli_query($cnn,$sql);

			$ver=mysqli_fetch_row($result);

			$datos= array(
				'id_paciente' =>$ver[0],
				'nombre' =>$ver[1],
				'apellido' =>$ver[2],
				)	;
			return $datos;
		}


		public function actualizar($datos){
			$cnn=conectar();
			
			print_r($datos);
			$sql="UPDATE tbl_pacientes SET 
						nombre='$datos[0]',
						apellido='$datos[1]',
						dni='$datos[2]',
						telefono='$datos[3]' 
					WHERE id_paciente='$datos[4]'";

			return mysqli_query($cnn,$sql);
		}


		public function borrarPaciente($datos){
			$cnn=conectar();
			
			print_r($datos);
			$sql="DELETE FROM tbl_pacientes   
					WHERE id_paciente='$datos[0]'";

			return mysqli_query($cnn,$sql);
		}
		
	}
?>