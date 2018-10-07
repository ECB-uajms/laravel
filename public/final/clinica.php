<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" href="style.css" media="all">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>

<script language="javascript">
function about(){    
       /// Aqui podemos enviarle alguna variable a nuestro script PHP
    var variable_post="Mi texto recargado";
       /// Invocamos a nuestro script PHP
    $.post("about.html", { variable: variable_post }, function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    $("#recargado").html(data);
    });         
}
function Login(){    
       /// Aqui podemos enviarle alguna variable a nuestro script PHP
    var variable_post="Mi texto recargado";
       /// Invocamos a nuestro script PHP
    $.post("form.php", { variable: variable_post }, function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    $("#recargado").html(data);
    });
}
function celular(){    
       /// Aqui podemos enviarle alguna variable a nuestro script PHP
    var variable_post="Mi texto recargado";
       /// Invocamos a nuestro script PHP
    $.post("cell.html", { variable: variable_post }, function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    $("#recargado").html(data);
    });
}
function comp(){    
       /// Aqui podemos enviarle alguna variable a nuestro script PHP
    var variable_post="Mi texto recargado";
       /// Invocamos a nuestro script PHP
    $.post("comp.html", { variable: variable_post }, function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    $("#recargado").html(data);
    });
}


</script>
 </head>
 
<header>

    <div class="contenedor">
        <h1 class="icon icon-computer">GeekShop</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon icon-menu" for="menu-bar"></label>
                <nav class="menu">
                    <a href="prueba.php" class="icon icon-home"> Inicio</a>
                    <a onclick="javascript:about();" class="icon icon-users">Sobre Nosotros</a>
                    <a  onclick="javascript:cart();" class= "icon icon-game"> Cart </a>
                </nav>
                
           
    </div>
           
            
</header>



        
        <main >

            <section id="banner">
            <img src="Banner2.jpg">
               <div class="contenedor">
           <h2>Gadgets para amantes de la Tecnologia</h2>
                    <p>Encuentre el producto indicado para usted</p>
               </div>

            </section>      
                  
    
      
  
<div id="pro">
<nav id="productos">
  <ul>
  
  <li><a onclick="javascript:celular();"><span class="segundo"><i class="icon icon-cell"></i></span>Celulares</a>
  <!--<ul>
  <li><a href="#">Smartphones</a></li>
  <li><a href="#">Accesories</a></li>
  <li><a href="#">Cases</a></li>
    <li><a href="#">Storages Devices</a></li>
    <li><a href="#">Earphones and Speakers</a> </li>
  <li><a href="#">Screen protectors</a> </li>
  </ul>-->
  </li>
  
  <li><a onclick="javascript:celular();"><span class="cuarto"><i class="icon icon-computer"></i></span>Computadoras</a></li>
  <ul>
  <li>
  <form id="busqueda" action="" method="post">
           <div class="field" id="searchform">
                <input type="text" id="searchterm" name="nombre"  onkeydown = "if (event.keyCode == 13)
                 " placeholder="Search....." required>  
                    <button type="submit" id="search"  class="icon icon-lupa" value="buscar"></button>
                        </form>
                        </li>
  </ul>
  </li>
    </nav>
        </div>


            
           <div id="recargado">
           <div id="sell"> 
              <?php
$conexion=mysqli_connect("localhost","user","123456","pedidos") or
    die("Problemas con la conexión");

$registros=mysqli_query($conexion,"select nombre,precio
                        from productos where nombre LIKE '%$_REQUEST[nombre]'") or
  die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros))
{
  echo "Nombre:".$reg['nombre']."<br>";
  echo "Precio:".$reg['precio']." $"."<br>";
 echo '<img src="img/Celulares/'.$reg['nombre'].'.jpg" />';
}
else
{
  echo "No existe ese producto.";
}

mysqli_close($conexion);
?></div>
           <section id="blog">
                <div class="contenedor">
                    <article>
                        <img src="img/1(1).jpg">
                        <h4>Parlante zellot</h4>
                    </article>
                    <article>
                        <img src="img/1(2).jpg">
                        <h4>Tablet Lenovo con Teclado</h4>
                    </article>
                    <article>
                        <img src="img/1(5).jpg">
                        <h4>Cargador USB</h4>
                    </article>
                    <article>
                        <img src="img/1(4).jpg">
                        <h4>Parlante Bluedio  </h4>
                    </article>
                    <article>
                        <img src="img/1(6).jpg">
                        <h4>Mini Dron</h4>
                    </article>
                    <article>
                        <img src="img/1(7).jpg">
                        <h4>Gafas VR</h4>
                    </article>
                    <article>
                        <img src="img/1(8).jpg">
                        <h4>Cables USB</h4>
                    </article>
                    <article>
                        <img src="img/1(10).jpg">
                        <h4>Doogee Armor</h4>
                    </article>
                    <article>
                        <img src="img/1(11).jpg">
                        <h4>Tablet Chuwi</h4>
                    </article>
                    <article>
                        <img src="img/1(12).jpg">
                        <h4>Tablet Teclast</h4>
                    </article>
                    <article>
                        <img src="img/1(14).jpg">
                        <h4>Celular Xiaomi Redmi Note 4</h4>
                    </article>
                    <article>
                        <img src="img/1(15).jpg">
                        <h4>Accesorios de Dron</h4>
                    </article>
                </div>
            </section>
            

          
           </div>
           
        </main>
        <html>




        
        <footer id="footer">
            <div class="contenedor">
         <!--   <div class="cont">
                <img src="png/EMS.jpg" width="150px" height="50px">
                <img src="png/DHL.jpg" width="150px" >
                 <img src="png/American-Express.jpg" width="150px">
                <img src="png/Mastercard.png" width="150px" height="50px">
                <img src="png/VISA.png" width="150px" height="60px">
                <img src="png/Paypal-logo.png" width="150px" height="70px">
               
                </div> -->
                <p class="copy">Copyright &copy; 2017-2021  All rights reserved </p>
                <div class="sociales">
                    <a class="icon icon-facebook2"  href="http://www.facebook.com/isaiastja"></a>
                    <a class="icon icon-twitter"  href="http://www.twitter.com/isaiastja"></a>
                    <a class="icon icon-google-plus3" href="http://plus.google.com/"></a> </div>
              </div>
       
           
        </footer>
     
        </html>

