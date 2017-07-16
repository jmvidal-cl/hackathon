
<section class="seccion">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="hack-form" id="registrar_form">
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
							<input type="date" name="fecha_nacim" required id="datepicker">
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
</section>


<script>
	$(document).ready(function(){
		$("#registrar_form").submit(function(){
			$.ajax({
				url: '<?php echo $this->Html->url(["controller" => "Login","action" => "registrar"])?>',
				type: 'POST',
				data: $(this).serialize(),
				success: function(data) {
					alert(data);
				},
				error: function(e){

				},
			});	
			return false;
		});
	});
</script>