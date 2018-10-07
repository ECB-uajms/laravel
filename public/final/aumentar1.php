<html>
<head>
<title>Problema</title>
<link rel="stylesheet" href="estilos.css">
</head>
<header>
    <div class="contenedor">
        <h1 class="icon icon-frutas">Frutas</h1>
        <input type="checkbox" id="menu-bar">
               <nav class="menu">
                    <a href="index.php" class="icon icon-hom"> Inicio</a>
                    <a href="registrar.php" class="icon icon-registrar">Nuevo Registro</a>
                    <a href="verProducto.php" class="icon icon-verproducto"> Aumentar productos</a>
                    <a href="vender.php" class="icon icon-vender"> Vender</a>
                </nav>
    </div>
</header>
<body>
    <br><br><br><br>
<?php

$conexion=mysqli_connect("localhost","root","","frutas") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select * from registro
                        where nombre='$_REQUEST[nombre]'") or
  die("Problemas en el select:".mysqli_error($conexion));
if ($reg=mysqli_fetch_array($registros))
{
?>

<form action="aumentar2.php" method="post">
Ingrese cantidad:
<input type="text" name="cantidadnueva" value="<?php echo $reg['cantidad'] ?>">
<br>
<input type="hidden" name="cantidadvieja" value="<?php echo $reg['cantidad'] ?>">
<input type="submit" value="Modificar">
</form>

<?php
}
else
  echo "No existe esa fruta";
?>
</body>
</html>
