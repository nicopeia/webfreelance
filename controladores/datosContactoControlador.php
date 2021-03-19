<?php

require_once "./modelos/datosContactoModelo.php"; 

class ctrContactoControlador{

    public function ContactoControlador(){

         $tabla = 'datosContacto';

         $respuesta= mdlContactoModelo::ContactoModelo($tabla);

         return $respuesta;




    }



}