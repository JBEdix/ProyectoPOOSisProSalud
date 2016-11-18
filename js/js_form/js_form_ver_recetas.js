$(document).ready(function(){
	llenarTarjetas = function(){
		$.ajax({
			url:"../ajax/eventos_form_ver_recetas.php?accion=1",
			success:function(resultado){
				$("#div_res").html(resultado);
			}
		});//ajax
	}//llenar tarjetA
	llenarTarjetas();


});//ready