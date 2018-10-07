<html>
<head>
<title>Login</title> 
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
</head>
<body>

<div id="contenedor">
<div id="formu">
<form action="" method="post">
Usuario  <input type="text" name="user" >
Password<input type="password" name="pass"><br>
<input type="submit" value="enviar" />
</form>
</div>
</div>
</body>

</html>

<?php 
 function validaRequerido($user){
    if(trim($valor) == ''){
       return false;
    }else{
       return true;
    }
 }
 function validarEntero($valor, $opciones=null){
    if(filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE){
       return false;
    }else{
       return true;
    }
 }
 function validaEmail($valor){
    if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
       return false;
    }else{
       return true;
    }
 }
?>


</body>
</html>
