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
		var parametros = "txt-usuario=" + $("#txt_usuario").val()+"&"+ 
                         "txt-contraseña=" + $("#txt_contraseña").val();

		$.ajax({
			url: "ajax/eventos.php",
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
                    alert(resultado);
                    
                }
			}
		});//ajax

	});//btn-guardar

    //---------------------------------------------------------------------
    //********************** funcion insertar imagen del contratado en el form_personal
    //---------------------------------------------------------------------

    function archivo(evt) {
      var files = evt.target.files; // FileList object
       
        //Obtenemos la imagen del campo "file". 
      for (var i = 0, f; f = files[i]; i++) {         
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
       
           var reader = new FileReader();
           
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                      document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
               };
           })(f);
 
           reader.readAsDataURL(f);
       }
    }
             
      document.getElementById('files').addEventListener('change', archivo, false);
      

});//documnent