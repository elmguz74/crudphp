<?php 
	require '../conexion/conexion.php';

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];
	$sexo = $_POST['sexo'];
	// $array[] = array(
	// 	'nombre' => $nombre,
	// 	'apellido' => $apellido,
	// 	'edad' => $edad,
	// 	'sexo' => $sexo
	// );
	//$string = json_encode($array);
	$sql = "insert into persona(Nombre,Apellido,Edad,Sexo) values('$nombre','$apellido', '$edad', '$sexo')";
	$resultado = mysqli_query($con, $sql) or die('No se pudo insertar la persona '.mysqli_error());
	echo 'Insertado con éxito!!!';
 ?>