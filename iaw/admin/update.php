<?php
    $nom = $_REQUEST["nombre"];
    $des = $_REQUEST["descripcion"];
    $pre = $_REQUEST["precio"];
    $img = $_REQUEST["nombre_img"];
    $id = $_REQUEST["id"];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dir_subida  = "../img/";
        $fichero_subido = $dir_subida . basename($_FILES["nombre_img"]["name"]); 

        if (move_uploaded_file($_FILES["nombre_img"]["tmp_name"], $fichero_subido)) {
            
            echo '<p>Se subió perfectamente a la ruta: '. $fichero_subido .'</p>';
            
            echo '<p><img width="500" src="' . $fichero_subido . '"></p>';
        } else {
            
            echo '<p>¡Ups! Algo ha pasado.</p>';
        }
    }

    $mysqli = new mysqli("localhost", "root", "", "tienda_online");
    $sql = "UPDATE productos SET id = $id ,nombre = '$nom', descripcion = '$des', precio = '$pre',nombre_img = '$fichero_subido'  WHERE id = $id";
    $mysqli->query($sql);
    $mysqli->close();
    
    header("location: adminindex.php");

?>