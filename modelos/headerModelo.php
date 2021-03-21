<?php




class HeaderModelo {

static public function mdlHeader($tabla){


 
    $conexion= new Conexion();
    $stmt =$conexion->conectar()->prepare("SELECT * FROM $tabla" );



    $stmt -> execute();

    return $stmt -> fetchAll();

    $stmt-> close();





}


}