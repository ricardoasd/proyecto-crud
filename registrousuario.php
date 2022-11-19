<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
    
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<script src="validaciones.js"></script>
<body>
<div class="container">
<?php
    include("menu.php");

    ?>
    <center><h1>Registro</h1></center>
     <form name="form" action="registro.php" method="post" onsubmit="return Validaciones()">
     <label class="form-label">Nombre </label>
        <input type="text" name="nombre" id="username" class="form-control" placeholder="Por favor ingrese sus datos" required />
        <label class="form-label">Correo</label>
        <input type="mail" name="correo" id="usermail" class="form-control" placeholder="Por favor ingrese sus datos" required />
        <label class="form-label">Id</label>
        <input type="number" name="id" id="usernumber" class="form-control"  placeholder="Por favor ingrese sus datos" required/>
        <label class="form-label">Usuario</label>
        <input type="text" name="usuario" id="ussername" class="form-control" placeholder="Por favor ingrese sus datos" required />
        <label class="form-label">clave</label>
        <input type="password" name="clave" id="userpass" class="form-control" placeholder="Por favor ingrese sus datos" required />
     

<center> <input type="submit" value="registrar"></center>
 <center><input type="reset" value="borrar"></center>
</form>
</div> 
</body>
</html>
