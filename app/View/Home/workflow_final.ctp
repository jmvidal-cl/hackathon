<section class="seccion">
	<div class="container">
		<div id="pasos">
			<div class="row flex nopadding">
				<div class="paso paso1 completado"><p class="tooltip" title="Registro">1</p></div>
				<div class="paso paso2 completado"><p class="tooltip" title="Antecedentes">2</p></div>
				<div class="paso paso3 completado"><p class="tooltip" title="Subida PDF">3</p></div>
				<div class="col-md-6" id="paso1">
					<div class="linea completado"></div>
				</div>
				<div class="col-md-6" id="paso2">
					<div class="linea completado"></div>
				</div>
			</div>
		</div>

		<div class="margin margin60"></div>

		<div class="row">
			<div class="col-md-8">
				<form id="subida_pdf" method="POST" action="<?php echo $this->Html->url(["controller" => "Home","action" => "UploadFiles"])?>" enctype="multipart/form-data" class="hack-form">
					<div id="collapsables">
						<?php 
							$aux = 0;
							foreach ($TiposDeDocumentos as $tipo){
								$aux++;
						?>
						<div class="collapse">
							<div class="collapse-title" data-content="collapse-<?php echo $aux?>">
								<span class="toggle glyphicon glyphicon-chevron-down"></span>
								<h3><?php echo $aux?>.- <?php echo $tipo["TBdocumentos"]["descripcion_documento"]?></h3>
							</div>
							<div class="collapse-content" id="collapse-<?php echo $aux?>">
								<div class="lineaform">
									<a href="https://www.previred.com/web/previred/" target="_blank">Descargar aquí</a>
								</div>
								<div class="lineaform">
									<label> <div class="apart"></div></label>
									<label class="file" for="pdf<?php echo $aux?>">
										<span class="glyphicon glyphicon-file"></span>
										Buscar archivo
									</label>
									<input type="file" name="documento[]" accept=".pdf" id="pdf<?php echo $aux?>">
								</div>
							</div>
						</div>
						<?php }?>
					</div>
					<div class="margin margin30"></div>
					<div class="row">
						<div class="col-md-3">
							<input type="submit" value="Guardar" class="azul">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
</section>

<script>
	$('#subida_pdf input').change(function(){
		var id = $(this).attr('id');
		if($(this).val()){
			$(this).parent().parent().parent().find('.collapse-title h3').prepend('<span class="glyphicon glyphicon-ok"></span>');
			$('#subida_pdf label[for="'+id+'"]').addClass('success');
			$('#subida_pdf label[for="'+id+'"]').html('<span class="glyphicon glyphicon-ok"></span>Archivo listo');
		}
	});
</script>