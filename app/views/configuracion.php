<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>Configuracion</title>
	<link rel="stylesheet" type="text/css" href="public/assets/css/configuracion.css">
	<?php 
		require_once("app/views/links.html");
	 ?>
</head>
<body>
	<?php 
		require_once("app/views/menu.html");
	 ?>
	 <div id="contenedor" class="contenedor ampliar" style="height: 500px;">
	 	<header>
	 		<button id="btnmenu" class="fas fa-bars btnmenu"></button>
	 		<div class="titulo">SISTEMA HORARIOS</div>
	 	</header>
	 	<div class="border rounded" style="margin: 15px;display: flex;" >
	 		<div class="periodo">
	 			<div class="">Periodo Actual:</div>
	 			<div class="">
	 				<select class="form-control" id="cboPeriodo">
	 					<?php 
	 					foreach($tabla as $u)
	 					{
 						?>
	 						<option <?php if($u->perAcademico==$_SESSION["periodo"])
	 										{echo "selected";}
	 								?>	>
	 								<?php echo $u->perAcademico; ?>		
	 						</option>
 						<?php 
	 					}
	 					?>
	 				</select>
	 			</div>
	 		</div>
	 	</div>
	 </div>
	 <script type="text/javascript" src="public/assets/js/menu.js"></script>
	 <script type="text/javascript" src="public/assets/js/configuracion.js"></script>
	 <!-- <script type="text/javascript" src="public/assets/js/principal.js"></script> -->
</body>
</html>