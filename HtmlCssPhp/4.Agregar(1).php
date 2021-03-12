
 <?php

include("conectar.php"); //Conectar Base

$sql ="INSERT INTO $_POST[Tabla] (id, Nombre, Apellidos, Telefono, Correo)
VALUES ('$_POST[id]',
'$_POST[Nombre]',
'$_POST[Apellidos]',
'$_POST[Telefono]',
'$_POST[Correo]')";

$resultado=mysqli_query($conn, $sql);
mysqli_close($conn);


include("conectar(2).php");
$sql1 ="SELECT * FROM $_POST[Tabla] WHERE id='$_POST[id]'";

$resultado=mysqli_query($conn2, $sql1);

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

<div class="TituloAgedaPersonal"><p>Resultado </p></div>



<div class="contenidoContactoPersonal">

 <form action= "Modificar(2).php" method="post">


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

<?php }  mysqli_close($conn2);  ?>   <!-- Este es el final de bucle while de arriba -->
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
