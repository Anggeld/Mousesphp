<?php

    $ids = $_REQUEST["$IDTOT"];
    $nom = $_REQUEST["$NOMTOT"];
    $pre = $_REQUEST["$PRECTOT"];

    

    $mysqli = new mysqli("localhost", "root", "", "tienda_online");
    $sql = "insert into pedidos (Ids, Nombre, Precio) values ('$ids', '$nom', '$pre')";
    $mysqli->query($sql);
    $mysqli->close();
    
    header("location: index.php");

?>