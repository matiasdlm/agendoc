<table class="table table-hover table-condensed" id="dataTableTurnos" width="100%" cellspacing="0">
  <thead>
	<tr style="background-color: #5858FA; color:white; font-weight:bold;">
	  <th>FECHA</th>
	  <th>HORA</th>
	  <th>Paciente</th>
	  <th>Especialista</th>
	  <th style="text-align:center;">Eliminar</th>
	</tr>
  </thead>
  <tfoot>
  	<tr style="background-color: #A4A4A4; color:white; font-weight:bold;">
	  <td>FECHA</td>
	  <td>HORA</tf>
	  <td>Paciente</td>
	  <td>Especialista</td>
	  <th style="text-align:center;">Eliminar</th>
	</tr>
  </tfoot>
  <tbody> 
  <?php 
	require_once "lib/conexion.php";
	$cnn = conectar();
	$hoy = date("Y-m-d"); 

 	$sql= "select * from vista_turnos where atendido='0' and fecha>='". $hoy . "';";
	
	$resultado=mysqli_query($cnn,$sql);
	
	while($turno=mysqli_fetch_object($resultado)){
		$x_fecha=$turno->fecha;
		$x_hora=$turno->hora;
		$x_esp=$turno->esp_ape ." ". $turno->esp_nom;
		$x_nom=$turno->pac_ape ." ". $turno->pac_nom;
		$x_idturno=$turno->id_turno;

	?>
	<tr>
	  <td><?php echo $x_fecha ?></td>
	  <td><?php echo $x_hora ?></td>
	  <td><?php echo $x_nom ?></td>
	  <td><?php echo $x_esp ?></td>

	  <td style="text-align:center;">
		 <span name="btn_borrar" id="btn_borrar" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalBajaTurno" onclick="confirmarBajaTurno('<?php echo $x_idturno ?>')" style="font-size:10px;">
			<span class="fa fa-trash" style="font-size:16px;"></span>
		  </span> 		  
		</td>

	</tr>
	<?php } ?>
  </tbody>
</table>



<script type="text/javascript">
		  // Busca los datos del turno a borrar
		  function confirmarBajaTurno(id_turno){
		  	console.log(id_turno);
		    $.ajax ({
		      type:"POST",
		      data:"id_turno=" + id_turno,
		      url: "funciones/obtenerIDTurno.php",
		      success:function(r){

		          datos=jQuery.parseJSON(r);
		          //var $x_paciente = datos['pac_dni'] + " - " + datos['pac_ape'] + " " + datos['pac_nom'];
		          $('#id_turno_borrar').val(datos['id_turno']);
		          //$('#paciente').val($x_paciente);

		      }
		    });
		  };
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$('#dataTableTurnos').DataTable();

		//<!-- Submit BORRAR TURNO -->

		 $("#frm_BorrarTurno").on('submit', function(evt){
		 	evt.preventDefault();
			datos=$('#frm_BorrarTurno').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"modificarTurno.php",
				success:function(r){
					if(r!=1){
						$('#frm_BorrarTurno')[0].reset();
						alert("Turno Cancelado");
						window.location.reload();
					}else{
						alert("Fallo al cancelar turno");
					}
				}
			});
			$('#frm_BorrarTurno').modal('hide');
		 });

	});
</script>


