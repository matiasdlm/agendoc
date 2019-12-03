 	</div>
 <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
              <div style="text-align: center;" class="pie">
                <?php if(isset($_SESSION['usuario'])){ ?>
                  [Usuario: <b><?php echo $_SESSION['usuario']?></b>]

                  <button type="button" data-toggle="modal" data-target="#logoutModal">  Salir </button>
                   <!-- <a href="logout.php" data-toggle="modal" data-target="#logoutModal" >Salir</a> 
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#logoutModal">
                    Salir
                </button>--> 
                <?php } ?>
              </div>
            <div class="copyright text-center my-auto"></br>
              <span>Desarrollado por Fantastic SOFT - 2019</span>
            </div>
          </div>
        </footer>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
	</a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "SALIR" aquí debajo para terminar su sesión.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Salir</a>
          </div>
        </div>
      </div>
    </div>

  </body>

</html>
