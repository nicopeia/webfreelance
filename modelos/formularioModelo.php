<?php
require_once 'conexion.php';




class ModeloFormulario{

/*-------- Modelo para obtener las vistas*/
 
static public function mdlFormulario($tabla,$datos){

    $conexion= new Conexion();
   
    $consulta = $conexion->conectar()->prepare("INSERT INTO $tabla(nombre, email, mensaje)VALUES(:nombre, :email, :mensaje)");

    $consulta->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
    $consulta->bindParam(':email', $datos['email'], PDO::PARAM_STR);
    $consulta->bindParam(':mensaje', $datos['mensaje'], PDO::PARAM_STR);
    

   
	$consulta->execute();

	

  



 }


 }



?>