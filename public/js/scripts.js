$(document).ready(function() {
	$('#listUser > tbody > tr').on('click', function(){
		var userid = $(this).attr('id');
		$('#listUser > tbody > tr').removeClass('info');
		$(this).addClass('info');
		pagina_a_cargar = "user/" + userid;

		$.ajax({  
			type: "GET",
			url: pagina_a_cargar,
			success: function(data) {
				$('#detalles').html(data);				
			},  
			error: function(err) {
				$('#detalles').html(err);
			}
		});
	});

	$('#listTema > tbody > tr').on('click', function () {
		var temaid = $(this).attr('id');
		$('#listTema > tbody > tr').removeClass('info');
		$(this).addClass('info');
		pagina_a_cargar = "tema/" + temaid;

		$.ajax({
			type: "GET",
			url: pagina_a_cargar,
			success: function (data) {
				$('#detalles').html(data);
			},
			error: function (err) {
				$('#detalles').html(err);
			}
		});
	});
	

});