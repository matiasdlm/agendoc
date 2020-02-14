<?php include_once "encabezado.php" ?>

<?php if(!isset($_SESSION['usuario'])){
   require_once 'usuarios_autorizar.php'; 


  } ?>
 
      <div id="content-wrapper">
        <div class="container-fluid"> <!-- contenedor que me separa el contenido del menu -->
    		  <ol class="breadcrumb">
            <li class="breadcrumb-item active">TURNOS PARA HOY</li>
          </ol>
		  
      <!-- DataTable -->
         <div class="card mb-3">
                <div class="card-body">
                  <div id="tablaDataTableTurno" class="table-responsive">
            
                  </div>
                </div>
                
                <div class="card-footer small text-muted">Updated <?php echo date('Y/m/d H:i'); ?></div>
            </div>
            
        </div>
      </div>


<?php include_once "pie.php"?> 



<!-- carga la lista de Turnos -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#tablaDataTableTurno').load('tbl_turnosHoy.php');
  } );
</script>

