<?php
	session_start();
	if(isset($_SESSION)){
		session_unset();
		session_destroy();
	}
	require_once("login.php");
	exit;
?>