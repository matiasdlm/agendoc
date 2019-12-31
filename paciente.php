<?php include_once "encabezado.php"?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">HISTORIAL MEDICO</li>
          </ol>

          <?php $xnom=$_GET['xnom'];
                $id_pac=$_GET['xid']; ?>

          
            <div class="card text-center" style="width: 15rem; background: linear-gradient(45deg,yellow,white); float: right">
              <div class="card-body">
                <h5 class="card-title">Notas Importantes   
                  <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNota" style="font-size:4px;">
                  <span class="fa fa-plus-circle" style="font-size:20px;" ></span>
                  </span>
                </h5>
                  
                  <ul>
                  <?php 
                    require_once "lib/conexion.php";
                    $cnn = conectar();
                    
                    $sql="select * from vista_notas WHERE id_paciente=". $id_pac . ";" ;
                    $resultado=mysqli_query($cnn,$sql);
                    
                    while($nota=mysqli_fetch_object($resultado)){
                      $detalle=$nota->detalle;
                      $especialista=$nota->espApe ." ". $nota->espNom;
                  ?>
                 
                      <li style="text-align:left; font-weight: bold; font-size:15px">
                      <?php echo $detalle ?></li>
                      <p style="font-size:14px">(<?php echo $especialista ?>) </p>
                  
                  <?php } ?>
                  </ul>
 
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>

            <!-- DataTables Example -->
            <div class="card mb-3">
              <!-- <div class="card-header"> -->
				      Paciente <text style="font-weight:bold;"><?php echo $xnom ?></text>
			         <!-- </div> -->
              <div class="card-body">
                <div class="table-responsive">
                  <?php include_once "tablas/tbl_historiaClinica.php" ?>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated <?php echo date('Y/m/d H:i'); ?></div>
            </div>
          

        </div>
        <!-- /.container-fluid -->

<?php include_once "pie.php"?>