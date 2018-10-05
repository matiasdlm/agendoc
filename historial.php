<?php include_once "encabezado.php" ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card text-left">
			  <div class="card-header">
				<h5 class="card-title">LISTADO DE PACIENTES</h5>
			  </div>
			</div>
			
            <div class="card-body">
              <div class="table-responsive">
				<?php include_once "tablas/tbl_pacientes.php" ?>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include_once "pie.php"?>