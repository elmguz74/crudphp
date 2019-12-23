<!DOCTYPE html>
<html>
<head>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<title>Mi primer CRUD</title>
</head>
<body>
	<div class="container">
		<h2 style="text-align: center">CRUD PHP</h2>
		<div class="row" style="text-align: center;">
			<a id="mostrar" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">+</i></a>
			<a id="ocultar" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">-</i></a>
		</div>
		
		<fieldset style="border:1px solid brown" id="marco">
			<legend>Datos Personales</legend>
			<div class="row">
				<form class="col s12" id="formPersona">
					<div class="row">
						<div class="input-field col s12">
							<input placeholder="id" id="id" name="id" type="hidden" class="validate">
							<input placeholder="consulta" id="consulta" name="consulta" type="hidden" class="validate">
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Nombre" id="nombre" name="nombre" type="text" class="validate">
							<label for="nombre">Nombre</label>
						</div>
						<div class="input-field col s6">
							<input placeholder="Apellido" id="apellido" name="apellido" type="text" class="validate">
							<label for="apellido">Apellido</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							<input placeholder="Edad" id="edad" name="edad" type="text" class="validate">
							<label for="edad">Edad</label>
						</div>
					</div>

					<div class="row">
						<label for="sexo">Sexo</label>
						<p>
							<label>
								<input name="sexo" type="radio" value="1" checked  id="1"/>
								<span>Femenino</span>
							</label>

							<label>
								<input name="sexo" type="radio" value="2" id="2"/>
								<span>Masculino</span>
							</label>
						</p>
						<p style="text-align: center;">
							<a id="agregarPersona" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">G</i></a>
							<a id="editarPersona" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">E</i></a>
						</p>
					</div>
					

				</form>
			</div>
		</fieldset>

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
		
		<br>
		<fieldset>
			<!--<legend style="border:1px solid brown" id="marcoTabla">Listado de Peronas</legend>-->
			<table id="tablaPersonas">
				<caption>LISTADO DE PERSONAS CON PHP</caption>
				<thead>
					<tr>
						<th style="text-align: center">Nombre</th>
						<th style="text-align: center">Apellido</th>
						<th style="text-align: center">Edad</th>
						<th style="text-align: center">Sexo</th>
						<th style="text-align: center" colspan="2">Acciones</th>
					</tr>
				</thead>
				<tbody id="lista_persona">
				</tbody>
			</table>
		</fieldset>

	</div>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>