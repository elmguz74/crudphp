<div class="w3-container">
    <div id="id01" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <div class="w3-center"><br>
          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
          <img src="img/login.png" alt="Avatar" style="width:15%" class="w3-circle w3-margin-top">
        </div>

        <form id="formPersona" class="w3-container">
        <fieldset style="border:1px solid brown" id="marco1">
			<legend>Datos Personales</legend>
			<div class="row">
				<form class="col s12" action = "php/insertar.php" method="POST">
					<div class="row">
						<div class="input-field col s12">
							<input placeholder="id" id="id" name="id" type="hidden" class="validate">
							<input placeholder="consulta" id="consulta" name="consulta" type="hidden" class="validate">
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Nombre" id="nombre" name="nombre" type="text" class="validate">
							<label>Nombre</label>
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
					</div>
				</form>
			</div>
		</fieldset>
        </form>

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <p style="text-align: center;">
            <button id="agregarPersona2" class="btn waves-effect waves-light" name="agregarPersona2">Guardar</button>

            <button id="editarPersona2" class="btn waves-effect waves-light" name="editarPersona2">Editar</button>
        </p>
        </div>

      </div>
    </div>
  </div>