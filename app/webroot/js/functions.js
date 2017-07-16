function abrirLightbox(){
	$('.lightbox').fadeIn();
}

function cerrarLightbox(){
	$('.lightbox').fadeOut();
}

$(document).ready(function(){
	$.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: '< Ant',
		nextText: 'Sig >',
		currentText: 'Hoy',
		monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
		dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
		dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
		weekHeader: 'Sm',
		dateFormat: 'yy-mm-dd',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''
	};
	$.datepicker.setDefaults($.datepicker.regional['es']);

	$(function(){
		$("#datepicker").datepicker();
	});

	var height = $(window).height();
	var heightMax = Math.ceil(height * 70) / 100;
	$('.lightbox_cont .scroll').css('max-height',heightMax+'px');
	$('.lightbox_cont .scroll').addClass('active');

	$('.tooltip').each(function(){
		var texto = $(this).attr('title');
		$(this).parent().append('<div class="tooltip-mensaje"><p>'+texto+'</p></div>');

		$(this).hover(function(){
			$(this).parent().find('.tooltip-mensaje').fadeToggle();
		});
	});

	$('.collapse-title').click(function(){
		var target = $(this).attr('data-content');

		if(!$(this).parent().hasClass('active')){
			$('.collapse').removeClass('active');
			$('.collapse-content').slideUp();
			$('.collapse-title').find('span.toggle').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');

			$('#'+target).slideDown();
			$(this).parent().addClass('active');
			$(this).find('span.toggle').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
		} else{
			$('#'+target).slideUp();
			$(this).parent().removeClass('active');
			$(this).find('span.toggle').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
		}
	});

	$('.lineaform.file input').change(function(){
		var id = $(this).attr('id');
		if($(this).val()){
			$(this).parent().parent().parent().find('.collapse-title h3').prepend('<span class="glyphicon glyphicon-ok"></span>');
			$('.lineaform.file label[for="'+id+'"]').addClass('success');
			$('.lineaform.file label[for="'+id+'"]').html('<span class="glyphicon glyphicon-ok"></span>Archivo listo');
		}
	});
});

$(document).keyup(function(e) {
	if (e.keyCode == 27) {
		cerrarLightbox();
	}
});