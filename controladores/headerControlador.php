<?php 

require_once "./modelos/headerModelo.php"; 



class ControladorHeader  {

public function ctrHeader(){


$tabla = "header";

$respuesta = HeaderModelo::mdlHeader($tabla);

return $respuesta;



}



}