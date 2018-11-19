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
				Nueva historia <text style="font-weight:bold;"></text>
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
            <label for="fecha">Fecha: <?php echo date("j/n/Y") ?> </label></br>
            <label for="obra_social"> Obra Social: </label>
            <select id="obra_social" name="obra_social" >
               <option value="0">Seleccione...</option>
               <option value="1">Galeno</option>
               <option value="2">Medife</option>
               <option value="3">OSDE</option>
            </select></br>
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