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

		public function obtenerID($id_paciente){
			$datos= array('id_paciente' =>$id_paciente);

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
			//$sql="DELETE FROM tbl_pacientes   
			//		WHERE id_paciente='$datos[0]'";
			$sql="UPDATE tbl_pacientes SET 
									habilitado='0'
								WHERE id_paciente='$datos[0]'";

			return mysqli_query($cnn,$sql);
		}


		public function obtenerListaDniPacientes(){
			$cnn=conectar();
			
			$sql="SELECT * from tbl_pacientes WHERE habilitado=1 ORDER BY apellido";

			$result = mysqli_query($cnn,$sql);

			$ver=mysqli_fetch_row($result);

			$datos= array(
				'id_paciente' =>$ver[0],
				'nombre' =>$ver[1],
				'apellido' =>$ver[2],
				'dni' =>$ver[3]
				)	;
			return $datos;
		}


		// = TURNOS =
		// ==========
		public function agregarTurno($datos){

			$cnn=conectar();
			
			$sql="INSERT into tbl_turnos(id_paciente,id_especialista,fecha,id_hora)
					values ('$datos[0]',
							'$datos[1]',
							'$datos[2]',
							'$datos[3]')";
			return mysqli_query($cnn,$sql);
		}



		public function obtener_Hs_disponibles($dia){
			$cnn=conectar();

			$comboHs = "";

			$sql="SELECT * FROM tbl_horarios
 					WHERE id_horario NOT IN (SELECT id_hora as id_horario 
                       FROM tbl_turnos WHERE fecha='$dia' and habilitado='1')";

			$result = mysqli_query($cnn,$sql);


			while($hs_disp=mysqli_fetch_object($result)){
				$result_hs[]= array(
					'id_horario' =>$hs_disp->id_horario,
					'hora' =>$hs_disp->hora
					)	;
			}


			return $result_hs; 

		}


		// obtiene los datos de los turnos para cargar
		// en el modal
		public function obtenerTurnos($id_turno){
			$cnn=conectar();
			
			$sql="SELECT * from vista_turnos
					WHERE id_turno='$id_turno'";
			$result = mysqli_query($cnn,$sql);

			$ver=mysqli_fetch_row($result);

			$datos= array(
				'id_turno' =>$id_turno,
				'esp_ape' =>$ver[2],
				'esp_nom' =>$ver[1],
				'pac_ape' =>$ver[8],
				'pac_nom' =>$ver[6],
				'pac_dni' =>$ver[7]
				)	;
			return $datos;
		}


		// obtiene el ID turno
		public function obtenerIDTurno($id_turno){
			$cnn=conectar();
			
			$sql="SELECT id_turno from vista_turnos
					WHERE id_turno='$id_turno'";
			$result = mysqli_query($cnn,$sql);

			$ver=mysqli_fetch_row($result);

			$datos= array(
				'id_turno' =>$ver[0]);
			return $datos;
		}


		//modifica un TURNO
		public function actualizarTurno($datos){
			$cnn=conectar();
			
			print_r($datos);
			$sql="UPDATE tbl_turnos SET 
						fecha='$datos[1]',
						id_hora='$datos[2]' 
					WHERE id_turno='$datos[0]'";

			return mysqli_query($cnn,$sql);
		}


		//Eliminar un TURNO
		public function cancelarTurno($datos){
			$cnn=conectar();
			
			print_r($datos);
			$sql="UPDATE tbl_turnos SET 
						habilitado='0' 
					WHERE id_turno='$datos[0]'";

			return mysqli_query($cnn,$sql);
		}


		//modifica un TURNO x Atendido
		public function recepcionarPaciente($datos){
			$cnn=conectar();
			
			print_r($datos);
			$sql="UPDATE tbl_turnos SET 
						atendido='1' 
					WHERE id_turno='$datos[0]'";

			return mysqli_query($cnn,$sql);
		}

	}
?>

