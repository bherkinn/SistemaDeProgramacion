<?php 
session_start();
if(isset($_SESSION["periodo"]))
	{
		// echo $_SESSION["periodo"];
		require_once("app/views/manual/docentes.php");
	}
	else{
		$_SESSION["periodo"]="2018-2";
		echo "ingrese";
		ob_start();
		header("Location:index.php");
	}

	
?>