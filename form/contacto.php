<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>SisProSalud Clinica LA ESPERANZA</title>
        <script src="js/modernizr.js" type="text/javascript"></script>
        
        <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='css/bootstrap-theme.min.css'>
        <link rel='stylesheet prefetch' href='css/bootstrapValidator.min.css'>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

    <div class="container">

        <form class="well form-horizontal" action=" " method="post"  id="contact_form">
            <fieldset>

                <!-- Form Name -->
                <legend>Contact Us Today!</legend>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Nombre</label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label" >Apellido</label> 
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                        </div>
                    </div>
                </div>


                <!-- Text input-->                       
                <div class="form-group">
                    <label class="col-md-4 control-label"># Telefono</label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="phone" placeholder="(504)2222-1212" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->                      
                <div class="form-group">
                    <label class="col-md-4 control-label">Direccion</label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="address" placeholder="Address" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->                 
                <div class="form-group">
                    <label class="col-md-4 control-label">Ciudad</label>  
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="city" placeholder="city" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <!-- Select Basic -->                   
                <div class="form-group"> 
                    <label class="col-md-4 control-label">Departamento</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="state" class="form-control selectpicker" >
                                <option value=" " >Por favor ingrese su departamento</option>
                                <option>Islas de la Bahía</option>
                                <option>Cortés</option>
                                <option>Atlántida</option>
                                <option>Colón</option>
                                <option>Gracias a Dios</option>
                                <option>Copán</option>
                                <option>Santa Bárbara</option>
                                <option>Yoro</option>
                                <option>Olancho</option>
                                <option>Ocotepeque</option>
                                <option>Lempira</option>
                                <option>Intibucá</option>
                                <option>Comayagua</option>
                                <option>Francisco Morazán</option>
                                <option>El Paraíso</option>
                                <option>La Paz</option>
                                <option>Valle</option>
                                <option>Choluteca</option>
                                
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Codigo postal</label>  
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
                            </div>
                        </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Sitio web o dominio</label>  
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                                <input name="website" placeholder="Website or domain name" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- radio checks -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Tienes hosting?</label>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                <input type="radio" name="hosting" value="yes" /> Si
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="hosting" value="no" /> No
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Text area -->                  
                <div class="form-group">
                    <label class="col-md-4 control-label">Descripcion de proyecto</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">éxito 
                    <i class="glyphicon glyphicon-thumbs-up"></i> Gracias por contactar con nosotros, nos pondremos en contacto con usted en breve.
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning" >Enviar <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div><!-- /.container -->

    <script src='js/jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/bootstrapvalidator.min.js'></script>
    <script src="js/index.js"></script>

    </body>
</html>