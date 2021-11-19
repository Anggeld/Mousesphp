<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Carrito</title>
</head>
<body>
<header>
        <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
  <a href="index.php"><img src="img/atras.png" class="d-inline-block align-text-top"alt="Carrito" width="40px" height="40px"></a>
    
  </div>
        </nav>
    </header>
<?php
        session_start();
        $IDTOT="";
        $NOMTOT="";
        $PRECTOT=0;
        echo "<h2 class='text-center'>Mi carrito</h2>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
       
        echo "<table class='table mx-auto' style='width: 80%;''>";
        echo "<tr>";
            echo "<th style='text-align:center; vertical-align:middle;'>ID</th>";
            echo "<th style='text-align:center; vertical-align:middle;'>Nombre</th>";
            echo "<th style='text-align:center; vertical-align:middle;'>Descripcion</th>";
            echo "<th style='text-align:center; vertical-align:middle;'>Precio</th>";
        echo "</tr>";
        foreach ($_SESSION as $result){
            echo "<tr>";
            echo "<td style='text-align:center; vertical-align:middle;'>".$result[0]."</td>";
            echo "<td style='text-align:center; vertical-align:middle;'>".$result[1]."</td>";
            echo "<td style='text-align:center; vertical-align:middle;'>".$result[3]."</td>";
            echo "<td style='text-align:center; vertical-align:middle;'>".$result[4]."€ </td>";
            echo "</tr>";           
            $IDTOT=$result[0].",".$IDTOT;
            $NOMTOT=$result[1].",".$NOMTOT;
            $PRECTOT=$result[4]+$PRECTOT;
        }
        echo "</table>";
        echo "<br>";
        echo "<br>";
        echo "<table class='table mx-auto' style='width: 90%;''>";
        echo "<tr>";
        echo "<th style='text-align:center; vertical-align:middle;'>IDS pedido</th>";
        echo "<th style='text-align:center; vertical-align:middle;'>Nombres Pedido</th>";
        echo "<th style='text-align:center; vertical-align:middle;'></th>";
        echo "<th style='text-align:center; vertical-align:middle;'></th>";
        echo "<th style='text-align:center; vertical-align:middle;'>Precio TOTAL</th>";
        echo "</tr>"; 
        
        echo "<tr>";

        echo"<form method='post' action='pedidos.php'>";
        echo "<td style='text-align:center; vertical-align:middle;'><input style='width: 40%;  type='text' id='id' name='id' value='".$IDTOT."' readonly></td>";
        echo "<td style='text-align:center; vertical-align:middle;' colspan='2'><input style='width: 130%;' type='textarea' id='nombre' name='nombre' value='".$NOMTOT."' readonly></td>";
        echo "<td style='text-align:center; vertical-align:middle;'></td>";
        echo "<td style='text-align:center; vertical-align:middle;'><input style='width: 15%; type='text' id='precio' name='precio' value='".$PRECTOT."' readonly></td>";
        echo "</tr>";  
        echo "<tr>";
        echo"<td style='text-align:center; vertical-align: middle;'><input style='padding:10px;' type='submit'value='Realizar pedidos'></input></td>";
        echo "<td><a class='btn btn-primary' href='vaciarcarrito.php'>Cancelar pedido</a></td>";
        echo"</form>";
        echo "</tr>";  
        
        echo "</table>";
    ?>
    <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
     
    </ul>
    <p class="text-center text-muted">© 2021 IES PABLO SERRANO, Inc</p>
  </footer>
    </div>
</body>
</html>