var activo=0;
$("#btnmenu").click(function(){
	if(activo==0)
	{
		$("#menu").removeClass("ocultar");
		$("#menu").addClass("mostrar");

		$("#contenedor").removeClass("ampliar");
		$("#contenedor").addClass("reducir");
		activo=1;
	}else{
		$("#menu").removeClass("mostrar");
		$("#menu").addClass("ocultar");

		$("#contenedor").removeClass("reducir");
		$("#contenedor").addClass("ampliar");
		activo=0;
	}
	
});

$("#link1").click(function(e){
	e.preventDefault();
});
$("#link2").click(function(e){
	e.preventDefault();
});

$(document).ready(function(){
	$('.nav li:has(ul)').click(function(){

		if($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		}
		else
		{
			$('.nav li ul').slideUp();
			$('.nav li').removeClass('activado');	
			$(this).addClass('activado');

			$(this).children('ul').slideDown();
		}
	});
});