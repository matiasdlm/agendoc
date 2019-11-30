<?php include_once "encabezado.php" ?>

<?php if(!isset($_SESSION['usuario'])){
   require_once 'usuarios_autorizar.php'; 


  } ?>
 
      <div id="content-wrapper">
        <div class="container-fluid"> <!-- contenedor que me separa el contenido del menu -->
    		  <ol class="breadcrumb">
            <li class="breadcrumb-item active">ASIGNAR TURNOS</li>
          </ol>
    		   
    		  <div class="card-body">
    				<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#agregarTurno">Nuevo Turno  <span class="fa fa-plus-circle"></span></a>
    			   <hr>
    		  </div>
		  

        </div>
      </div>


<?php include_once "modalTurnos.php"?>
<?php include_once "pie.php"?> 




<!-- <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregarFrmEditar('<?php // echo $x_ID ?>')" style="font-size:10px;"> -->