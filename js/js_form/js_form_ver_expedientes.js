$(document).ready(function(){
	llenarTarjetas = function(){
		$.ajax({
			url:"../ajax/eventos_form_ver_expedientes.php?accion=1",
			success:function(resultado){
				$("#div_tarjetas").html(resultado);
			}
		});//ajax
	}//llenar tarjetA
	llenarTarjetas();


});//ready