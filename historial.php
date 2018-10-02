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

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
