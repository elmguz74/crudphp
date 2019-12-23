<?php 
    require '../conexion/conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];

    $sql = "insert into persona (Nombre,Apellido,Edad,Sexo) values('$nombre','$apellido','$edad','$sexo')";

    $resultado = mysqli_query($con, $sql) or die('No se ha podido insertar!!!'.mysqli_error());

    header('Location: ../index2.php');

?>