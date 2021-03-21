<?php

    
require_once "./controladores/vistasControlador.php";
$instanciaVistas = new vistasControlador();

$vistas= $instanciaVistas->obtener_vistas_controlador();
?>

<!DOCTYPE html>
<html lang="es">
<head>

     <meta name="description" content="Hacemos tu pagina web realidad! diseño de tu idea y marca para tener mas ventas y clientes."/>
     <meta name="robots" content="NOODP">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="diseño web,pagina web,tienda online ventas"/>
   
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo COMPANY;?></title>
    <?php include  "./vistas/inc/link.php";?>
</head>

<body>
<?php include  "./vistas/inc/navBar.php";
 include  "./vistas/inc/header.php"; 
 include  "./vistas/inc/infoServicios.php";  
 include  "./vistas/inc/info_banner.php";    
 include  "./vistas/inc/servicios.php";
include  "./vistas/inc/redes.php";

include  "./vistas/inc/footer.php"; 
include   "./vistas/inc/script.php"; 

?>
		
</body>
</html>







