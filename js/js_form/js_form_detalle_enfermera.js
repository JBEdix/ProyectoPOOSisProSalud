$(document).ready(function(){
	llenarTarjetas = function(){
		var parametro= "txt_id_empleado=" + $("#txt_id_empleado").val();
		
		$.ajax({
			url:"../ajax/eventos_form_detalle_enfermera.php?accion=1",
			method: "POST",
			data: parametro,

			success:function(resultado){
				$("#div_res").html(resultado);
			}
		});//ajax
	}//llenar tarjetA
	llenarTarjetas();


});//ready