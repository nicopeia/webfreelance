<?php  
require_once "./modelos/datosContactoModelo.php"; 

class seccionesinfoControlador{

public function seccioninfoControlador(){

$tabla='seccionesinfo';

$respuesta = seccionesinfoModelo::seccioninfoModelo($tabla);

return $respuesta;

}


}