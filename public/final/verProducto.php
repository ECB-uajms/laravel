<?php
$conexion=mysqli_connect("localhost","root","","frutas") or
    die("Problemas con la conexiÃ³n");
?>
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
                    <a href="verProducto.php" class="icon icon-verproducto"> Aumentar productos</a>
                    <a href="vender.php" class="icon icon-vender"> Vender</a>
                </nav>
    </div>
</header>

<body>
<br><br><br>
    <h1>Aumentar producto</h1><br><br>
    <br><br>
    <form action="aumentar1.php" method="post">
            <table >
            <tr>
            <td>Ingrese el nombre de fruta</td><td><input type="text" size=32 name="nombre" PLACEHOLDER="nombre"><br></td>
            </tr>
            </table>
        <input type="submit" value="buscar"> 
    </form>
</form>
</body>
</html>