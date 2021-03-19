<?php 

require_once "./modelos/redesModelo.php"; 



class ControladorRedes {

public function ctrRedes(){


$tabla = "redessociales";

$respuesta = RedesModelo ::mdlRedes($tabla);

return $respuesta;



}



}