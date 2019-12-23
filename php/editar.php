<?php 
    require '../conexion/conexion.php';

    $consulta = $_POST['consulta'];
    $id = $_POST['id'];

    if ($consulta == 'mostrar'){
        $sql = "select * from persona where idPersona='$id'";
        $resultado = mysqli_query($con, $sql) or die('Ocurrió un error '.mysqli_error());

        $row = mysqli_fetch_assoc($resultado);

        $array[] = array(
            'id' => $row['idPersona'],
            'nombre' => $row['Nombre'],
            'apellido' => $row['Apellido'],
            'edad' => $row['Edad'],
            'sexo' => $row['Sexo']
        );

        echo json_encode($array);
    }else if($consulta == 'editar'){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];

        $sql = "update persona set Nombre = '$nombre', Apellido = '$apellido', Edad = '$edad', Sexo = '$sexo' where idPersona = '$id'";

        $resultado = mysqli_query($con, $sql) or die('No se pudo actualizar '.mysqli_error());

        echo 'Actualizado con éxito!!!';
    }else if($consulta == 'eliminar'){
        $sql = "delete from persona where idPersona = '$id'";
        $resultado = mysqli_query($con, $sql) or die('No se pudo eliminar!!! '.mysqli_error());

        echo 'Eliminado correctamente';
    }
?>