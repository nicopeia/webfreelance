<?php
require_once 'conexion.php';

/*=============================================
	MOSTRAR  SERVICIOS
	=============================================*/

	class serviciosModelo{
	static public function mdlMostrarServicios($tabla){

		$conexion= new Conexion();
		$stmt =$conexion->conectar()->prepare("SELECT * FROM $tabla" );

	

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt-> close();

		$stmt = null;

	}
}