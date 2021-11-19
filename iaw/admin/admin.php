<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<header>
        <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
  <a href="../index.php"><img src="../img/atras.png" alt="Carrito" width="40px" height="40px"></a>
    <li><a href="carrito.php"><img src="../img/carrito.png" alt="Carrito" width="40px" height="40px"></a></li>
  </div>
        </nav>
    </header>
    <div class="position-absolute top-50 start-50 translate-middle">
<form method="get" action="login.php">
        <label for="Usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario" required><br>
        <label for="Contraseña">Contraseña:</label><br>
        <input type="password" id="contra" name="contra" required><br>
        <button class="btn btn-primary"type="submit"value="Acceder">Acceder</button>
    </form>
    </div>
    <?php

    ?>
   
</body>
</html>