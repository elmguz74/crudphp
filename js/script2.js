$(document).ready(function(){

	listaJquery();


	function listaJquery(){
		$.get('php/listaJquery.php',function(response){
			let datos = JSON.parse(response);
			let html = '';
			datos.forEach(data=>{
				html += `<tr id_tr="${data.id}">
							<td>${data.nombre}</td>
							<td>${data.apellido}</td>
							<td>${data.edad}</td>
							<td>${data.sexo}</td>
							<td><a class="waves-effect waves-light btn-small" id='edit' >Editar</a></td>
							<td><a class="waves-effect waves-light btn-small" id='delete'>Eliminar</a></td>
						</tr>`;
			});
			$('#listaPersonasJquery').html(html);
		});
	}

	/*$('#formPersona2').on('submit', function(e){
        e.preventDefault();
    });*/
    
    $('#btn').click(function(){
		$('#agregarPersona2').show();
		$('#editarPersona2').hide();
    });

	$('#agregarPersona2').click(function(){
		//let nombre = $('#nombre').val();
		//alert(nombre);
		$.ajax({
			url: 'php/personaController.php',
			type: 'POST',
			data: $('#formPersona').serialize(),
			success:function(res){
				//let arreglo = JSON.parse(res);
				//console.log(arreglo);
				alert(res);
				listaJquery();

			}
		});

	});

	//manda a hacer la consulta sql en el controlador y devuelve los datos para pintarlos en el formulario
	$(document).on('click', '#edit', function(){
		let id = $(this)[0].parentElement.parentElement;
		id = $(id).attr('id_tr');
        let consulta = 'mostrar';
        $('#btn').click();
        $('#agregarPersona2').hide();
		$('#editarPersona2').show();
		$.ajax({
			url: 'php/editar.php',
			type: 'POST',
			data: {id,consulta},
			success: function(respuesta){
				let datos = JSON.parse(respuesta);
				$('#nombre').val(datos[0]['nombre']);
				$('#apellido').val(datos[0]['apellido']);
				$('#edad').val(datos[0]['edad']);
				$("#"+datos[0]['sexo']+"").prop("checked", true);
				$('#id').val(datos[0]['id']);
			}
		});
		
	});

	//cuando se da clic a editar manda a editar los datos del formulario en la DB
	$('#editarPersona2').click(function(){
		let consulta = 'editar';
		$('#consulta').val('editar');
		$.ajax({
			url: 'php/editar.php',
			type: 'POST',
			data: $('#formPersona').serialize(),
			success: function(res){
				alert(res);
				listaJquery();
			}
		});
	});

	$(document).on('click', '#delete', function(){
		let consulta = 'eliminar';
		let id = $(this)[0].parentElement.parentElement;
		id = $(id).attr('id_tr');

		$.ajax({
			url: 'php/editar.php',
			type: 'POST',
			data: {id,consulta},
			success: function(res){
				alert(res);
				listaJquery();
			}
		});
		
	});

	

});