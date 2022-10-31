<?php
    include("dbParametros.inc");
    //include("manejoSesion.inc");

    $conexion = mysqli_connect($host, $user,$password,$dbname) or exit("No se pudo establecer la conexion");

    //try {
    //    $conexion = new PDO ("mysql:host=$host;dbname=$dbname;",$user, $password);
    //}
    //catch (PDOException $e){
    //    die('Conección fallida: ' .$e->getMessage());
    //}
    
?>