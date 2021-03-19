<?php
require_once "./modelos/serviciosModelo.php";

class serviciosControlador {

//////MOSTRAS CATEGORIAS////////

static public function ctrMostrarServicios(){

    $tabla = "servicios";

    $datos = 

    $respuesta = serviciosModelo::mdlMostrarServicios($tabla);

    return $respuesta;

}

}