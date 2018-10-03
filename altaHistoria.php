<?php include_once "encabezado.php"?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">HISTORIAL MEDICO</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
			<div class="card-header">
				Nueva historia de paciente <text style="font-weight:bold;"><?php $xnom=$_GET['xnom']; echo $xnom ?></text>
			</div>
		  </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
					<tr>
						<?php
							if(isset($mensaje)){ ?>
							<hr/> <?php echo $mensaje?> <hr/>
						<?php } ?>
					  	<form action="guardarHistoria.php" method="POST">
						<!-- <?php // $xid=$_GET['xid']?> -->
						<label for="detalle">Detalle:  </label></br>
						<!-- <textarea id="detalle" name="detalle" style="WIDTH: 400px; HEIGHT: 98px;text-align:top" </textarea> -->
						<textarea name="detalle" rows="5" cols="55"></textarea>
						</br>
						</br>
						<input type="submit" value="Guardar"/>
						</br>
						</form>
					</tr>
                  </thead>
                  <tbody> 
					
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include_once "pie.php"?>