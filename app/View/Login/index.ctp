<?php if(empty($_SESSION["datosUsuario"]['Cliente'])){ ?>
<section class="seccion bg dark" style="background-image:url(<?php echo $this->webroot.'img/login_bg.jpg'; ?>);">
	<div class="container">
		<div class="col-md-5 center">
			<form id="login" class="hack-form">
				<div class="lineaform text_center">
					<h2>Iniciar sesión</h2>
				</div>

				<div class="lineaform">
					<label>RUT</label>
					<input type="text" name="rut" required>
				</div>
				<div class="lineaform">
					<label>Contraseña</label>
					<input type="password" name="password" required>
				</div>

				<div class="lineaform">
					<input type="submit" class="azul" value="Entrar">
				</div>

				<div class="lineaform">
					<div class="row">
						<div class="col-md-6">
							<a href="#">Recuperar contraseña</a>
						</div>
						<div class="col-md-6 text_right">
							<a href="#" onclick="abrirLightbox(); return false;">Registrarse</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<section class="lightbox">
	<div class="cont-ext">
		<div class="cont-int">
			<div class="col-md-5 center">
				<div class="lightbox_cont">
					<span onclick="cerrarLightbox(); return false;" class="glyphicon glyphicon-remove"></span>

					<div class="scroll">
						<div id="content">
							<form class="hack-form" id="registrar_form">
								<div id="respuesta"></div>
								<div class="row">
									<div class="col-md-12 lineaform">
										<label>Nombres</label>
										<input type="text" name="nombres" required>
									</div>
									<div class="col-md-6 lineaform">
										<label>Apellidos Paterno</label>
										<input type="text" name="apellido_p" required>
									</div>
									<div class="col-md-6 lineaform">
										<label>Apellido Materno</label>
										<input type="text" name="apellido_m" required>
									</div>
									<div class="col-md-6 lineaform">
										<label>Email</label>
										<input type="email" name="email" required>
									</div>
									<div class="col-md-6 lineaform">
										<label>RUT</label>
										<input type="text" name="rut" required>
									</div>
									<div class="col-md-6 lineaform">
										<label>País</label>
										<select name="nacionalidad">
											<option>Chile</option>
										</select>
									</div>
									<div class="col-md-6 lineaform">
										<label>Región</label>
										<select name="region">
											<option value="Metropolitana">Metropolitana</option>
										</select>
									</div>
									<div class="col-md-6 lineaform">
										<label>Dirección</label>
										<input type="text" name="direccion" required>
									</div>
									<div class="col-md-6 lineaform">
										<label>Comuna</label>
										<select name="comuna">
											<option>Las Condes</option>
										</select>
									</div>
									<div class="col-md-6 lineaform">
										<label>Teléfono móvil</label>
										<input type="text" name="tel_cel" pattern="^[0-9+]{8,12}$" required>
									</div>
									<div class="col-md-6 lineaform">
										<label>Teléfono fijo</label>
										<input type="text" name="tel_fijo">
									</div>
									<div class="col-md-6 lineaform">
										<label>Fecha nacimiento</label>
										<input type="text" name="fecha_nacim" required id="datepicker">
									</div>
									<div class="col-md-6 lineaform">
										<label>Sexo</label>
										<select name="sexo">
											<option value="M">Masculino</option>
											<option value="F">Femenino</option>
										</select>
									</div>
									<div class="col-md-6 lineaform">
										<label>Contraseña</label>
										<input type="password" name="pass1" required>
									</div>
									<div class="col-md-6 lineaform">
										<label>Validar contraseña</label>
										<input type="password" name="pass2" required>
									</div>
									<div class="col-md-6 lineaform">
										<input type="submit" value="Registarse" class="azul">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function(){
		$("#login").submit(function(){
			$.ajax({
				url: '<?php echo $this->Html->url(["controller" => "Login","action" => "validarUsuario"])?>',
				type: 'POST',
				data: $(this).serialize(),
				success: function(data) {
					var parsed = $.parseJSON(data);
					if(parsed == "Usuario correcto."){
						window.location = '<?php echo $this->Html->url(["controller" => "home","action" => "workflow",2])?>';
					}else{
						alert("usuario o clave incorrecta");
					}
				},
				error: function(e){

					
				},
			});	
			return false;
		});

		$("#registrar_form").submit(function(){
			$.ajax({
				url: '<?php echo $this->Html->url(["controller" => "Login","action" => "registrar"])?>',
				type: 'POST',
				data: $(this).serialize(),
				success: function(data) {
					var parsed = $.parseJSON(data);
					if(parsed == 'Usuario registrado.'){
						$('#registrar_form')[0].reset();
						$('#registrar_form #respuesta').html('<div class="alert top success"><p>'+parsed+'</p></div>');

						$(".lightbox .scroll").animate({ scrollTop: 0 }, 1000);

						setTimeout(function(){
							cerrarLightbox();
						}, 2000);
					}else{
						$('#registrar_form #respuesta').html('<div class="alert top error"><p>Hay un campos vacío</p></div>');
					}
				},
				error: function(e){

				},
			});	
			return false;
		});
	});

</script>
<?php }else{ ?>
	<script>
	window.location = '<?php echo $this->Html->url(["controller" => "home","action" => "workflow", 2])?>';
	</script>
<?php } ?>