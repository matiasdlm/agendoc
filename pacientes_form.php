<?php if(isset($mensaje)){ ?>
	<hr/> <?php echo $mensaje?> <hr/>
<?php } ?>
<div style="padding-left: 20px" >
	AGREGAR NUEVO PACIENTE </br></br>
	<div style="width: 400px">
		<form action="pacientes_guardar2.php" method="post">
			<label>Nombre</label>
			<input type="text" class="form-control input-sm" id="nombre" name="nombre">
			<label>Apellido</label>
			<input type="text" class="form-control input-sm" id="apellido" name="apellido">
			<label>Telefono</label>
			<input type="text" class="form-control input-sm" id="telefono" name="telefono">
			<label>DNI</label>
			<input type="text" class="form-control input-sm" id="dni" name="dni">
			</br></br>
			
				<input type="submit" value="Guardar"/>		
			
		</form> 
	</div>
</div>