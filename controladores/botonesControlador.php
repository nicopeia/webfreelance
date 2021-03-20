<?php

require_once "./modelos/botonesModelo.php"; 


class botonesControlador{

public function ctrbotonControlador(){


$tabla = "botones";

$respuesta = botonesModelo::mdlbotonesModelo($tabla);

return $respuesta;


}



}