<?php
require_once "./modelos/conexion.php";
?>
                          

  
      <section id="hire-sec">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8  mt-5 " >

                    <?php
                        $datos = new ctrContactoControlador();
                        $datosContacto=$datos->ContactoControlador();
foreach($datosContacto as $value){   
    echo '


                        <h1 id="ache1">'.$value["tituloContacto"].'</h1>

                        ';
                    }
                        ?>
                        <form id="formulario" action="index.php" method="post">
                        <?php
      $registro = new ControladorFormulario();
      $registro -> ctrFormulario();
 

?>
    
                            <div id="before" class="form-group">
                                <input id="nombre" type="text" name="nombre" class="form-control text-white"  placeholder="Nombre" />
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" name="email" class="form-control text-white"  placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <textarea id="mensaje" name="mensaje"  id="message" class="form-control text-white" style="min-height: 100px;" placeholder="Mensaje"></textarea>
                            </div>
                         
<div class="form-group">

<input id="enviar" type="submit" name="submit" class="" value="ENVIAR">
</div>
  
                        </form>
                        
                    </div>
                    
                  
                    
              
                    <div class=" col-md-4   mt-5  " >
                    <?php
      $datos = new ctrContactoControlador();
      $datosContacto=$datos->ContactoControlador();
 
foreach($datosContacto as $value){   
              echo '
                     
                        <h3><strong>'.$value["subtituloContacto"].'</strong></h3>
                        
    
                            <p><i class="'.$value["iconoCalle"].'" style="color: red;"></i> '.$value["calle"].'  </p>
                            <p><i class="'.$value["IconoCorreo"].'" style="color: red;"></i> '.$value["correo"].'   </p>
                            <p><i class="'.$value["iconoTel"].'" style="color: red;"></i> '.$value["telefono"].' </p>
                            <br/>
                            <h2>'.$value["tituloRedes"].'</h2>
                               <div class="social">
                                  <a href="'.$value["refFacebook"].'"><i class="'.$value["iconoFacebook"].'"></i></a>
                               
                                  <a href="'.$value["refInstagram"].'"><i class="'.$value["iconoInstagram"].'"></i></a>
                                  
                                </div>
                            
                    
                              </div>  
                  </div>
       
            </div>
                            
            <p class="text-center text-muted">'.$value["pieDePagina"].'</p>    
                
        </div>
        ';
    }
        ?>

<?php
      $botones = new botonesControlador();
      $datosBotones=$botones->ctrbotonControlador();
 
foreach($datosBotones as $value){   
              echo ' 
        
    <a  href='.$value["referencia"].' class='.$value["clase"].' > <i class='.$value["icono"].'></i></a>
   
   
    ';
}
    ?>
    </section>