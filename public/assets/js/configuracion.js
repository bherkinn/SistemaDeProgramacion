var Configuracion = function(){

	this.cambiarPeriodo=function(periodo){
		$.ajax({
			method: "POST",
			url: "ajax/Configuracion.php",
			data:{periodo:periodo},
			success:function(data){
				alert("listo");
			}
		});
	}

}

var cl= new Configuracion();
$("#cboPeriodo").change(function(){
	$("#cboPeriodo option:selected").each(function(){
		cl.cambiarPeriodo($("#cboPeriodo").val());
	});
});