<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Admin</title>
</head>
<header>
        <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
  <a href="../index.php"class='btn btn-primary'>Cerrar Sesión</a>
    
  </div>
        </nav>
    </header>
<body>
    <h2 class="text-center">Productos</h2>
    <form method="post" action="create.php" enctype="multipart/form-data">
        <label for="nombre">Producto:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="descricion">Descricion:</label>
        <input type="text" id="descricion" name="descricion">
        <label for="precio">Precio:</label>
        <input type="decimal" id="precio" name="precio">
        <label for="nombre_img">Seleccione la imagen:</label>
        <input type="file" name="nombre_img" id="nombre_img">
        <br>
        <button type="submit"value="Enviar" class='btn btn-primary'>Enviar</button>
    </form>
<table class="table table-bordered border-primary">
<?php
    $mysqli = new mysqli("localhost", "root", "", "tienda_online");
    $sql = "SELECT id, nombre, descripcion, precio, nombre_img FROM productos";
    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()) {
        if(isset($_REQUEST["id"]) and $_REQUEST["id"] == $row['id']){
            echo"<td><form method='post' action='update.php' enctype='multipart/form-data'></td>";
            echo"<td>";
            echo "<label for='id'>ID:</label>"; 
            echo "<input type='text' id='id' name='id'>";
            echo "</td>";
            echo"<td>";
            echo "<label for='nombre'>NOMBRE:</label>";
            echo "<input type='text' id='nombre' name='nombre'>";
            echo "</td>";
            echo"<td>";
            echo "<label for='descripcion'>DESCRIPCION:</label>";
            echo"<input type='text' id='descripcion' name='descripcion'>";
            echo "</td>";
            echo"<td>";
            echo "<label for='precio'>PRECIO:</label>";
            echo "<input type='text' id='precio' name='precio'>"; 
            echo "</td>";
            echo "<td><label for='nombre_img'></label></td>";
            echo "<td><input type='file' id='nombre_img' name='nombre_img' value='".$row["nombre_img"]."'></td>";
            echo"<td><input type='hidden'name='id'value='".$row["id"]."'></td>";
            echo"<td><button class='btn btn-primary'type='submit'value='Enviar'>Enviar</button></td>";
            echo"</form>";
            
        } else {
        echo "<tr>";
        echo "<td>ID: ".$row["id"]."</td>";
        echo " <td>Nombre: ".$row["nombre"]."</td>";
        echo " <td>Descripcion: ". $row["descripcion"]."</td>";
        echo " <td>Precio: ". $row["precio"]."€</td>";
        echo " <td>Imagen: <img width='100' src='". $row["nombre_img"]."'></td>";
        echo " <td><a href='adminindex.php?id=".$row['id']."'class='btn btn-primary'>Modificar</a></td>";
        echo " <td><a href='delete.php?id=".$row['id']."'class='btn btn-primary'>Borrar</a></td>";
        echo "</tr>";
        
        }
    }
    $mysqli->close();
  
?>
</table>
<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
     
    </ul>
    <p class="text-center text-muted">© 2021 IES PABLO SERRANO, Inc</p>
  </footer>
    </div>
    </html>