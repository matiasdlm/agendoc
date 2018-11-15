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
              <div class="table-responsive">
				<?php include_once "tbl_editarPacientes.php" ?>
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
						$('#dataTable').load('tbl_editarPacientes.php');
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
		$('#dataTable').load('tbl_editarPacientes.php');
	} );
</script>

<?php include_once "pie.php"?>