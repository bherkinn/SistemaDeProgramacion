<?php 
	if(isset($_GET["url_sistema_horarios"]))
	{
		$view=$_GET["url_sistema_horarios"];
		switch ($view) {
			case 'Principal':
				# code...
				break;

			case 'Configuracion':
				require_once("app/controllers/configuracion_controller.php");
				break;

			case 'Aulas_Manual':
				require_once("app/controllers/manual/aulas_manual_controller.php");
				break;

			case 'Docentes_Manual':
				require_once("app/controllers/manual/docentes_manual_controller.php");
				break;

			case 'Cursos_Manual':
				require_once("app/controllers/manual/cursos_manual_controller.php");
				break;

			case 'Modulo_Manual':
				require_once("app/controllers/manual/modulo_manual_controller.php");
				break;

			default:
				require_once("app/controllers/principal_controller.php");
				break;
		}
	}
	else{
		require_once("app/controllers/principal_controller.php");
	}
 ?>