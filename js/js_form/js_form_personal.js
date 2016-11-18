$(document).ready(function(){
    $(function(){
        $("input[name='file']").on("change", function(){
            var formData = new FormData($("#formulario")[0]);
            var ruta = "../ajax/eventos_form_personal.php?accion=1";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos){
                    $("#respuesta").html(datos);
                }
            });
        });
     });

    llenarDepartamento = function(){
        $.ajax({
            url:"../ajax/eventos_form_personal.php?accion=2",
            success:function(resultado){
                $("#slc_departamento").html(resultado);
            }
        });//ajax
    }
    llenarDepartamento();

    $("select[id=slc_departamento]").change(function(){
        var paramentro = "codigoDepartamento=" + $('select[id=slc_departamento]').val();
        $.ajax({
            url:"../ajax/eventos_form_personal.php?accion=3",
            method: "POST",
            data: paramentro,
            success:function(resultado){
                $("#slc_ciudad").html(resultado);
            }
        });//ajax
    });//slc_ciudad

    llenarSalario = function(){
        $.ajax({
            url:"../ajax/eventos_form_personal.php?accion=4",
            success:function(resultado){
                $("#slc_salario").html(resultado);
            }
        });//ajax
    }
    llenarSalario();

    llenarUsuario = function(){
        $.ajax({
            url:"../ajax/eventos_form_personal.php?accion=5",
            success:function(resultado){
                $("#slc_tipo_usuario").html(resultado);
            }
        });//ajax
    }
    llenarUsuario();
/*slc_tipo_usuario
txt_nombre
txt_apellido
date_fecha_nac
slc_sexo
txt_num_identidad
slc_departamento
slc_ciudad
txt_direccion
txt_celular
txt_email
date_fecha_ing
txt_usuario
txt_contrasena
slc_salario
img_foto*/

    $("#btn_guardar").click(function(){
        var paramentros = "slc_tipo_usuario=" + $("#slc_tipo_usuario").val()+
                          "&txt_nombre=" + $("#txt_nombre").val()+
                          "&txt_apellido=" + $("#txt_apellido").val()+
                          "&date_fecha_nac=" + $("#date_fecha_nac").val()+
                          "&slc_sexo=" + $("#slc_sexo").val()+
                          "&txt_num_identidad=" + $("#txt_num_identidad").val()+
                          "&slc_departamento=" + $("#slc_departamento").val()+
                          "&slc_ciudad=" + $("#slc_ciudad").val()+
                          "&txt_direccion=" + $("#txt_direccion").val()+
                          "&txt_celular=" + $("#txt_celular").val()+
                          "&txt_email=" + $("#txt_email").val()+
                          "&date_fecha_ing=" + $("#date_fecha_ing").val()+
                          "&txt_usuario=" + $("#txt_usuario").val()+
                          "&txt_contrasena=" + $("#txt_contrasena").val()+
                          "&slc_salario=" + $("#slc_salario").val()+
                          "&img_foto=" + $("#img_foto").val();

        $.ajax({
            url:"../ajax/eventos_form_personal.php?accion=6",
            method: "POST",
            data: paramentros,
            success:function(resultado){
                $("#div-res").html(resultado);
                $("#btn_guardar").attr("disabled", true);
            }
        });//ajax
    });// btn guardar

    
    


});


