<?php
require_once 'conexion.php';



class RedesModelo {

static public function mdlRedes($tabla){


 
    $conexion= new Conexion();
    $stmt =$conexion->conectar()->prepare("SELECT * FROM $tabla" );



    $stmt -> execute();

    return $stmt -> fetchAll();

    $stmt-> close();





}


}