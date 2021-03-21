<?php



class botonesModelo{


static public function mdlbotonesModelo($tabla){


    $conexion =  new Conexion();
    $stmt =$conexion->conectar()->prepare("SELECT * FROM $tabla" );



    $stmt -> execute();

    return $stmt -> fetchAll();

    $stmt-> close();




}


}