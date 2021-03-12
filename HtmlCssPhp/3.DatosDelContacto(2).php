<?php

include("conectar.php"); //Conectar Base

$numero = $_GET['id']; //Le paso el valor del id

//Ahora voy a hacer un SELECT donde le paso el valor del id del contacto
$sql ="SELECT * FROM profesional WHERE id=$numero;";

$resultado=mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($resultado)){
 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Mi Agenda</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='estilos.css'>
</head>
<body>
    
<div class="CabeceraAgenda"> 

<div class="nombrePag">
<h1>MI AGENDA ✍</h1>
</div>
<div class="grid-Boton">
<input class="boton" type="submit" value="👉Agrega">
</div>

<div class="grid-Boton">
<input class="boton" type="submit" value="🔙Volver" onclick="location.href = '1.MiAgenda.html'">
</div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

<div class="bloque2">


<div class="bloqueMiAgenda">

<div class="TituloAgedaPersonal"><p>Datos del contacto</p></div>



<div class="contenidoContactoPersonal">
   
 <!-- El bucle está aquí, simplmente recorre cada valor y lo meto dentro de los input -->
 <form action= "Borrar(2).php" method="post">

 <p>Nombre:
<input class="cuadrotexto2" type="text" name="Nombre" readonly="readonly" value="<?php echo $row["Nombre"]?>"  >
</p>
<p>Apellidos:
<input class="cuadrotexto2" type="text" name="Apellidos" readonly="readonly" value="<?php echo $row["Apellidos"]?>"  >
</p>
<p>Teléfono:
<input class="cuadrotexto2" type="tel" name="Telefono" readonly="readonly" value="<?php echo $row["Telefono"]?>"  >
</p>
<p>Correo:
<input class="cuadrotexto2" type="email" name="Correo" readonly="readonly" value="<?php echo $row["Correo"]?>"  >
</p>





</div>

<div class="bloqueBotones">

<div></div>
<div class="grid-Boton2">
<input class="boton2" type="submit" name="ELIMINAR" value="ELIMINAR ">
</form>
</div>




<form class="grid-Boton2" action= "Modificar(3).php" method="post">

<input class="boton2" type="submit" name="MODIFICAR" value="MODIFICAR ">
<input class="cuadromini" type="text" name="id" value="<?php echo $row["id"]?>"  >

</form>


<?php  } mysqli_close($conn);  ?>   <!-- Este es el final de bucle while de arriba -->

</div>

</div>
</div>

<br>

<div class="piedepagina">

<p>
<a href="http://www.twitter.com"> <img src="Ztwitter - copia.png" ></a> 
     <a href="http://www.facebook.com"> <img src="Zfacebook - copia.png" ></a>    
     <a href="http://www.instagram.com"> <img src="Zinstagram - copia.png" ></a> 
         
Este blog ha sido creado por Yago Ares Armesto. Todos los derechos reservados ©.
&nbsp;&nbsp;</p>

</div>


</body>
</html>