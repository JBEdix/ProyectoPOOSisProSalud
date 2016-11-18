$(document).ready(function(){
	llenarTarjetas = function(){
		$.ajax({
			url:"../ajax/eventos_form_reporte_medicos.php?accion=1",
			success:function(resultado){
				$("#div_tarjetas").html(resultado);
			}
		});//ajax
	}//llenar tarjetA
	llenarTarjetas();


});//ready