<?php

include("conectar.php"); //Conectar Base

//Ahora voy a hacer un SELECT donde le paso el valor del id del contacto
$sql ="SELECT * FROM profesional WHERE id='$_POST[id]'";

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

<div class="TituloAgedaPersonal"><p>Modificar contacto</p></div>



<div class="contenidoContactoPersonal">
   
 <!-- El bucle está aquí, simplmente recorre cada valor y lo meto dentro de los input -->
 <form action= "Modificar(4).php" method="post">

 
 <p>Modifica los Campos</p>

 <p>Nombre:
<input class="cuadrotexto2" type="text" maxlength="45" name="Nombre" value="<?php echo $row["Nombre"]?>"  placeholder="máximo 45 caracteres"  >
</p>
<p>Apellidos:
<input class="cuadrotexto2" type="text" maxlength="45" name="Apellidos" value="<?php echo $row["Apellidos"]?>"  placeholder="máximo 45 caracteres"  >
</p>
<p>Teléfono:
<input class="cuadrotexto2" type="tel" maxlength="9" name="Telefono" value="<?php echo $row["Telefono"]?>"  placeholder="máximo 9 caracteres"  >
</p>
<p>Correo:
<input class="cuadrotexto2" type="email" maxlength="45" name="Correo" value="<?php echo $row["Correo"]?>"  placeholder="máximo 45 caracteres" >
</p>


</div>

<div class="bloqueBotones">

<div></div>
<div class="grid-Boton2">



</div>




<div class ="grid-Boton2">

<input class="boton2" type="submit" name="MODIFICAR" value="MODIFICAR ">
<input class="cuadromini" type="text" name="id" value="<?php echo $row["id"]?>" >

<?php  } mysqli_close($conn);  ?>   <!-- Este es el final de bucle while de arriba -->

</form>
</div>



</div>

</div>
</div>
<br>
<div class="piedepagina">

<p> <a href="http://www.twitter.com"> <img src="Ztwitter - copia.png" ></a> 
     <a href="http://www.facebook.com"> <img src="Zfacebook - copia.png" ></a>    
     <a href="http://www.instagram.com"> <img src="Zinstagram - copia.png" ></a> 
     

Este blog ha sido creado por Yago Ares Armesto. Todos los derechos reservados ©.
&nbsp;&nbsp;</p>

</div>


</body>
</html>