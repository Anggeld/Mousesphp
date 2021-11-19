<div class='row row-cols-1 row-cols-md-3 g-4'>
<?php
    $mysqli = new mysqli("localhost", "root", "", "tienda_online");
    $sql = "SELECT id, nombre, descripcion, precio, nombre_img FROM productos";
    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()) {
        $rutaimg = substr($row["nombre_img"], 3);
        echo "<div class='col'>";
        echo "<div class='card'>";
        echo "<img class='card-img-top' src='".$rutaimg ."'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>".$row["nombre"]."</h5>";
        echo "<p class='card-text'>Descripcion: </h4>". $row["descripcion"];
        echo "<p class='card-text'>Precio: ".$row["precio"]."€</p>";
        echo "<a href='carrito.php?id=".$row["id"]."&nombre=".$row["nombre"]."&descripcion=".$row["descripcion"]."&precio=".$row["precio"]."' class='btn btn-primary'>Comprar</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        
    } 
    $mysqli->close();
?>

</div>