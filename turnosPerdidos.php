<?php include_once "encabezado.php" ?>

<?php if(!isset($_SESSION['usuario'])){
   require_once 'usuarios_autorizar.php'; 


  } ?>
 
      <div id="content-wrapper">
        <div class="container-fluid"> <!-- contenedor que me separa el contenido del menu -->
    		  <ol class="breadcrumb">
            <li class="breadcrumb-item active">TURNOS PERDIDOS - ULTIMOS 15 DIAS</li>
          </ol>
    		   
    		  <div class="card-body">
    				<a href="asignarTurnos.php" class="btn btn-primary"> ⮌  Volver</a>
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



<?php include_once "modalModificarTurno.php"?>

<!-- carga la lista de Turnos -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#divDataTableTurno').load('tbl_turnosPerdidos.php');
      } );
</script>


<script type="text/javascript">
  // Busca los datos del turno segun ID
  // y los carga en el Modal
  function editarTurnoPerdido(id_turno){
    $.ajax ({
      type:"POST",
      data:"id_turno=" + id_turno,
      url: "funciones/obtenerTurnos.php",
      success:function(r){

          datos=jQuery.parseJSON(r);
          var $x_especialista = datos['esp_ape'] + " " + datos['esp_nom'];
          var $x_paciente = datos['pac_dni'] + " - " + datos['pac_ape'] + " " + datos['pac_nom'];
          $('#id_turno_editar').val(datos['id_turno']);
          $('#especialista').val($x_especialista);
          $('#paciente').val($x_paciente);

      }
    });
  }

</script>

<!-- Submit MODIFICAR TURNO -->
<script type="text/javascript">
  $(document).ready(function(){
     $("#frmEditarTurno").on('submit', function(evt){
      evt.preventDefault();
      datos=$('#frmEditarTurno').serialize();
      
      $.ajax({
        type:"POST",
        data:datos,
        url:"modificarTurno.php",
        success:function(r){
          console.log(r);
          if(r!=1){
            $('#frmEditarTurno')[0].reset();
            //$('#dataTableTurnosPerdidos').load('tbl_turnosPerdidos.php');
            alert("Turno modificado!");
            window.location.reload();
          }else{
            alert("Fallo al modificar turno");
          }
        }
      });
    });
  });
</script>


<?php include_once "pie.php"?> 
