<?php
	
	include "conexion.php";

	$con = conexionBD();

	$name 	= $_POST['username'];
	$correo = $_POST['correo'];
	$clave  = $_POST['clave'];

	$query  ="INSERT INTO usuario VALUES('$name','$correo','clave')";

	pg_query($con, $query);

	header("location:index.php");
?>