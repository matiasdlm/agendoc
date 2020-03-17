<?php 

  include_once "encabezado.php";
  include_once 'lib/conexion.php';
  include_once 'lib/crud.php';
  $cnn = conectar();
  
  $sql = "SELECT * FROM tbl_obra_social WHERE habilitado=1 ORDER BY nombre";
      
  $lista_os = mysqli_query($cnn, $sql);



    $id_pac=intval($_GET['xid'],10); 
  

    $idus=$_GET['xesp']; 
  


?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">HISTORIAL MEDICO</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
			       <div class="alert alert-success">
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
                    </tr>
                </thead>
              </table>
					  	<form action="guardarHistoria.php" method="POST">
						<!-- <?php // $xid=$_GET['xid']?> -->
                  <table cellpadding="5">
                    <tr>
                      <td> 
                        <label for="fecha">Fecha:</label>
                      </td>
                      <td>
                        <label><?php echo date("j/n/Y") ?> </label>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label for="obra_social"> Obra Social:</label>
                      </td>
                      <td>
                        <select name="id_ob_social" id="id_ob_social" required>
                        <?php while($os=mysqli_fetch_object($lista_os)) {
                          echo "<option value=\"$os->ID_obra_social\">$os->nombre - $os->plan</option>"; 
                         } ?>
                        </select> 

                       <select hidden="" name="idpac" id="idpac">
                        <?php 
                        echo "<option value=\"$id_pac\">$id_pac</option>"; ?>
                        </select> 

                       <select hidden="" name="idus" id="idus">
                        <?php 
                        echo "<option value=\"$idus\">$idus</option>"; ?>
                        </select> 
                      </td>
                  </table>
                    
                      </br>
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

