<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<title>Mi primer CRUD</title>
</head>
<body>
	<div class="container">
		<h2 style="text-align: center">CRUD PHP</h2>
		<div class="row" style="text-align: center;">
            <button id="btn" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Registrar</button>
		</div>
		
		<br>
		<fieldset>
			<!--<legend style="border:1px solid brown" id="marcoTabla">Listado de Peronas</legend>-->
			<table>
				<caption>LISTADO DE PERSONAS CON JQUERY</caption>
				<thead>
					<tr>
						<th style="text-align: center">Nombre</th>
						<th style="text-align: center">Apellido</th>
						<th style="text-align: center">Edad</th>
						<th style="text-align: center">Sexo</th>
						<th style="text-align: center" colspan="2">Acciones</th>
					</tr>
				</thead>
				<tbody id="listaPersonasJquery">
				</tbody>
			</table>
		</fieldset>

	</div>

    <?php require 'php/modalPersona.php'; ?>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/script2.js"></script>
</body>
</html>