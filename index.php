<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>SisProSalud Clinica LA ESPERANZA</title>
        <script src="js/modernizr.js" type="text/javascript"></script>
        
        <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='css/bootstrap-theme.min.css'>
        <link rel='stylesheet prefetch' href='css/bootstrapValidator.min.css'>
        <link rel="stylesheet" href="css/estilo.css">
    </head>

    <body id="body-login" >
        <div class="container well form-horizontal" name="div-login" id="div-login">        
            <fieldset>
                <legend>Iniciar Sesion</legend>
                <div class="form-group">
                    <label class="col-md-4 control-label">Correo</label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="txt_usuario" id="txt_usuario" placeholder="Usuario" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Contraseña</label> 
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-question-sign"></i></span>
                            <input name="txt_contraseña" id="txt_contraseña" placeholder="Contraseña" class="form-control"  type="password">
                        </div>
                    </div>
                </div>
                <div id="div-mensaje" class="alert alert-warning text-center">
                    Por favor ingrese el usuario y la contraseña. <br>
                    No deben quedar campos en blanco.
                    
                </div>
                <div id="res"></div>

                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button id="btn-entrar" class="btn btn-primary" >Entrar <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>
            </fieldset>
            
        </div>

    <script src='js/jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/bootstrapvalidator.min.js'></script>
    <script src="js/controlador.js"></script>

    </body>
</html>