<?php

    $nom = $_REQUEST["nombre"];
    $des = $_REQUEST["descripcion"];
    $pre = $_REQUEST["precio"];
    $img = $_REQUEST["nombre_img"];

    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dir_subida  = "../img/";
            // Esto me lo da el formulario al subir el archivo. nombre_img es el name del input.
            $fichero_subido = $dir_subida . basename($_FILES["nombre_img"]["name"]); 

            if (move_uploaded_file($_FILES["nombre_img"]["tmp_name"], $fichero_subido)) {
                // Mensaje de confirmación donde todo ha ido bien
                echo '<p>Se subió perfectamente a la ruta: '. $fichero_subido .'</p>';
                // Muestra la imagen que acaba de ser subida
                echo '<p><img width="500" src="' . $fichero_subido . '"></p>';
            } else {
                // Mensaje de error: ¿Límite de tamaño? ¿Ataque?
                echo '<p>¡Ups! Algo ha pasado.</p>';
            }
        }
    
    

    $mysqli = new mysqli("localhost", "root", "", "tienda_online");
    $sql = "insert into productos (nombre, descripcion, precio, nombre_img) values ('$nom', '$des', '$pre','$fichero_subido')";
    $mysqli->query($sql);
    $mysqli->close();
    
    header("location: adminindex.php");

?>