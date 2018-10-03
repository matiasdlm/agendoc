<?php include_once "encabezado.php" ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">HISTORIAL MEDICO</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Buscar Paciente      
			  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Ingrese DNI..." aria-label="Search" aria-describedby="basic-addon2">
				  <div class="input-group-append">
					<button class="btn btn-primary" type="button">
					  <i class="fas fa-search"></i>
					</button>
				  </div>
				</div>
			  </form>
			</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N°</th>
					  <th>DNI</th>
                      <th>Apellido y Nombre</th>
					  <th>Telefono</th>
                    </tr>
                  </thead>
                  <tbody> 
				  <?php 
					$cnn=mysqli_connect("localhost","root","","bd_consultorio");
					$sql="select * from tbl_pacientes;";
					$resultado=mysqli_query($cnn,$sql);
					?>
					
					<?php while($paciente=mysqli_fetch_object($resultado)){
						$x_ID=$paciente->ID_paciente;
						$x_dni=$paciente->dni;
						$x_nom=$paciente->apellido ." ". $paciente->nombre;
						$x_telefono=$paciente->telefono;
						?>
                    <tr>
                      <td><?php echo "<a href='paciente.php?xid=$x_ID&xnom=$x_nom'> $x_ID </a>" ?></td>
                      <td><?php echo $x_dni ?></td>
                      <td><?php echo $x_nom?></td>
                      <td><?php echo $x_telefono ?></td>
                    </tr>
					<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include_once "pie.php"?>