<?php include_once "encabezado.php"; 



    if(!isset($_SESSION['usuario'])){
        require_once 'usuarios_autorizar.php'; 
    } ?>

       
       
    <div id="content-wrapper">

    <div class="container-fluid">

    <?php if($_SESSION['id_rol']>1){ ?>

		  <ol class="breadcrumb">
            <li class="breadcrumb-item active">BUSCAR HISTORIA CLINICA</li>
          </ol>

          <!-- DataTable -->
          <div class="card mb-3">			
            <div class="card-body">
              <div class="table-responsive">
				<?php include_once "tablas/tbl_pacientes.php" ?>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

      <?php }
          else 
            { ?>
    
      <ol class="breadcrumb">
            <li class="breadcrumb-item active">==== NO POSEE ACCESO PARA CONSULTAR LAS HISTORIAS CLINICAS ====</li>
          </ol>

          <!-- DataTable -->
          <div class="card mb-3">     
            <div class="card-body">
            <!-- </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
          </div>

        </div>
      <?php } ?>

<?php include_once "pie.php"?>