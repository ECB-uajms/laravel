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
<form action="pagina2.php" method="post">
Ingrese el nombre de fruta:
<input type="text" name="nombre"><br>
<input type="submit" value="buscar">
</form>
</body>
</html>
