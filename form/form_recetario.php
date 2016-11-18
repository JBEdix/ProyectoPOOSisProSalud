<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>Recetario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <meta name="author" content="templatemo">
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- CSS Bootstrap & Custom -->
    <link rel='stylesheet prefetch' href='../css/bootstrap-theme.min.css'>
    <link rel='stylesheet prefetch' href='../css/bootstrapValidator.min.css'>

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/templatemo_style.css" rel="stylesheet" media="screen">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/modernizr.js"></script>

    
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>

    <![endif]-->
</head>
<body>
    
    
    <div class="bg-image"></div>
    <div class="overlay-bg"></div>

    
    

    <!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="responsive_menu">
            <ul class="main_menu">
                <li><a class="show-1 homebutton" href="../index.php"><i class="fa fa-home"></i>Homepage</a></li>
                <li><a class="" href="form_administrador1.php"><i class="fa fa-group"></i>About Us</a></li>
                <li><a class="" href="#"><i class="fa fa-briefcase"></i>Our Gallery</a></li>
                <li><a class="" href="#"><i class="fa fa-cogs"></i>Services</a></li>
                <li><a class="" href="#"><i class="fa fa-globe"></i>Contact Us</a></li>
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

    <div class="main-content">
        <div class="container">
            <div class="row">

                <!-- Static Menu -->
                <div class="col-md-2 visible-md visible-lg">
                    <div class="main_menu">
                        <ul class="menu">
                            <li><a  href="../index.php" data-toggle="tooltip" data-original-title="Inicio"><i class="fa fa-home"></i></a></li>
                            <li><a  href="form_administrador1.php" data-toggle="tooltip" data-original-title="Adminsitrador"><i class="fa fa-user"></i></a></li>
                            <li><a  href="#" data-toggle="tooltip" data-original-title="Reportes"><i class="fa fa-briefcase"></i></a></li>
                            <li><a  href="#" data-toggle="tooltip" data-original-title="Personal de la Clinica"><i class="fa fa-cog"></i></a></li>
                            <li><a  href="#" data-toggle="tooltip" data-original-title="otra cosa"><i class="fa fa-globe"></i></a></li>
                        </ul>
                    </div> <!-- /.main-menu -->
                </div> <!-- /.col-md-2 -->

                <!-- Begin Content -->
                <div class="col-md-10">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="templatemo_logo">
                                <h1> SisProSalud</h1>
                            </div> <!-- /.logo -->
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->


                    <div id="menu-container">
                        
                        
                        <div id="menu-1" class="homepage">
                            <div class="page-header">
                                <h2 class="page-title" align="left">Recetario</h2>
                            </div> <!-- /.page-header -->
                            <div  class="content-inner" align="center">

                                <div class="row">
                                    <div class="col-md-3" >
                                        <label for="slc_consulta">Elegir Consulta:</label>
                                    </div>
                                    <div class="col-md-4 full-row" align="left">
                                        <select id="slc_consulta" ></select>
                                    </div>                                    
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3" >
                                        <label for="txt_nombre_paciente">Nombre del Paciente:</label>
                                    </div>
                                    <div class="col-md-4 full-row" align="left">
                                        <input type="text" id="txt_nombre_paciente" disabled="true" maxlength="100" >
                                    </div>                                  
                                </div>
                                <div class="row">
                                    <div class="col-md-3" >
                                        <label for="txt_turno_consulta">Turno Consulta:</label>
                                    </div>
                                    <div class="col-md-4 full-row" align="left">
                                        <input type="text" id="txt_turno_consulta" disabled="true" maxlength="1000" disabled="true">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3" >
                                        <label for="txt_temperatura">Temperatura:</label>
                                    </div>
                                    <div class="col-md-4 full-row" align="left">
                                        <input type="text" id="txt_temperatura" disabled="true" maxlength="1000" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3" >
                                        <label for="txt_presion_arterial">Presion Arterial:</label>
                                    </div>
                                    <div class="col-md-4 full-row" align="left">
                                        <input type="text" id="txt_presion_arterial" disabled="true" maxlength="1000" >
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-md-3" >
                                        <label for="txt_diagnostico">Diagnostico Final:</label>
                                    </div>
                                    <div class="col-md-4 full-row" align="left">
                                        <p class="full-row">                                            
                                            <textarea id="txt_diagnostico" rows="6"></textarea>
                                        </p>
                                    </div>
                                </div>
                                
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="sintoma">Sintomas:</label>
                                    </div>
                                    <div id="div-sintoma" class="col-md-4" align="left"></div>
                                    <div class="col-md-4" align="left">
                                        <button class="add mainBtn2" id="add-sintoma">Agregar Sintoma</button>
                                        <a href="">
                                            <button class="add mainBtn3" id="crear-sintoma">Crear Sintoma</button>
                                        </a>
                                    </div>                                    
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="receta">Recetas:</label>
                                    </div>
                                    <div id="div-receta" class="col-md-4" align="left"></div>
                                    <div class="col-md-4" align="left">
                                        <button class="add mainBtn2" id="add-receta">Agregar Receta</button>
                                        <a href="form_receta.php">
                                            <button class="add mainBtn3" id="crear-receta">Crear Receta</button>
                                        </a>
                                    </div>                                    
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-md-3" >
                                        
                                    </div>
                                    <div id="div_res" class="col-md-4">
                                        
                                    </div>
                                </div>
                                

                                <div class="row">
                                    <div class="col-md-3" >
                                        
                                    </div>
                                    <div class="col-md-3">
                                        <button id="btn_crear_recetario" class="mainBtn">Crear Recetario</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button id="btn_nuevo_recetario" class="mainBtn">Nuevo Recetario</button>
                                    </div>
                                </div>


                                
                            </div> <!-- /.our-team -->
                        </div> <!-- /.content-inner -->
                    </div> <!-- /.about-us -->
                </div> <!-- /.content-holder -->
            </div> <!-- /.col-md-10 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
<!-- /.main-content -->

    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/templatemo_custom.js"></script>

    <script src="../js/js_form/js_form_recetario.js"></script>
    <script src='../js/bootstrapvalidator.min.js'></script>

    
</body>
</html>