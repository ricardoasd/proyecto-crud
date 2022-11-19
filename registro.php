<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisro usuarios</title>
    <link href="styles.css" type="text/css" rel="stylesheet" />
       <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<?php
include_once('db.php');
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$id=$_POST['id'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
 echo "REGISTRO EXITOSO"
 $conectar=conn();
 $sql= "INSERT INTO `usuarios` (`nombre`, `correo`, `id`, `usuario`, `clave`) VALUES ('$nombre', '$correo', '$id', '$usuario', '$clave')";
 $resul = mysqli_query($conectar, $sql)or trigger_error("querry failed! sql- eror:".mysqli_error($conectar), E_USSER_ERROR);
 
?>
<meta http-equiv="refresh" content="3;url=registrousuario.php"/>    
   
   </div> 
</body>
</html>