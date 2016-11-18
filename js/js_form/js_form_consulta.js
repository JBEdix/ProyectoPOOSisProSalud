$(document).ready(function(){

	$("#btn_buscar").click(function(){
		var parametro = "txt_num_identidad=" + $("#txt_num_identidad").val();
		$.ajax({
			url:"../ajax/eventos_form_consulta.php?accion=1",
    		method: "POST",
    		data: parametro,
			success:function(resultado){
				$("#div_res").html(resultado);
				$("#txt_nombre_paciente").val($("#txt_nom").val());
			}
		});//ajax		
		

	});//btn buscar

	llenarPresionArterial = function(){
		$.ajax({
			url:"../ajax/eventos_form_consulta.php?accion=2",    		
			success:function(resultado){
				$("#slc_presion_arterial").html(resultado);
			}
		});//ajax
	}
	llenarPresionArterial();

	llenarPeso = function(){
		$.ajax({
			url:"../ajax/eventos_form_consulta.php?accion=3",    		
			success:function(resultado){
				$("#slc_peso").html(resultado);
			}
		});//ajax
	}
	llenarPeso();

	llenarPrecioConsulta = function(){
		$.ajax({
			url:"../ajax/eventos_form_consulta.php?accion=4",    		
			success:function(resultado){
				$("#slc_precio_consulta").html(resultado);
			}
		});//ajax
	}
	llenarPrecioConsulta();

	llenarDoctores = function(){
		$.ajax({
			url:"../ajax/eventos_form_consulta.php?accion=5",    		
			success:function(resultado){
				$("#slc_doctor").html(resultado);
			}
		});//ajax
	}
	llenarDoctores();

	$("#btn_crear_consulta").click(function(){
		var parametros = "txt_temperatura=" + $("#txt_temperatura").val()+
						 "&txt_turno_consulta=" + $("#txt_turno_consulta").val()+
						 "&date_fecha_consulta=" + $("#date_fecha_consulta").val()+
						 "&slc_peso=" + $("#slc_peso").val()+
						 "&slc_presion_arterial=" + $("#slc_presion_arterial").val()+
						 "&slc_precio_consulta=" + $("#slc_precio_consulta").val()+
						 "&slc_doctor=" + $("#slc_doctor").val()+
						 "&txt_id_expediente=" + $("#txt_id_expediente").val();
		$.ajax({
			url:"../ajax/eventos_form_consulta.php?accion=6",
			method:"POST",
			data: parametros,
			success:function(resultado){
				$("#div-mensaje").html(resultado);
				$("#btn_crear_consulta").attr("disabled", true);
			}

		});//ajax
	});//btn crear consulta

	
	$("#btn_nueva_consulta").click(function(){
		$("#txt_temperatura").val(' ');
		$("#txt_turno_consulta").val(' ');
		$("#date_fecha_consulta").val(' ');
		$("#slc_peso").val(' ');
		$("#slc_presion_arterial").val(' ');
		$("#slc_precio_consulta").val(' ');
		$("#slc_doctor").val(' ');
		$("#txt_id_expediente").val(' ');

	});//btn nueva consulta
	
/*
txt_temperatura
txt_turno_consulta
date_fecha_consulta
slc_peso
slc_presion_arterial
slc_precio_consulta
slc_doctor
txt_id_expediente*/

});//document



