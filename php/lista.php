<?php 
	require '../conexion/conexion.php';

	
	$sql = "SELECT * FROM persona";
	$resultado = mysqli_query($con, $sql) or die('No se pudo selecionar la persona '.mysqli_error());
	$html='';
	while($row=mysqli_fetch_assoc($resultado)){
		$html.='<tr>
		<td style="text-align: center">'. $row['Nombre'].'</td>
		<td style="text-align: center">'. $row['Apellido'].'</td>
		<td style="text-align: center">'. $row['Edad'].'</td>
		<td style="text-align: center">'. $row['Sexo'].'</td>
		<td style="text-align: center">0</td>
		<td style="text-align: center">1</td>
		</tr>';
	}

	echo $html;
 ?>