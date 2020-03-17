<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgenDoc v0.1</title>

	<?php include_once "lib/script.php"?>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  		<a class="navbar-brand mr-1" href="index.php">
  			<img src="img/tec.png"> AgenDoc 
  		</a>


    </nav>

    <div id="wrapper" class="toggled">


	  
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidepanel  {
  width: 0;
  position: fixed;
  z-index: 1;
  height: 560px;
  top: 75px;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.2s;
  padding-top: 100px;
}

.sidepanel a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidepanel a:hover {
  color: #f1f1f1;
}

.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 100px;
  font-size: 36px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color:#444;
}
</style>

<body>

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span>
          </a>
        </li>

    		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
    			   <span>Pacientes</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="listaPacientes.php">Listado Pacientes</a>
            <a class="dropdown-item" href="historial.php">Historial Medico</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
             <span>Turnos</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="asignarTurnos.php">Gestion de Turnos</a>
            <!-- <a class="dropdown-item" href="turnosPerdidos.php">Turnos Perdidos</a> 
            <a class="dropdown-item" href="horarios.php">Horario Atencion  </a> -->
          </div>
</div>

<button class="openbtn" onclick="openNav()">☰ Menú</button>  

<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "10px";
}
</script>
   
</body>
</html> 
	  
	  
	  
	  
	  
	  
