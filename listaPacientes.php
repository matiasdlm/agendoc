<?php include_once "encabezado.php" ?>

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
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include_once "modalAltaPaciente.php"?>

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
						$('#frmNuevoPaciente')[0].reset();
						$('#tablaDataTable').load('tbl_editarPacientes.php');
						alertify.success("Paciente agregado!");
					}else{
						alertify.error("Fallo al agregar paciente");
					}
				}
			});
		});
	});
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$('#tablaDataTable').load('tbl_editarPacientes.php');
	} );
</script>


<script type="text/javascript">
	function agregarFrmEditar(id_paciente){
		$.ajax ({
			type:"POST",
			data:"id_paciente=" + id_paciente,
			url: "funciones/obtenerDatos.php",
			success:function(r){
					datos=jQuery.parseJSON(r);
					$('#id_paciente').val(datos['id_paciente']);
					$('#nombre_editar').val(datos['nombre']);
					$('#apellido_editar').val(datos['apellido']);
					$('#telefono_editar').val(datos['telefono']);
					$('#dni_editar').val(datos['dni']);
			}
		});
	}
</script>
<?php include_once "pie.php"?>