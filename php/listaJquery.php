<?php  
    require '../conexion/conexion.php';

    $sql = 'select * from persona';

    $resultado = mysqli_query($con, $sql) or die('Ocurrió un error!!!'.mysqli_error());

    while($row=mysqli_fetch_assoc($resultado)){
        $array[] = array(
            'nombre' => $row['Nombre'],
            'apellido' => $row['Apellido'],
            'edad' => $row['Edad'],
            'sexo' => $row['Sexo'],
            'id' => $row['idPersona']
        );
    }

    echo json_encode($array);
    
?>