<div id="content-wrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
	    <li class="breadcrumb-item active">BIENVENIDO</li>
	  </ol>
	</div>
   		
<center>
<div class="contenido">
	<center>
	<h4>Ingrese usuario y contraseña</h4>
	<?php if(isset($mensaje)){ ?>
		<?php if($mensaje!=''){ ?>
			<hr/> <?php echo $mensaje?> <hr/>
		<?php } ?>
	<?php } ?>
	<br/>
	<form method="post">
		<label for="usuario">Usuario:</label> 
		<input type="text" id="usuario" name="usuario"/><br/><br/>
		<label for="password">Contraseña:</label>
		<input type="password" id="password" name="password"/>
		<br/><br/>
		<input type="submit" value="Ingresar"/>
	</form>
	</center>


	<center>
		<br/><br/><br/><br/>
		¿Todavia no estas registrado?   
		<a href="registro.php"><input type="submit" value="Registrarse"></a>
	</center>


	<br/><br/><br/><br/>

</div>
<center>