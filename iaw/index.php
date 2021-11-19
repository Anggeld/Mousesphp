<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Tienda</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin/admin.php">
      <img src="img/admin.ico" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Admin
    </a>
    <li><a href="carritoindex.php"><img src="img/carrito.png" alt="Carrito" width="40px" height="40px"></a></li>
  </div>
        </nav>
    </header>
    
        <h1 class="text-center">Lista de Productos</h1>
    <?php
    include("read.php")
    ?>
   
    <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><p class="nav-link px-2 text-muted">Elegir es complicado!</p></li>
     
    </ul>
    <p class="text-center text-muted">© 2021 Company, Inc</p>
  </footer>
    </div>
    
</body>
</html>