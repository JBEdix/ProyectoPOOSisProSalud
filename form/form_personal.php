<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title>Personal Clinica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
<!--
Genius Template
http://www.templatemo.com/tm-402-genius
-->
    <meta name="author" content="templatemo">
    <meta charset="UTF-8">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    
    <!-- CSS Bootstrap & Custom -->
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
                                <h2 class="page-title" align="left">Personal</h2>
                            </div> <!-- /.page-header -->
                            <div  class="content-inner" align="center">
                                <div class="row">
                                    <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6" align="center">
                                            <label for="txt_nombre">Nombre:</label>
                                            <input id="txt_nombre" type="text" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txt_apellido">Apellido:</label>
                                            <input id="txt_apellido" type="text" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="date_fecha_nac">Fecha Nacimiento:</label>
                                            <div><input type="date" id="date_fecha_nac"></div>
                                        </div>
                                    </div>
                                    <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6" >
                                            <label for="slc-sexo">Sexo:</label>
                                            <select id="slc-sexo[]" class="">
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenico">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txt_num_identidad">Numero de Identidad:</label>
                                            <input type="text" id="txt_num_identidad" maxlength="15" placeholder="ejem: 0801-1990-12345">
                                        </div>                                        
                                    </div>
                                    <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="subject-id">Pais:</label>
                                            <input id="" ="txt_pais" type="text" maxlength="60">
                                        </div>
                                    </div>
                                    <div class="row contact-form">
                                    <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txt_pais">Departamento:</label>
                                            <input id="txt_pais" type="text" maxlength="60">
                                        </div>
                                    </div>
                                    <div class="row contact-form">
                                    <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6">
                                            <p class="full-row">
                                                <label for="txt_direccion">Direccion:</label>
                                                <textarea name="txt_direccion" id="txt_direccion" rows="6"></textarea>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txt_celular">Celular:</label>
                                            <input id="txt_celular" type="text" maxlength="60">
                                        </div>
                                    </div>
                                    <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txt_email">E-Mail:</label>
                                            <input id="txt_email" type="text" maxlength="60">
                                        </div>
                                    </div>
                                    <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="date_fecha_ing">Fecha Ingreso:</label>
                                            <div><input type="date" id="date_fecha_ing"></div>
                                        </div>
                                    </div>
                                    <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txt_horario_laboral">Horario Laboral:</label>
                                            <input id="txt_horario_laboral" type="text" maxlength="60">
                                        </div>
                                    </div>
                                    <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="txt_salario">Salario:</label>
                                            <input id="txt_salario" type="text" maxlength="60">
                                        </div>
                                    </div>
                                     <div class="row contact-form">
                                        <div class="col-md-3" >
                                        </div>
                                        <div class="col-md-6">
                                            <button class="mainBtn" >
                                                Guardar
                                            </button>
                                        </div>
                                    </div>

                                </div> <!-- /.row -->
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

    <script>
        function initialize() {
          var mapOptions = {
            zoom: 15,
            center: new google.maps.LatLng(16.832179,96.134976)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

    </script>
<!-- templatemo 402 genius -->
</body>
</html>