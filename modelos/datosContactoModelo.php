<?php


class mdlContactoModelo{

static public function ContactoModelo($tabla){

    $conexion= new Conexion();
    $stmt =$conexion->conectar()->prepare("SELECT * FROM $tabla" );



    $stmt -> execute();

    return $stmt -> fetchAll();

    $stmt-> close();


}


}

