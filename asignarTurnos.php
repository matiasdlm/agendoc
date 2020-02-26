<?php include_once "encabezado.php" ?>

<?php if(!isset($_SESSION['usuario'])){
   require_once 'usuarios_autorizar.php'; 


  } ?>
 
      <div id="content-wrapper">
        <div class="container-fluid"> <!-- contenedor que me separa el contenido del menu -->
    		  <ol class="breadcrumb">
            <li class="breadcrumb-item active">GESTION DE TURNOS</li>
          </ol>
    		   
    		  <div class="card-body">
    				<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#agregarTurno" >Nuevo Turno  <span class="fa fa-plus-circle"></span></a> <label>&nbsp&nbsp</label>
            <a href="turnosPerdidos.php" class="btn btn-secondary" style="background-color: #FF8A33">Ver Turnos Perdidos </a>
    			   <hr>
    		  </div>
		  
      <!-- DataTable -->
         <div class="card mb-3">
                <div class="card-body">
                  <div id="divDataTableTurno" class="table-responsive">
            
                  </div>
                </div>
                
                <div class="card-footer small text-muted">Updated <?php echo date('Y/m/d H:i'); ?></div>
            </div>
            
        </div>
      </div>



<?php include_once "modalBajaTurno.php"?>
<?php include_once "modalTurnos.php"?>
<?php include_once "pie.php"?> 



<!-- carga la lista de Turnos -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#divDataTableTurno').load('tbl_turnos.php');
  } );
</script>



<!-- <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregarFrmEditar('<?php // echo $x_ID ?>')" style="font-size:10px;"> -->