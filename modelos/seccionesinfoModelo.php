<?php
 


class seccionesinfoModelo{

static public function seccioninfoModelo($tabla){

$conexion = new Conexion();
$stmt =  $conexion->conectar()->prepare("SELECT * FROM $tabla");


$stmt->execute();

return $stmt -> fetchAll();

$stmt-> close();
}



}