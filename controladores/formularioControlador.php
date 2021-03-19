<?php 
require_once "./modelos/formularioModelo.php";

class ControladorFormulario{

    public function ctrFormulario(){
        
        if(isset($_POST['submit'])){
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $mensaje = $_POST['mensaje'];
          
          
       
          
          
              if(empty( $nombre ) || empty($email ) || empty($mensaje)){
                  echo ' <div >
                  * Debe completar todos los campos.
                </div> ';
              }
              else{
                  if(!empty($nombre ) && !empty($email ) &&  !empty($mensaje)){ 
                  
                  if(strlen($nombre)> 2 && strlen($nombre)<30 && preg_match('/^[^0-9][a-zA-Z0-9\_\.]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"])){
                   
                    echo'<div >
                    Mensaje enviado con exito. Un representante se pondra en contacto a la brevedad!
                   </div>';  
            if(isset($_POST['submit'])){
          
                $tabla = 'formulario_contacto';
         
                $datos = array("nombre"=>$_POST["nombre"],
                "email"=>  $_POST["email"],
                "mensaje"=> $_POST["mensaje"],);
                         
                        $respuesta =ModeloFormulario::mdlFormulario($tabla,$datos);
                       
                    return $respuesta ;
                   

                    $nombre = $_POST['nombre'];
                    $email = $_POST['email'];
                    $mensaje = $_POST['mensaje'];
                   
                    
                    $header = 'From: ' . $email . " \r\n";
                    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
                    $header .= "Mime-Version: 1.0 \r\n";
                    $header .= "Content-Type: text/plain";
                    
                     $mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
                     $mensaje .= "Su e-mail es: " . $email . " \r\n";
                    
                     $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
                     $mensaje.= "Enviado el: " . date('d/m/Y', time());
                    
                    $para = 'n.peianovich@gmail.com';
                    $asunto = 'Mensaje desde formulario Web';
                    
                    mail($para, $asunto, utf8_decode($mensaje), $header);
                        
               
                            
                         }
                
          
                     
              }else{

                  echo'<div >
                  algunos de los datos ingresados son incorrectos.Verifique y vuelva a intentarlo!
                 </div>'; 
              }
           
              }
          }
          
          
          
             
       
          }
          




    }






            
       
             
          }


    
      
           

 
       
  
   

  

