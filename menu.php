<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Take Expert</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gestion de usuarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="registrousuario.php">registrar usuario </a></li>
            <li><a class="dropdown-item" href="consultarusuarioespecifico.php">consultar usuario</a></li>
            <li><a class="dropdown-item" href="consulta de usuarios general.php">consultar todos los usuarios</a></li>
            <li><a class="dropdown-item" href="eliminarusuariogeneral.php">eliminar todos los usuarios</a></li>
            <li><a class="dropdown-item" href="eliminarusuarioespecifico.php">eliminar usuario </a></li>
            <li><a class="dropdown-item" href="modificarusuario.php">modificar usuario </a></li>

          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">login</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">buscar</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>