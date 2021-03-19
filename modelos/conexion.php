<?php


class Conexion{

    public function conectar(){
        $server = 'localhost';
        $usuario = 'root';
        $pass = '';
        $database = 'mvcweb';
      try {
        $conexion = new PDO("mysql:host=$server;dbname=$database;",$usuario, $pass); 
        $conexion->exec("SET CHARACTER SET utf8");
         return $conexion;
         
        }catch(PDOException $e){
         die('EL ERROR DE CONEXION :'.$e->getMessage());
        }
    }

}

$conn = new Conexion();
$conectar = $conn->conectar();



?>

