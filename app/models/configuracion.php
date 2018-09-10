<?php 
	require_once("conexion.php");

	class Configuracion extends Conexion
	{
		public function readPeriodo(){
			$this->Open(1);
			$this->memoria=$this->con1->prepare("SELECT * FROM periodo_horarios");
			$this->memoria->execute(); 
			$datos=$this->memoria->fetchAll(PDO::FETCH_OBJ);
			return $datos;
		}

		// ----------------------ejemplo------------
		// public function readPeriodo($periodo){

		// 	$this->Open(1);
		// 	$this->memoria=$this->con1->prepare("SELECT * FROM periodo_horarios WHERE perAcademico=?");
		// 	$this->memoria->bindParam(1, $periodo, PDO::PARAM_STR);
		// 	$this->memoria->execute(); 
		// 	$datos=$this->memoria->fetchAll(PDO::FETCH_OBJ);
		// 	return $datos;
		// }
	}
 ?>