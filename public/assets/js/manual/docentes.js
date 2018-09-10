$(document).ready(function(){

	CrearTabla(16,7,7);
});

function CrearTabla(filas,columnas,hora){

	var dias = new  Array('LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADOS','DOMINGOS');
	var cantidad="";
	var tabla=document.createElement("table");
	tabla.setAttribute("id","tabla-docentes");
	tabla.setAttribute("class","border rounded");
	tabla.setAttribute("border","3");
    var content=document.getElementById("tabla");
    content.appendChild(tabla);
    var titulo="UNIVERSIDAD NACIONAL DE INGENIERIA - FACULTAD DE INGENIERIA MECANICA - COMISION DE HORARIOS";
    var carga="CARGA HORARIA/SEM.";
	
	horainicial=hora;
	$("#tabla-docentes").append("<tr><td colspan='5' class='cabecera-tabla ca'>"+titulo+"</td><td class='ca'>"+carga+"</td><td class='td-periodo' rowspan='2'></td></tr>");
	$("#tabla-docentes").append("<tr><td id='nomdocente' colspan='5' class='cabecera-tabla2'></td><td id='horas' class='hora'></td></tr>");
	for(i=0;i<filas;i++){
		$("#tabla-docentes").append("<tr>");
		for(u=0;u<columnas;u++)
		{
			if(i==0)
			{
				$("#tabla-docentes").append("<th class='horas' id='"+u+"'></th>");
				if(u!=0)
				{
					$("#"+u).html(dias[u-1]);
				}
			}
			else
			{	
				$("#tabla-docentes").append("<td id='d"+(horainicial-1)+""+u+"'></td>");

				if(u!=0)
				{
					$("#d"+(horainicial-1)+""+u).addClass("contenido-tabla");

					
				}
				else
				{
					$("#d"+(horainicial-1)+""+u).addClass("horas");

					inicial=hora.toString().length;
					final=(hora+1).toString().length;
					// console.log(cantidad);

					if(inicial>1&&final>1)
					{
						$("#d"+(horainicial-1)+""+u).html(hora+"-"+(hora+1));
					}
					
					if(inicial==1&&final>1)
					{
						$("#d"+(horainicial-1)+""+u).html("0"+hora+"-"+(hora+1));
					}

					if(inicial==1&&final==1)
					{
						$("#d"+(horainicial-1)+""+u).html("0"+hora+"-"+"0"+(hora+1));
					}
					
					

					hora++;
					
				}
			}
		}

		horainicial++;

		$("#tabla-docentes").append("</tr>");
		$("#0").html("HORAS");
	}

}

var camposDocentes=new Array();
var contador=0;
var canhoras=0;


function llenarTablaDocente(jsondatos){

	if(camposDocentes[0])
	{
		limpiarCajas(camposDocentes);
	}
	var cantidad=Object.keys(jsondatos).length;

	if(cantidad>=1)
	{
		$("#nomdocente").html(jsondatos[0]["apePaterno"]+" "+jsondatos[0]["apeMaterno"]+", "+jsondatos[0]["nombres"]+" / "+jsondatos[0]["codDocente"]+"<br>"+jsondatos[0]["celular"]+" / "+jsondatos[0]["telefono"]);
	console.log(jsondatos);
	console.log(jsondatos[0]['idHorarios']);
		$(".td-periodo").html(jsondatos[0]["perAcademico"]);

	
	var dia;
	
	for(i=0;i<cantidad;i++)
	{
		var hinicio=parseInt(jsondatos[i]['hora'].substr(0,2));
		var hfinal=parseInt(jsondatos[i]['hora'].substr(3,5));
		switch(jsondatos[i]['dia'])
		{
			case "LU":dia=1;
			break;
			case "MA":dia=2;
			break;
			case "MI":dia=3;
			break;
			case "JU":dia=4;
			break;
			case "VI":dia=5;
			break;
			case "SA":dia=6;
			break;
			case "DO":dia=7;
			break;
		}
		while(hinicio<hfinal)
		{	
			
			var celda = $("#d"+hinicio+dia).html();
			if(celda=="")
			{
				$("#d"+hinicio+""+dia).append(jsondatos[i]['codCurso']+jsondatos[i]['secCurso']+"/"+jsondatos[i]['codAula']+"<br>");
				$("#d"+hinicio+""+dia).addClass("pintado-true");
				canhoras++;
			}
			else
			{
				$("#d"+hinicio+""+dia).removeClass("pintado-true");
				$("#d"+hinicio+""+dia).append(jsondatos[i]['codCurso']+jsondatos[i]['secCurso']+"/"+jsondatos[i]['codAula']+"<br>");
				$("#d"+hinicio+""+dia).addClass("pintado-false");
				canhoras++;
			}

			camposDocentes[contador]="#d"+hinicio+""+dia;
			hinicio++;
			contador++;
			$("#horas").html(canhoras);
		}
	}
	contador=0;
	canhoras=0;
	}
}

function limpiarCajas(camposllenos){

	$("#nomdocente").html("");
	$("#horas").html("");
	while(contador<camposllenos.length)
	{
		$(camposllenos[contador]).removeClass("pintado-true");
		$(camposllenos[contador]).html("");
		$(camposllenos[contador]).removeClass("pintado-false");
		contador++;
	}

	contador=0;

}