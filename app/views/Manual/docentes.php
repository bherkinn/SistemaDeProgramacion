<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>M-Docentes</title>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php 
		require_once("app/views/links.html");
	 ?>
	 <link rel="stylesheet" type="text/css" href="public/assets/css/manual/docentes.css">
	 <link rel="stylesheet" type="text/css" href="public/assets/css/comun-tablas.css">
	<!-- **************************************CSS************************************* -->
	<!-- <link rel="stylesheet" type="text/css" href="views/Librerias/bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="views/Librerias/css/comun-tablas.css">
	<link rel="stylesheet" type="text/css" href="views/Librerias/css/menu.css">
    <link rel="stylesheet" type="text/css" href="views/Librerias/css/fuente.css">
	<link rel="stylesheet" type="text/css" href="views/Librerias/css/docentes.css">
	<link rel="stylesheet" type="text/css" href="views/Librerias/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="views/Librerias/select2/css/select2.min.css">
	-->

</head>

<body>
		<?php 
         require_once("app/views/menu.html");
      ?>

		<div id="contenedor" class="contenedor ampliar">	
		<header>
	 		<button id="btnmenu" class="fas fa-bars btnmenu"></button>
	 		<div class="titulo">DOCENTES - MANUAL</div>
	 		<div></div>
	 	</header>
		<div class="contenedor-botones-manual">
		<select id="select-docentes">
					
		</select>
		<select id="cboperiodo" class="cboperiodo " style="font-size: 12px;">
		</select>
		<button id="btn-actualizar-tabla" class="fas fa-redo-alt btn-info btn-actualizar-tabla"></button>

		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="container-fluid">
				<center>
					<div id="tabla" class="table-responsive">

					</div>
				</center>
		</div>
		</div>
		<br>
          <div id="tabla" class="container">

		</div>
		<br>
		</div>
    </style>
	
	<script type="text/javascript">

		$.get("ajax/manual/docentes.php",{accion:"cboPeriodo"},
            function(data){
                cboperiodo=JSON.parse(data);
                cantidadcbp=Object.keys(cboperiodo).length;
                for(i=0;i<cantidadcbp;i++)
                {
                    $("#cboperiodo").append("<option value="+cboperiodo[i]["perAcademico"]+">"+cboperiodo[i]["perAcademico"]+"</option>");
                }

                $.get("ajax/manual/docentes.php",{accion:"cboDocentes"},
	            function(data){
            	cbodocente=JSON.parse(data);
            	cantidaddocente=Object.keys(cbodocente).length;
            	for(u=0;u<cantidaddocente;u++)
            	{
            		$("#select-docentes").append("<option value="+cbodocente[u]["codDocente"]+">"+cbodocente[u]["apePaterno"]+" "+cbodocente[u]["apeMaterno"]+", "+cbodocente[u]["nombres"]+"</option>");

            	}
                mostrarDocentes();
				});
            });

		function mostrarDocentes(){
			iddocente=$("#select-docentes").val();
        	periodo=$("#cboperiodo").val();
			$.get("ajax/manual/docentes.php",{accion:"horarioDocente",iddocente:iddocente,periodo:periodo},
				function(data){
				var hdocentes=JSON.parse(data);
				
					llenarTablaDocente(hdocentes);
				
			});
		}

		$(document).ready(function(){
			$("#select-docentes").change(function(){
				$("#select-docentes option:selected").each(function(){
					mostrarDocentes();
				});
			});
			$("#btn-actualizar-tabla").click(function(){
					mostrarDocentes();
			});
		});

		$(document).ready(function(){
			$("#cboperiodo").change(function(){
				$("#cboperiodo option:selected").each(function(){
					mostrarDocentes();
				});
			});
		});
		// -------------------------------------------------------------

		$(document).ready(function(){
				$("#select-docentes").select2({
					 width: '240px',
				});
			});
	</script>
	<script type="text/javascript" src="public/assets/js/menu.js"></script>
	<script type="text/javascript" src="public/assets/js/manual/docentes.js"></script>

	

</body>

</html>
