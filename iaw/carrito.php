<?php
    session_start();
   
    $id = $_REQUEST["id"];
    $nombre = $_REQUEST["nombre"];
    $imagen = $_REQUEST["imagen"];
    $descripcion = $_REQUEST["descripcion"];
    $precio = $_REQUEST["precio"];



    $prodsession = [$id, $nombre, $imagen, $descripcion, $precio];
    $_SESSION["$nombre"] = $prodsession;


    header("Location: index.php");
?>