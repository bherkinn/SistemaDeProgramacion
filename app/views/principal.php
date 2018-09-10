<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>Principal</title>
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
	 	<div id="tabla-acomodar" class="container" style="padding-top: 20px;">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border rounded" >
              <div id="correspondencia" class="padre-correspondencia">
                  <div id="m3" class="hijo-correspondencia"></div>
                  <div id="m4" class="hijo-correspondencia"></div>
                  <div id="m5" class="hijo-correspondencia"></div>
                  <div id="m6" class="hijo-correspondencia"></div>
                  <div id="text-correspondencia" class="hijo-text-correspondencia"></div>
              </div>
               <div class="container-fluid">
               	<div class="cinta-opciones row">
   		            <div class="col-12 col-sm-12 col-md-8 ">
   		            	<select id="select-cursos">
	   		            	<!-- <option>MB516</option> -->
	   		            </select>
   		            </div>

   		            <div class="col-12 col-md-4 contenedor-botones">
   		            	<button id="btnbtn-actualizar-tabla" class="fas fa-redo-alt btn-info btn-actualizar-tabla"></button>
		                  <button id="btn-cambiartotal-curso" class="btn-success btn-cambiar-curso"">Cambiar</button>

		                  <button id="btn-borrar-curso" class="btn-danger btn-borrar-curso">Borrar</button>
			            <select id="cboperiodo" class="cboperiodo"></select>
   		            </div>
   		            	
		        </div>
                <div id="tabla-carga" class="">
                 <!-- AQUI SE CARGARA LA TABLA DE DATOS -->
                </div>  
               </div>
               <br>
            </div>
            <br>	
         </div>
	 </div>
	 <script type="text/javascript" src="public/assets/js/menu.js"></script>
	 <script type="text/javascript" src="public/assets/js/principal.js"></script>
</body>
</html>