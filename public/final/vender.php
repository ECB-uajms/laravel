<?php
$conexion=mysqli_connect("localhost","root","","frutas") or
    die("Problemas con la conexiÃ³n");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
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
<style>
div.parte{
border: 0px solid #000000;
float: left;
width: 48%;
height: 100%;
}
</style>
<body>
<br><br><br>
    <h1>Vender Frutas</h1><br><br>
    <br><br>

    <center><div class="parte">
<table class="tabla" border="3">
<h2>frutas en venta</h2>
<tr>
<th>nombre</th>
<th>precio</th>
<th>cantidad</th>
</tr>
<?php

$sql=" SELECT* from registro ";

$result= mysqli_query($conexion,$sql);

while($mostrar=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $mostrar['nombre']?></td>
<td><?php echo $mostrar['precio']?></td>
<td><?php echo $mostrar['cantidad']?></td>
</tr>
<?php
}
?>
</table>
</div></center>
<div class="parte">
<center>
        <form action="pagina2.php" method="post">
            <table >
            <tr>
            <td>Nombre</td><td><input type="text" size=32 name="nombre" PLACEHOLDER="nombre"><br></td>
            </tr>
        </table>
        <input type="submit" value="Vender"> 
        </form>
</div>
</body>
</html>