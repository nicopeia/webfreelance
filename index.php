<?php


require_once "./config/app.php";
require_once "./modelos/conexion.php";
require_once "./controladores/vistasControlador.php";
require_once "./controladores/formularioControlador.php";
require_once "./controladores/serviciosControlador.php";
require_once "./controladores/headerControlador.php";
require_once "./controladores/redesControlador.php";
require_once "./controladores/datosContactoControlador.php";
require_once "./controladores/seccionesinfoControlador.php";
require_once "./controladores/botonesControlador.php";



require_once "./modelos/formularioModelo.php";
require_once "./modelos/serviciosModelo.php";
require_once "./modelos/rutas.php";
require_once "./modelos/headerModelo.php";
require_once "./modelos/redesModelo.php";
require_once "./modelos/datosContactoModelo.php";
require_once "./modelos/seccionesinfoModelo.php";
require_once "./modelos/botonesModelo.php";



$conn = new Conexion();
$conectar = $conn->conectar();


if($conn == true){
    $plantilla = new vistasControlador();
    $plantilla->obtener_plantilla_controlador();
}else{
    echo ' no conectado';

}


?>