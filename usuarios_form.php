<?php if(isset($mensaje)){ ?>
	<hr/> <?php echo $mensaje?> <hr/>
<?php } ?>
<div class="contenido">
	<center>
	<form action="usuarios_guardar.php" method="post">
		<label for="usuario">Nombre:</label>
		<input type="text" id="nombre" name="usuario"/>
		<br/>
		<label for="usuario">Apellido:</label>
		<input type="text" id="apellido" name="usuario"/>
		<br/>
		<label for="Rol"> Rol: </label>
		<select id="rol" name="rol" >
		   <option value="1">Secretaria</option>
		   <option value="2">Especialista</option>
		</select>
		<label for="usuario">Usuario:</label>
		<input type="text" id="usuario" name="usuario"/>
		<br/>
		<label for="password">Contraseña:</label>
		<input type="password" id="password" name="password"/>
		<br/>
		<label for="confirmar_pw">Confirmar Contraseña:</label>
		<input type="password" id="confirmar_pw" name="confirmar_pw"/>
		<br/><br/>
		
		<input type="submit" value="Registrarse"/>
	</form> 
</center>
</div>