/*

id_datos_personales
id_ficha_medica
txt_nombre
txt_apellido
txt_num_identidad
date_fecha_ing 
date_fecha_nac
slc_sexo
slc_departamento
slc_ciudad
txt_direccion
txt_celular
txt_email
slc_grupo_sanguineo
slc_anteojos
slc_accidentes
slc_padecimiento[]
txt_observaciones

*/


$(document).ready(function(){
	var result;
    
    $("#add-padecimiento").click(function() {
        var intId = $("#div-padecimiento div").length + 1;
        var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
        
        
        var fType = $("<select id=\"slc_padecimiento[]\" name=\"slc_padecimiento[]\" class=\"fieldtype selected_all\">" + llenarPadecimiento() + "</select>");
        var removeButton = $("<button class=\"remove mainBtn3\" id=\"add\">-</button>");

        removeButton.click(function() {
            $(this).parent().remove();
        });
        
        fieldWrapper.append(fType);
        fieldWrapper.append(removeButton);
        $("#div-padecimiento").append(fieldWrapper);
    });

    llenarAltura = function(){
    	$.ajax({
    		url:"../ajax/eventos_form_expediente.php?accion=2",
			success:function(resultado){
				$("#slc_altura").html(resultado);
			}
    	});//ajax
    }//llenarAltura
    llenarAltura();

    llenarPadecimiento = function(){
    	$.ajax({
    		url:"../ajax/eventos_form_expediente.php?accion=3",
			success:function(resultado){
				result = resultado;
			}
    	});//ajax
    	return result;
    }
    
    llenarDepartamento = function(){
    	$.ajax({
    		url:"../ajax/eventos_form_expediente.php?accion=4",
			success:function(resultado){
				$("#slc_departamento").html(resultado);
			}
    	});//ajax
    }
    llenarDepartamento();

    

	$("select[id=slc_departamento]").change(function(){
		var paramentro = "codigoDepartamento=" + $('select[id=slc_departamento]').val();
		$.ajax({
    		url:"../ajax/eventos_form_expediente.php?accion=5",
    		method: "POST",
    		data: paramentro,
			success:function(resultado){
				$("#slc_ciudad").html(resultado);
			}
    	});//ajax
	});//slc_ciudad


	$("#btn_guardar").click(function(){
		//var params = {};
			/*params.dataArray = [];
			params.dataArray[0] = {};
			params.dataArray[0].nombre = $("#txt_nombre").val();
			params.dataArray[0].apellido = $("#txt_apellido").val();
			params.dataArray[0].identidad = $("#txt_num_identidad").val();
			params.dataArray[0].fecha_ing = $("#date_fecha_ing").val();
			params.dataArray[0].fecha_nac = $("#date_fecha_nac").val();
			params.dataArray[0].sexo = $("#slc_sexo").val();
			params.dataArray[0].departamento = $("#slc_departamento").val();
			params.dataArray[0].ciudad = $("#slc_ciudad").val();
			params.dataArray[0].direccion = $("#txt_direccion").val();
			params.dataArray[0].celular = $("#txt_celular").val();
			params.dataArray[0].email = $("#txt_email").val();
			params.dataArray[0].grupo_sanguineo = $("#slc_grupo_sanguineo").val();
			params.dataArray[0].anteojos = $("#slc_anteojos").val();
			params.dataArray[0].accidentes = $("#slc_accidentes").val();
			params.dataArray[0].observaciones = $("#txt_observaciones").val();*/


		

		//params.padecimientos = [];
		var padecimientos=[];//esto va con lo de JSON
		var padecimientosSeleccionados="";
		var i = 0;
		
		$('.selected_all').each(function(){
			padecimientos[i] = $(this).val();
			padecimientosSeleccionados+="slc_padecimiento[]="+padecimientos[i]+"&";
		   	i++;
		});
		
		/*var data = JSON.stringify(params);
		var path = '../ajax/form_expediente_save.php';
		var posting = $.post(path, { info: data });

		posting.done(function(data){
			console.log(data);
		});

		posting.fail(function(data, status, xhr){
			console.log(xhr);
		});

		posting.always(function(data, status, xhr){
			console.log(data);
		});*/
		
		//alert(padecimientosSeleccionados);
		//alert ($("select[name='slc_padecimiento[]']:selected").length);
		

		var parametros= "txt_nombre=" + $("#txt_nombre").val()+
						"&txt_apellido=" + $("#txt_apellido").val()+
						"&txt_num_identidad=" + $("#txt_num_identidad").val()+
						"&date_fecha_ing=" + $("#date_fecha_ing").val()+
						"&date_fecha_nac=" + $("#date_fecha_nac").val()+
						"&slc_sexo=" + $("#slc_sexo").val()+
						"&slc_departamento=" + $("#slc_departamento").val()+
						"&slc_ciudad=" + $("#slc_ciudad").val()+
						"&txt_email=" + $("#txt_email").val()+
						"&txt_direccion=" + $("#txt_direccion").val()+
						"&txt_celular=" + $("#txt_celular").val()+
						"&slc_grupo_sanguineo=" + $("#slc_grupo_sanguineo").val()+
						"&slc_anteojos=" + $("#slc_anteojos").val()+
						"&slc_accidentes=" + $("#slc_accidentes").val()+
						"&slc_altura=" + $("#slc_altura").val()+
						"&" + padecimientosSeleccionados +
						"txt_observaciones=" + $("#txt_observaciones").val();

		$.ajax({
    		url:"../ajax/eventos_form_expediente.php?accion=6",
    		method: "POST",
    		data: parametros,
			success:function(resultado){
				$("#div-respuesta").html(resultado);
				$("#btn_guardar").attr("disabled", true);
			}
    	});//ajax
	});//btn guardar

	$("#btn_nuevo").click(function(){
		$("#txt_nombre").val('');
		$("#txt_apellido").val('');
		$("#txt_num_identidad").val('');
		$("#date_fecha_ing").val('');
		$("#date_fecha_nac").val('');
		$("#slc_sexo").val('');
		$("#slc_departamento").val('');
		$("#slc_ciudad").val('');
		$("#txt_email").val('');
		$("#txt_direccion").val('');
		$("#slc_grupo_sanguineo").val('');
		$("#slc_anteojos").val('');
		$("#slc_accidentes").val('');
		$("#slc_altura").val('');
		$("#txt_observaciones").val('');
		$("#txt_celular").val('');
		$("#btn_guardar").attr("disabled", false);
	});//btn nuevo


});


