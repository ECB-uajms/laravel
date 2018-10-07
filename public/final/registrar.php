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
    <h1>Registrar Frutas</h1>
    <br><br><br>
    <center>
        <form action="registrofrutas.php" method="post">
            <table >
            <tr>
            <td>Nombre</td><td><input type="text" size=32 name="nombre" PLACEHOLDER="nombre" tabindex="7"><br></td>
            </tr>
            <tr>
            <td>Precio</td><td><input type="text" size=32 name="precio" PLACEHOLDER="precio" >Bs</td>
            </tr>
            <tr>
            <td>Cantidad</td><td><input type="text" size=32 name="cantidad" PLACEHOLDER="Cantidad" ></td>
            </tr><br>
        </table>
        <input type="submit" value="Registrar"> 
        </form>
    </center>
</body>
</html>