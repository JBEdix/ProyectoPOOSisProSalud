$(document).ready(function(){
    var result;
    var result2


    $("#add-receta").click(function() {
        var intId = $("#div-receta div").length + 1;
        var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
        
        
        var fType = $("<select id=\"slc_receta[]\" name=\"slc_receta[]\" class=\"fieldtype selected_all2\">" + llenarReceta() + "</select>");
        var removeButton = $("<button class=\"remove mainBtn3\" id=\"add\">-</button>");

        removeButton.click(function() {
            $(this).parent().remove();
        });
        
        fieldWrapper.append(fType);
        fieldWrapper.append(removeButton);
        $("#div-receta").append(fieldWrapper);
    });

    $("#add-sintoma").click(function() {
        var intId = $("#div-sintoma div").length + 1;
        var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
        
        
        var fType = $("<select id=\"slc_sintoma[]\" name=\"slc_sintoma[]\" class=\"fieldtype selected_all\">" + llenarSintoma() + "</select>");
        var removeButton = $("<button class=\"remove mainBtn3\" id=\"add\">-</button>");

        removeButton.click(function() {
            $(this).parent().remove();
        });
        
        fieldWrapper.append(fType);
        fieldWrapper.append(removeButton);
        $("#div-sintoma").append(fieldWrapper);
    });

    llenarConsulta = function(){
        $.ajax({
            url:"../ajax/eventos_form_recetario.php?accion=1",
            success:function(resultado){
                $("#slc_consulta").html(resultado);
            }
        });//ajax
    }//llanar consulta
    llenarConsulta();

    $("select[id=slc_consulta]").change(function(){
        var paramentro = "slc_consulta=" + $('select[id=slc_consulta]').val();
        $.ajax({
            url:"../ajax/eventos_form_recetario.php?accion=2",
            method: "POST",
            data: paramentro,
            dataType: 'json',
            success:function(resultado){
                var str = resultado.nombre+" "+resultado.apellido;
                $("#txt_nombre_paciente").val(str);
                $("#txt_turno_consulta").val(resultado.turno);
                $("#txt_temperatura").val(resultado.temperatura);
                $("#txt_presion_arterial").val(resultado.presion_arterial);

            }
        });//ajax
    });//slc_ciudad

    llenarSintoma = function(){
        $.ajax({
            url:"../ajax/eventos_form_recetario.php?accion=3",
            success:function(resultado){
                result = resultado;
            }
        });//ajax
        return result;
    }

    llenarReceta = function(){
        $.ajax({
            url:"../ajax/eventos_form_recetario.php?accion=4",
            success:function(resultado){
                result2 = resultado;
            }
        });//ajax
        return result2;
    }

    $("#btn_crear_recetario").click(function(){
        var sintomas=[];//esto va con lo de JSON
        var sintomasSeleccionados="";
        var i = 0;        
        $('.selected_all').each(function(){
            sintomas[i] = $(this).val();
            sintomasSeleccionados+="slc_sintoma[]="+sintomas[i]+"&";
            i++;
        });

        var recetas=[];//esto va con lo de JSON
        var recetasSeleccionados="";
        var i = 0;        
        $('.selected_all2').each(function(){
            recetas[i] = $(this).val();
            recetasSeleccionados+="slc_receta[]="+recetas[i]+"&";
            i++;
        });

        var parametros = "txt_diagnostico=" + $("#txt_diagnostico").val()+
                         "&" + sintomasSeleccionados +
                          recetasSeleccionados +
                         "slc_consulta=" + $("#slc_consulta").val();
        $.ajax({
            url:"../ajax/eventos_form_recetario.php?accion=5",
            method: "POST",
            data: parametros,
            success:function(resultado){
                $("#div_res").html(resultado);
                $("#btn_crear_recetario").attr("disabled", true);
            }
        });//ajax
    });//btn crear recetario

    $("#btn_nuevo_recetario").click(function(){
        $("#slc_consulta").val(' ');
        $("#txt_nombre_paciente").val(' ');
        $("#txt_turno_consulta").val(' ');
        $("#txt_temperatura").val(' ');
        $("#txt_presion_arterial").val(' ');
        $("#txt_diagnostico").val(' ');
        $("#slc_receta").val(' ');
        $("#slc_sintoma").val(' ');
        $("#btn_crear_recetario").attr("disabled", false);
    });//btn nuevo recetario

});//ready
