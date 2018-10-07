<?php include_once "encabezado.php" ?>

      <div id="content-wrapper">
        <div class="container-fluid"> <!-- contenedor que me separa el contenido del menu -->
		  <ol class="breadcrumb">
            <li class="breadcrumb-item active">LISTADO DE PACIENTES</li>
          </ol>
		   
		  <div class="card-body">
				<a href="#" class="btn btn-primary">Agregar Nuevo  <span class="fa fa-plus-circle"></span></a>
			<hr>
		  </div>
		  
		  <!-- DataTable -->
		   <div class="card mb-3">
            <div class="card-body">
              <div class="table-responsive">
				<?php include_once "tablas/tbl_editarPacientes.php" ?>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include_once "pie.php"?>