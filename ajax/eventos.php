<?php
	$tipoUsuario = "";



	if (($_POST["txt-usuario"]== "") || ($_POST["txt-contraseña"]=="")) {
		$tipoUsuario = 0;
	}
	else{
		$tipoUsuario = mt_rand(1,3);		
	}

	


	switch ($tipoUsuario) {
		case 1: //Usuario Administrador
			echo "1";
			break;
		case 2: //Usuario doctor
			echo "2";
			break;
		case 3: //Usuario recepcionista
			echo "3";
			break;	
		case 0: //Usuario recepcionista
			echo "0";//espacio en blanco
			break;	
		default:
			echo "error en tipo de usuario";
			break;
	}
	
?>