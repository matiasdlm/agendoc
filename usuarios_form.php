<?php if(isset($mensaje)){ ?>
	<hr/> <?php echo $mensaje?> <hr/>
<?php } ?>
<div class="contenido">
<li class="breadcrumb-item active"></li>
	<center>
	<form action="usuarios_guardar.php" method="post">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre"/>
		<br/>
		<label for="apellido">Apellido:</label>
		<input type="text" id="apellido" name="apellido"/>
		<br/>
		<label for="id_rol"> Rol: </label>
		<select id="id_rol" name="id_rol" style="width:145px">
		   <option value="1">Secretaria</option>
		   <option value="2">Especialista</option>
		</select></br>
		<label for="usuario">Usuario:</label>
		<input type="text" id="usuario" name="usuario"/>
		<br/>
		<label for="password">Contraseña:</label>
		<input style="width:200px" type="password" id="password" name="password"/>
		<br/>
		<label for="confirmar_pw">Confirmar Contraseña:</label>
		<input style="width:200px" type="password" id="confirmar_pw" name="confirmar_pw"/>
		<br/><br/>
		
		<input type="submit" value="Guardar"/>
	</form> 
</center>
</div>