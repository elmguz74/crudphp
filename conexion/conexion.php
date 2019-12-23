<?php 
	$usuario = 'root';
	$pass = 'root';
	$server = 'localhost';
	$bd = 'CRUDPHP';

	$con = mysqli_connect($server, $usuario, $pass, $bd)or die('No se pudo conectar a la BD!!! '.mysqli_error());
 ?>