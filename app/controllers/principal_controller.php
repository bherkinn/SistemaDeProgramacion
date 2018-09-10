<?php 
	session_start();
	if(isset($_SESSION["periodo"]))
	{	
		// echo $_SESSION["periodo"];}

	}
	else
	{
		$_SESSION["periodo"]="2018-2";
		echo "ingrese";
		ob_start();
	}
	require_once("app/views/principal.php");

 ?>