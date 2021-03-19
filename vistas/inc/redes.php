<?php
require_once "./modelos/conexion.php";
?>
<section class="bg-light py-4 text-center">
    <div class="container">
    <div class="row ">

      <?php
$rutaImg  = new RutaImg();
$rutaImagenes = $rutaImg->ctrRutaImg();

$Img  = new ControladorRedes();
$imgRedes = $Img->ctrRedes();

foreach($imgRedes as $value){

    $estiloRedes = json_decode($value["estilo"],true);


echo '

<div class="col-md-6 py-4">

       <a href="'.$value["referencia"].'" target="blank"> <img  style="width:'.$estiloRedes["width"].';height:'.$estiloRedes["height"].';position:'.$estiloRedes["position"].';animation:'.$estiloRedes["animation"].';transition:'.$estiloRedes["transition"].';  " src="'.$rutaImagenes.''.$value["img"].'" alt="foto"></a>
      </div>
  
       ';
       
    }
       ?> 

      </div>
      </div>
    </section>


