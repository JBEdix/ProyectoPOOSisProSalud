$(document).ready(function(){
	$('#div-login').bootstrapValidator({
		feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            txt_usuario: {
                validators: {
                        stringLength: {
                        min: 4,
                    },
                        notEmpty: {
                        message: 'Por favor ingrese un usuario valido'
                    }
                }
            },
            txt_contraseña: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Por favor ingrese una contraseña valida'
                    }
                }
            }
        }

	})

	$("#btn-entrar").click(function(){
		var parametros = "usuario=" + $("#txt_usuario").val()+"&"+ 
                         "contraseña=" + $("#txt_contraseña").val();

		$.ajax({
			url: "ajax/eventos.php?accion=1",
			method: "POST",
			data: parametros,
			success:function(resultado){
				if (resultado == "1") {
                    location.href="form/form_administrador1.php";
                } 
                else if (resultado == "2"){
                    location.href="form/form_administrador1.php";
                }
                else if (resultado == "3"){
                    location.href="form/form_administrador1.php";
                }
                else if (resultado == "0"){
                    $("#div-mensaje").show();
                    
                }
                else{
                    $("#res").html(resultado);
                    
                }
			}
		});//ajax

	});//btn-guardar

    
      

});//documnent