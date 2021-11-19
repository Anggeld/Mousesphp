<?php

    $identificador = $_REQUEST["id"];

    $mysqli = new mysqli("localhost", "root", "", "tienda_online");
    $sql = "DELETE FROM productos WHERE id = $identificador";
    $mysqli->query($sql);
    $mysqli->close();
    
    header("location: adminindex.php");
?>