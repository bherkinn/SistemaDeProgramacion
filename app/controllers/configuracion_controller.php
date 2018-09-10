<?php 
	require_once("./app/models/configuracion.php");
	$o=new Configuracion();
	$tabla=$o->readPeriodo();
	session_start();

	if(isset($_SESSION["periodo"]))
		{
			require_once("./app/views/configuracion.php");
		}
		else{

			foreach($tabla as $a){
				$_SESSION["periodo"]=$a->perAcademico;
			}
			ob_start();
			header("Location:index.php");
		}

?>