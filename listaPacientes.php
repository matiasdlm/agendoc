<?php include_once "encabezado.php" ?>

<?php if(!isset($_SESSION['usuario'])){
	 require_once 'usuarios_autorizar.php'; 


	} ?>
 
      <div id="content-wrapper">
        <div class="container-fluid"> <!-- contenedor que me separa el contenido del menu -->
			  <ol class="breadcrumb">
	            <li class="breadcrumb-item active">LISTADO DE PACIENTES</li>
	          </ol>
			   
			  <div class="card-body">
					<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#agregarDatosPaciente">Agregar Nuevo  <span class="fa fa-plus-circle"></span></a>
				<hr>
			  </div>
		  
			  <!-- DataTable -->
			   <div class="card mb-3">
		            <div class="card-body">
		              <div id="tablaDataTable" class="table-responsive">
						
		              </div>
		            </div>
		            
		            <div class="card-footer small text-muted">Updated <?php echo date('Y/m/d H:i'); ?></div>
		        </div>

        </div>
      </div>
        <!-- /.container-fluid -->

<?php include_once "modalAltaPaciente.php"?>




<!-- Submit AGREGAR paciente -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#btnAgregar').click(function(){
			datos=$('#frmNuevoPaciente').serialize();
			
			$.ajax({
				type:"POST",
				data:datos,
				url:"agregarPaciente.php",
				success:function(r){
					if(r==1){
						alert(r);
						alert("1");
						$('#frmNuevoPaciente')[0].reset();
						//$('#tablaDataTable').reload('tbl_editarPacientes.php');
						alert("Paciente agregado!");
						window.location.reload();
					}else{
						alert("Fallo al agregar paciente");
					}
				}
			});
		});
	});
</script>


<!-- Submit MODIFICAR paciente -->
<script type="text/javascript">
	$(document).ready(function(){
		 $("#frmNuevoPaciente_editar").on('submit', function(evt){
		 	evt.preventDefault();
			datos=$('#frmNuevoPaciente_editar').serialize();
			
			$.ajax({
				type:"POST",
				data:datos,
				url:"agregarPaciente.php",
				success:function(r){
					if(r!=1){
						$('#frmNuevoPaciente_editar')[0].reset();
						//$('#tablaDataTable').reload('tbl_editarPacientes.php');
						alert("Datos Modificados!");
						window.location.reload();
					}else{
						alert("Fallo al modificar paciente");
					}
				}
			});
		});
	});
</script>


<!-- Submit BORRAR paciente -->
<script type="text/javascript">
	$(document).ready(function(){
		 $("#frmNuevoPaciente_borrar").on('submit', function(evt){
		 	evt.preventDefault();
			datos=$('#frmNuevoPaciente_borrar').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"agregarPaciente.php",
				success:function(r){
					if(r!=1){
						$('#frmNuevoPaciente_borrar')[0].reset();
						$('#frmNuevoPaciente_borrar').modal('hide');
						alert("Paciente eliminado");
						window.location.reload();
					}else{
						$('#frmNuevoPaciente_borrar').modal('hide');
						alert("Fallo al eliminar paciente");
					}
				}
			});
		$('#frmNuevoPaciente_borrar').modal('hide');
		//$('#tablaDataTable').reload('tbl_editarPacientes.php');
		});

	});
</script>




<!-- carga la lista de Pacientes -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#tablaDataTable').load('tbl_editarPacientes.php');
	} );
</script>


<!-- busca los datos de los pacientes por el ID
	y carga los datos en el modal de modificar -->
<script type="text/javascript">
	function agregarFrmEditar(id_paciente){
		$.ajax ({
			type:"POST",
			data:"id_paciente=" + id_paciente,
			url: "funciones/obtenerDatos.php",
			success:function(r){
					datos=jQuery.parseJSON(r);
					$('#id_paciente_editar').val(datos['id_paciente']);
					$('#nombre_editar').val(datos['nombre']);
					$('#apellido_editar').val(datos['apellido']);
					$('#telefono_editar').val(datos['telefono']);
					$('#dni_editar').val(datos['dni']);
			}
		});
	}

	function agregarFrmBorrar(id_paciente){
		$.ajax ({
			type:"POST",
			data:"id_paciente=" + id_paciente,
			url: "funciones/obtenerID.php",
			success:function(r){
					datos=jQuery.parseJSON(r);
					$('#id_paciente_borrar').val(datos['id_paciente']);
			}
		});
	}
</script>


<?php include_once "pie.php"?> 