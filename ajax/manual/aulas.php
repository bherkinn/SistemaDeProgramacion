<?php 
	require_once("../../app/models/manual/aulas_manual.php");

	$accion=$_GET["accion"];
	$o=new Aulas_Manual();
	switch ($accion) {
		case 'cboPeriodo':
			echo json_encode($o->cboPeriodos());
			break;

		case 'cboAulas':
			echo json_encode($o->cboAulas());
			break;

		case 'horarioAula':
			$periodo=$_GET["periodo"];
			$idaula=$_GET["idaula"];
			echo json_encode($o->HorarioAula($idaula,$periodo));
			break;

		case 'detaAula':
			$idaula=$_GET["idaula"];
			echo json_encode($o->detaAula($idaula));
			break;
		// detaAula
		default:
			
			break;
	}
?>