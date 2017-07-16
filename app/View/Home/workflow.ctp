<?php if(!isset($tengoSueno)) $tengoSueno = 2; ?>

<section class="header_page seccion bg dark" style="background-image:url(<?php echo $this->webroot.'img/login_bg.jpg'; ?>);">
	<div class="container">
		<h1>Kilometro <?php echo $tengoSueno; ?></h1>
</section>

<script>
	$(document).ready(function(){
		var paso = <?php echo $tengoSueno; ?>;
		$('#pasos .row > .paso_general').each(function(){
			var dataID = $(this).attr('data-id');
			var pasoStep = '#paso'+dataID;
			if(dataID <= paso){
				//alert(pasoStep);
				$(pasoStep+' .paso').addClass('completado');
				$(pasoStep+' .linea').addClass('completado');
			}
		});
	});
</script>

<section class="seccion">
	<div class="container">
		<div id="pasos">
			<div class="row flex nopadding">
				<div class="paso paso1 completado"><p class="tooltip" title="Registro de Usuario">1k</p></div>

				<div class="col-md-3 paso_general" id="paso2" data-id="2">
					<div class="paso paso2 completado"><p class="tooltip" title="Estado de Situación">2k</p></div>
					<div class="linea"></div>
				</div>
				<div class="col-md-3 paso_general" id="paso3" data-id="3">
					<div class="paso paso3"><p class="tooltip" title="Evaluación Riesgo">3k</p></div>
					<div class="linea"></div>
				</div>
				<div class="col-md-3 paso_general" id="paso4" data-id="4">
					<div class="paso paso4"><p class="tooltip" title="Documentación adicional">4k</p></div>
					<div class="linea"></div>
				</div>
				<div class="col-md-3 paso_general" id="paso5" data-id="5">
					<div class="paso paso5 "><p class="tooltip" title="Trámites Legales">5k</p></div>
					<div class="linea"></div>
				</div>
			</div>
		</div>

		<div class="margin margin60"></div>

		<div class="row">
			<div class="col-md-8">
				<?php if($tengoSueno == 2){ ?>
				<form id="antecedentes" class="hack-form">
					<div id="collapsables">
						<div class="collapse">
							<h2 class="titulo_border">Estado de situación</h2>

							<div class="collapse-title" data-content="collapse-1">
								<span class="toggle glyphicon glyphicon-chevron-down"></span>
								<h3>2.1.- Antecedentes adicionales</h3>
							</div>
							<div class="collapse-content" id="collapse-1">
								<div class="lineaform">
									<label>Estado civil</label>
									<select name="estado_civil">
										<option value="soltero">Soltero</option>
									</select>
								</div>
								<div class="lineaform">
									<label>Sucursal atención</label>
									<select name="sucursales">
										<?php
										foreach($Sucursales as $sucursal){
											echo '<option>'.$sucursal.'</option>';
										}
										?>
									</select>
								</div>
							</div>
						</div>

						<div class="collapse">
							<div class="collapse-title" data-content="collapse-2">
								<span class="toggle glyphicon glyphicon-chevron-down"></span>
								<h3>2.2.- Antecedentes educacionales</h3>
							</div>
							<div class="collapse-content" id="collapse-2">
								<div class="lineaform">
									<label>Nivel educacional</label>
									<select name="nivel_educacion">
										<option value="universitaria">Universitaria</option>
									</select>
								</div>
								<div class="lineaform">
									<label>Universidad</label>
									<select name="universidad">
										<option value="udechile">Universidad de Chile</option>
									</select>
								</div>
								<div class="lineaform">
									<label>Profesión</label>
									<select name="profesion">
										<option value="ingeniero">Ingeniería</option>
									</select>
								</div>
							</div>
						</div>

						<div class="collapse">
							<div class="collapse-title" data-content="collapse-3">
								<span class="toggle glyphicon glyphicon-chevron-down"></span>
								<h3>2.3.- Antecedentes laborales</h3>
							</div>
							<div class="collapse-content" id="collapse-3">
								<div class="lineaform">
									<label>Nombre empresa</label>
									<input type="text" name="empresa">
								</div>
								<div class="lineaform">
									<label>Cargo</label>
									<input type="text" name="cargo">
								</div>
								<div class="lineaform">
									<label>Contrato</label>
									<select name="contrato">
										<option value="fijo">Fijo</option>
									</select>
								</div>
								<div class="lineaform">
									<label>Ingreso líquido</label>
									<input type="number" name="ingreso" value="0">
								</div>
							</div>
						</div>

						<div class="collapse">
							<div class="collapse-title" data-content="collapse-4">
								<span class="toggle glyphicon glyphicon-chevron-down"></span>
								<h3>2.4.- Antecedentes conyugales</h3>
							</div>
							<div class="collapse-content" id="collapse-4">
								<div class="lineaform">
									<label>Nombre</label>
									<input type="text" name="nombre_conyugal">
								</div>
								<div class="lineaform">
									<label>Sexo</label>
									<select name="sexo_conyugal">
										<option value="M">Masculino</option>
										<option value="F">Femenino</option>
									</select>
								</div>
								<div class="lineaform">
									<label>Profesión</label>
									<input type="text" name="profesion_conyugal">
								</div>
							</div>
						</div>
						
						<div class="collapse">
							<div class="collapse-title" data-content="collapse-5">
								<span class="toggle glyphicon glyphicon-chevron-down"></span>
								<h3>2.5.- Activos</h3>
							</div>
							<div class="collapse-content" id="collapse-5">
								<div class="lineaform">
									<label>Vehiculo</label>
									<input type="text" name="vehiculo">
								</div>
								<div class="lineaform">
									<label>Valor vehiculo</label>
									<input type="number" name="valor_vehiculo" value="0">
								</div>
							</div>
						</div>

						<div class="collapse">
							<br><br>
							<h2 class="titulo_border">Adjuntar documentos</h2>

							<div class="collapse-title" data-content="collapse-6">
								<span class="toggle glyphicon glyphicon-chevron-down"></span>
								<h3>2.6.- Cotizaciones previsionales</h3>
							</div>
							<div class="collapse-content" id="collapse-6">
								<div class="lineaform">
									<a href="https://www.previred.com/web/previred/" target="_blank">Descargar aquí</a>
								</div>
								<div class="lineaform file">
									<label> <div class="apart"></div></label>
									<label class="file" for="pdf1"><span class="glyphicon glyphicon-file"></span>Buscar archivo</label>
									<input type="file" name="cot_prev" accept=".pdf" id="pdf1">
								</div>
							</div>
						</div>
						<div class="collapse">
							<div class="collapse-title" data-content="collapse-7">
								<span class="toggle glyphicon glyphicon-chevron-down"></span>
								<h3>2.7.- Contrato de trabajo</h3>
							</div>
							<div class="collapse-content" id="collapse-7">
								<div class="lineaform file">
									<label> <div class="apart"></div></label>
									<label class="file" for="pdf2"><span class="glyphicon glyphicon-file"></span>Buscar archivo</label>
									<input type="file" name="contrato_trab" accept=".pdf" id="pdf2">
								</div>
							</div>
						</div>
						<div class="collapse">
							<div class="collapse-title" data-content="collapse-8">
								<span class="toggle glyphicon glyphicon-chevron-down"></span>
								<h3>2.8.- Certificado de deuda SBIF</h3>
							</div>
							<div class="collapse-content" id="collapse-8">
								<div class="lineaform">
									<a href="https://www.clientebancario.cl/informedeudacb/aplicacion?indice=110.0" target="_blank">Descargar aquí</a>
								</div>
								<div class="lineaform file">
									<label> <div class="apart"></div></label>
									<label class="file" for="pdf3"><span class="glyphicon glyphicon-file"></span>Buscar archivo</label>
									<input type="file" name="cert_sbif" accept=".pdf" id="pdf3">
								</div>
							</div>
						</div>

					</div>
					<div class="margin margin30"></div>
					<div class="row">
						<div class="col-md-3">
							<input type="submit" value="Guardar" class="azul">
						</div>
					</div>
				</form>
				<?php }elseif($tengoSueno == 3){ ?>
				
				<div id="alerta" class="success">
					<h2><span class="glyphicon glyphicon-ok"></span>Evaluación de riesgos</h2>
					<p>De acuerdo a los antecedentes presentados y analizados:<br>cliente fue aprobado satisfactoriamente.</p>
					<br><br>
					<p><mark>Gastos operacionales</mark><br>Abonar a cuenta virtual:<br><br>
						N° <?php echo $_SESSION["datosUsuario"]['Cliente']['rut']; ?><br>
						Monto: $800.000.-</p>
				</div>
				<div class="margin margin30"></div>
				<a href="#" class="boton gris">Pagar en línea</a>
				<a href="<?php echo $this->Html->url(["controller" => "Home","action" => "workflow",4])?>" class="boton azul" id="registarSemaforo">Continuar</a>

				<?php } elseif($tengoSueno == 4){ ?>
					<form id="documentos" class="hack-form">
						<div id="collapsables">
							<div class="collapse">
								<h2 class="titulo_border">Antecedentes de la propiedad</h2>

								<div class="collapse-title" data-content="collapse-6">
									<span class="toggle glyphicon glyphicon-chevron-down"></span>
									<h3>4.1.- Acerca de la propiedad</h3>
								</div>
								<div class="collapse-content" id="collapse-6">
									<div class="lineaform">
										<label>Dirección de la propiedad</label>
										<input type="text" name="direccion_propiedad" id="direccion_propiedad" required value="Alcántara 99">
									</div>
									<div class="lineaform">
										<label>Comuna</label>
										<select name="comuna" id="comuna">
											<option>Las Condes</option>
										</select>
									</div>
									<div class="lineaform">
										<label>Región</label>
										<select name="region" id="region">
											<option>Metropolitana</option>
										</select>
									</div>
								</div>
							</div>

							<div class="collapse">
								<br><br>
								<h2 class="titulo_border">Puntos de interés</h2>
								<div id="map" style="height:300px;"></div>
							</div>

							<div class="collapse">
								<br><br>
								<h2 class="titulo_border">Documentación adicional</h2>

								<div class="collapse-title" data-content="collapse-9">
									<span class="toggle glyphicon glyphicon-chevron-down"></span>
									<h3>4.2.- Fotocopia de cedula de identidad</h3>
								</div>
								<div class="collapse-content" id="collapse-9">
									<div class="lineaform">
										<a href="https://www.clientebancario.cl/informedeudacb/aplicacion?indice=110.0" target="_blank">Descargar aquí</a>
									</div>
									<div class="lineaform file">
										<label> <div class="apart"></div></label>
										<label class="file" for="pdf4"><span class="glyphicon glyphicon-file"></span>Buscar archivo</label>
										<input type="file" name="fotocopia_carnet" accept=".pdf" id="pdf4">
									</div>
								</div>
							</div>
							<div class="collapse">
								<div class="collapse-title" data-content="collapse-10">
									<span class="toggle glyphicon glyphicon-chevron-down"></span>
									<h3>4.3.- Inscripcion de dominio de propiedad</h3>
								</div>
								<div class="collapse-content" id="collapse-10">
									<div class="lineaform">
										<a href="https://www.clientebancario.cl/informedeudacb/aplicacion?indice=110.0" target="_blank">Descargar aquí</a>
									</div>
									<div class="lineaform file">
										<label> <div class="apart"></div></label>
										<label class="file" for="pdf5"><span class="glyphicon glyphicon-file"></span>Buscar archivo</label>
										<input type="file" name="inscripcionDominioPropiedad" accept=".pdf" id="pdf5">
									</div>
								</div>
							</div>
							
							<div class="collapse">
								<div class="collapse-title" data-content="collapse-11">
									<span class="toggle glyphicon glyphicon-chevron-down"></span>
									<h3>4.4.- Escritura publica</h3>
								</div>
								<div class="collapse-content" id="collapse-11">
									<div class="lineaform">
										<a href="https://www.clientebancario.cl/informedeudacb/aplicacion?indice=110.0" target="_blank">Descargar aquí</a>
									</div>
									<div class="lineaform file">
										<label> <div class="apart"></div></label>
										<label class="file" for="pdf6"><span class="glyphicon glyphicon-file"></span>Buscar archivo</label>
										<input type="file" name="escrituraPublica" accept=".pdf" id="pdf6">
									</div>
								</div>
							</div>
							<div class="collapse">
								<div class="collapse-title" data-content="collapse-12">
									<span class="toggle glyphicon glyphicon-chevron-down"></span>
									<h3>4.5.- Estudio de titulo 10 años</h3>
								</div>
								<div class="collapse-content" id="collapse-12">
									<div class="lineaform">
										<a href="https://www.clientebancario.cl/informedeudacb/aplicacion?indice=110.0" target="_blank">Descargar aquí</a>
									</div>
									<div class="lineaform file">
										<label> <div class="apart"></div></label>
										<label class="file" for="pdf7"><span class="glyphicon glyphicon-file"></span>Buscar archivo</label>
										<input type="file" name="estudioTitulo" accept=".pdf" id="pdf7">
									</div>
								</div>
							</div>
							<div class="collapse">
								<div class="collapse-title" data-content="collapse-13">
									<span class="toggle glyphicon glyphicon-chevron-down"></span>
									<h3>4.6.- Certificado de no expropiacion serviu</h3>
								</div>
								<div class="collapse-content" id="collapse-13">
									<div class="lineaform">
										<a href="https://www.clientebancario.cl/informedeudacb/aplicacion?indice=110.0" target="_blank">Descargar aquí</a>
									</div>
									<div class="lineaform file">
										<label> <div class="apart"></div></label>
										<label class="file" for="pdf8"><span class="glyphicon glyphicon-file"></span>Buscar archivo</label>
										<input type="file" name="certNoExpropiacion" accept=".pdf" id="pdf8">
									</div>
								</div>
							</div>
							
						</div>
						<div class="margin margin30"></div>
						<div class="row">
							<div class="col-md-3">
								<input type="submit" value="Guardar" class="azul">
							</div>
						</div>
					</form>
				<?php }elseif($tengoSueno == 5){ ?>

				<h2 class="titulo_border">Trámites legales del banco</h2>
				<ul class="lista_check">
					<li><span class="glyphicon glyphicon-ok"></span>Escritura compraventa.</a></li>
					<li><span class="glyphicon glyphicon-ok"></span>Inscripción del contrato en el CBRS.</a></li>
					<li><span class="glyphicon glyphicon-ok"></span>Pase a retirar sus llaves.</a></li>
				</ul>
				<div class="margin margin30"></div>
				<div id="alerta" class="success">
					<h2><span class="glyphicon glyphicon-ok"></span>Su crédito hipotecario ha finalizado con éxito</h2>
					<p>Estimado cliente, su operación hipotecaria ha finalizado con éxito y lo invitamos cordialmente a que retire las llaves de su propiedad soñada.</p>
				</div>

				<?php } ?>
			</div>
			<div class="col-md-4 text_center">
				<?php
				if($tengoSueno == 2){
					echo $this->Html->image('mono_azul.png', array('alt' => 'BCI'));
				}elseif($tengoSueno == 3){
					echo $this->Html->image('mono_verde.png', array('alt' => 'BCI'));
				}elseif($tengoSueno == 4){
					echo $this->Html->image('mono_amarillo.png', array('alt' => 'BCI'));
				}elseif($tengoSueno == 5){
					echo $this->Html->image('monos.png', array('alt' => 'BCI'));
				}
				?>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		<?php if($tengoSueno == 5){?>
			$.ajax({
				url: '<?php echo $this->Html->url(["controller" => "Home","action" => "finalizarWorkflow"])?>',
				type: 'POST',
		        processData: false,
		        contentType: false,
				success: function(data) {
					var parsed = $.parseJSON(data);
					console.log(parsed);
				},
				error: function(data){
					
				},
			});
		<?php } ?>

		$('#registarSemaforo').click(function(event){
			event.preventDefault();
			var url = $(this).attr('href');

			$.ajax({
				url: '<?php echo $this->Html->url(["controller" => "Home","action" => "registarSemaforo"])?>',
				type: 'POST',
		        processData: false,
		        contentType: false,
				success: function(data) {
					var parsed = $.parseJSON(data);
					if(parsed == 'Datos Guardados.'){
						window.location = url;
					}else{
						console.log(parsed);
					}
				},
				error: function(data){
					
				},
			});	
		});

		$("#antecedentes").submit(function(){
			$.ajax({
				url: '<?php echo $this->Html->url(["controller" => "Home","action" => "guardarAntecedentes"])?>',
				type: 'POST',
				data: new FormData(this),
		        processData: false,
		        contentType: false,
				success: function(data) {
					var parsed = $.parseJSON(data);
					if(parsed == 'Datos Guardados.'){
						window.location = '<?php echo $this->Html->url(["controller" => "Home","action" => "workflow",3])?>'
						
					}else{
						
					}
				},
				error: function(data){
					
				},
			});	
			
			return false;
		});


		$("#documentos").submit(function(){
			$.ajax({
				url: '<?php echo $this->Html->url(["controller" => "Home","action" => "guardarAntecedentesFourPoint"])?>',
				type: 'POST',
				data: new FormData(this),
		        processData: false,
		        contentType: false,
				success: function(data) {
					var parsed = $.parseJSON(data);
					if(parsed == 'Datos Guardados.'){
						window.location = '<?php echo $this->Html->url(["controller" => "Home","action" => "workflow",5])?>'
						
					}else{
						
					}
				},
				error: function(data){
					
				},
			});	
			
			return false;
		});
	});
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvPwt41hrJ0Mrn79-pqM3Tor4ciY5YcFI&libraries=places"></script>
<script>
	var address = "Alcantara 99 las condes";
	var latitude;
	var longitude;
	$.ajax({
	  url:"http://maps.googleapis.com/maps/api/geocode/json?address="+address+"&sensor=false",
	  type: "POST",
	  success:function(res){
		 latitude = (res.results[0].geometry.location.lat);
		 longitude = (res.results[0].geometry.location.lng);
		 initMap(latitude, longitude);
	  }
	});
	var map;
	var infowindow;

	function initMap(latitude, longitude) {
		var pyrmont = {lat: latitude, lng: longitude};
		console.log(pyrmont);

		map = new google.maps.Map(document.getElementById('map'), {
			center: pyrmont,
			zoom: 15
		});

		infowindow = new google.maps.InfoWindow();
		var service = new google.maps.places.PlacesService(map);
		service.nearbySearch({
			location: pyrmont,
			radius: 500,
			type: ['store']
		}, callback);
	}

	function callback(results, status) {
		if (status === google.maps.places.PlacesServiceStatus.OK) {
			for (var i = 0; i < results.length; i++) {
				createMarker(results[i]);
			}
		}
	}

	function createMarker(place) {
		var placeLoc = place.geometry.location;
		var marker = new google.maps.Marker({
			map: map,
			position: place.geometry.location
		});

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.setContent(place.name);
			infowindow.open(map, this);
		});
	}
</script>