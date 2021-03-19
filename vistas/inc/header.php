<?php
require_once './modelos/conexion.php';
?>   
      <!-- Header -->
          
     
            
            <?php
$rutaImg  = new RutaImg();
$rutaImagenes = $rutaImg->ctrRutaImg();

$header = new ControladorHeader();
$headerDatos = $header->ctrHeader();

foreach($headerDatos as $value){
  
$jsonFondo = json_decode($value["imgFondo"],true);

echo '
<header style="background:'.$jsonFondo["background"].';background-size:'.$jsonFondo["background-size"].';color:'.$jsonFondo["color"].';position:'.$jsonFondo["position"].';height:'.$jsonFondo["height"].'" class="text-center"  name="home" id="home">

<div class="intro-text">
                        <img id="mundo" class=" mundo " src="'.$rutaImagenes.''.$value["imgAnim"].'" alt="foto" >
                      
                <h1 id="humo">'.$value["titulo"].' <span class="color">'.$value["tituloSpan"].'</span></h1>

                <p class="animate__animated animate__fadeInLeft mb-3">'.$value["subtitulo"].'</p>
                
                ' .$value["boton"].' 
                </div>
                ';
              }
                ?> 
            </header>
             
               
            
  