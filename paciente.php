<?php include_once "encabezado.php"?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">HISTORIAL MEDICO</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <!-- <div class="card-header"> -->
				Paciente <text style="font-weight:bold;"><?php $xnom=$_GET['xnom']; echo $xnom ?></text>
			<!-- </div> -->
            <div class="card-body">
              <div class="table-responsive">
                <?php include_once "tablas/tbl_historiaClinica.php" ?>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include_once "pie.php"?>