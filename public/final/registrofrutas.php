
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilos.css">
</head>
<header>
    <div class="contenedor">
        <h1 class="icon icon-frutas">Frutas</h1>
        <input type="checkbox" id="menu-bar">
                <nav class="menu">
                    <a href="index.php" class="icon icon-hom"> Inicio</a>
                    <a href="registrar.php" class="icon icon-registrar">Nuevo Registro</a>
                    <a href="verProducto.php" class="icon icon-verproducto"> Ver productos</a>
                    <a href="vender.php" class="icon icon-vender"> Vender</a>
                </nav>
    </div>
</header>

<body>
<br><br><br>
    <h1>Productos Registrados</h1><br><br>
    <br><br>
<?php
$conexion=mysqli_connect("localhost","root","","frutas") or
    die("Problemas con la conexión");

mysqli_query($conexion,"insert into registro(nombre,precio,cantidad) values 
                       ('$_REQUEST[nombre]',$_REQUEST[precio],$_REQUEST[cantidad])")
  or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

echo "Fruta registrada.";
?>

</body>
</html>