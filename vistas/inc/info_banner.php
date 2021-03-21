
<?php
require_once './modelos/conexion.php';




?>   
        
    
          <section>
           
            <div class="container mt-5">
              
            <div class="row">
            <div class="col-md-6 ">
            
<?php
$rutaImg  = new RutaImg();
$rutaImagenes = $rutaImg->ctrRutaImg();
$seccion = new seccionesinfoControlador();
$secciones = $seccion->seccioninfoControlador();
?> 
<?php
foreach($secciones as $value){




echo '


        
              <img  src="'.$rutaImagenes.''.$value["imgderecha"].'" class="img-fluid imgpc " alt="">
               
    
            </div>
            
          
          
            <div class="col-md-6 py-5 mt-5">
            
           
              <h2 class="text-muted">'.$value["tituloderecha"].'</h2>
              <hr>
              <p>
              '.$value["parrafoderecha"].'
            </p>
              

     <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
    '.$value["botonderecha"].'
      </button> 
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">WEB SERVICIOS DEMO</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <video class="img-fluid" width="450px" height="300px" controls src="vistas/img/video1.mp4"></video>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>
             
            
               </div>
             </div>
            
            </div>
          
          </section>
          <div class="container text-center ">
      
            <span class="star agrandar">
           <i class="'.$value["icono_1"].'"></i><i class="'.$value["icono_1"].'"></i><i class="'.$value["icono_1"].'"></i><i class="'.$value["icono_1"].'"></i></span>
          </div>
       
        
       
    
        ';
      }
        ?>
    
    
  
    <?php  
          $seccion = new seccionesinfoControlador();
          $secciones = $seccion->seccioninfoControlador();

          foreach($secciones as $value){

            $jsonBanner = json_decode($value["banner"],true);
          
          
          
          echo '  




       <!--imagen separador -->	
    
    
       
      <div style="background:'.$jsonBanner["background"].';background-size:'.$jsonBanner["background-size"].';height:'.$jsonBanner["height"].'">
    
      <div class="text-center"> 
      <div class="py-5 mt-4 text-center" style="position:relative">
      <div class="text-center">
      <label class="text-white" for="" style="font-size:40px">SUSCRIBITE A NUESTRAS PROMOS</label> <hr>                       </div>
      <br><input type="text" class="mt-5" style="width:500px;height:36px" placeholder="ingrese su correo.....">
      <button type="button" class="btn btn-primary mb-2">Enviar</button>
      </div>
      </div>
      
  </div>
         
    </div>  
        
            
    ';
    
     }
                      
    ?>


 

         
      <?php    
            
      $seccion = new seccionesinfoControlador();
$secciones = $seccion->seccioninfoControlador();
$rutaImg  = new RutaImg();
$rutaImagenes = $rutaImg->ctrRutaImg();
?>

<?php
foreach($secciones as $value){

  $jsonBanner = json_decode($value["banner"],true);



echo '       
         
            
         
        
          <section>
            
            <div class="container mt-5">
           
            <div class="row">
            <div class="col-md-6 py-5 mt-5 ">
            
                <h2 class="text-muted">'.$value["tituloizuierda"].' </h2>
                <hr>
                <p>
                '.$value["parrafoizquierda"].'
              </p>
             
               
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
    '.$value["botonizquierda"].'
      </button> 
      
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">TIENDA ONLINE DEMO </h5>
              <button  type="button" class="close " data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <video class="img-fluid" width="450px" height="300px" controls src="vistas/img/video.mp4"></video>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>
                
             
             
             
            
            </div>
            
          
          
            <div class="col-md-6 mb-2">





            
                 <div class="ml-5">
                <img  src="'.$rutaImagenes.''.$value["imgizquierda"].'" class="img-fluid " alt="">
                

              
              </div>
             
            
               </div>
              
             </div>
    
            </div>
          
          </section>
     <div class="container text-center ">
      
      <span class="star agrandar">
     <i class="'.$value["icono_2"].'"></i><i class="'.$value["icono_2"].'"></i><i class="'.$value["icono_2"].'"></i><i class="'.$value["icono_2"].'"></i></span>
 
     </div>
   
    
          <!-- FIN SECCION INFO  -->
     
    


    ';
  }    
  ?>

   
  
         
      
       
    
 