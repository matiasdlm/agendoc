
<div class="contenido">
	<center>
	<h3>Ingrese su usuario y contraseña</h3>
	<?php if(isset($mensaje)){ ?>
		<?php if($mensaje!=''){ ?>
			<hr/> <?php echo $mensaje?> <hr/>
		<?php } ?>
	<?php } ?>
	<form action="index.php" method="post">
		<label for="usuario">Usuario:</label> 
		<input type="text" id="usuario" name="usuario"/>
		<label for="password">Contraseña:</label>
		<input type="password" id="password" name="password"/>
		<br/><br/>
		<input type="submit" value="Ingresar"/>
	</form>
	</center>

	<br/><br/><br/><br/>
	<center>
		<div style="width:110px; background-color:#00BFFF">
			<a href="registro.php">--> Registrarse</a>
		</div>
	</center>
</div>