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

mysqli_query($conexion, "update registro
                          set cantidad='$_REQUEST[cantidadvieja]'-'$_REQUEST[cantidadnueva]'
                        where cantidad='$_REQUEST[cantidadvieja]'") or
  die("Problemas en el select:".mysqli_error($conexion));
  echo "La cantidad se modifico con exito<br>";
  $res=$_REQUEST['cantidadnueva'];
  $pre=$_REQUEST['precio'];
  $resultado=$_REQUEST['cantidadnueva']*$_REQUEST['precio'];
  echo "el precio es de  $resultado";
?>


</body>
</html>
