
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
<div class="TituloAgedaPersonal"><p>Mi Agenda Personal</p></div>

<div class="contenidoContactoPersonal">
    

<?php

$user="root"; //user
$pass=""; //pass
$server="localhost"; //servidor
$db="agenda"; //Base de datos

$conn= new mysqli($server, $user, $pass, $db);

if (!$conn){
die("Conenction failed:" .mysqli_connect_error());
}

$sql ="SELECT id FROM personal;";
$resultado = $conn->query($sql);

if($resultado->num_rows > 0){
while($row = $resultado->fetch_assoc()){

if($row['id'] != null){

$numero=$row["id"];

echo '<p>', "<a href='3.DatosDelContacto(1).php?id=$numero'>", "Contacto", $row['id'], "</a> </p>";


}
}

}
 
mysqli_close($conn);

?>


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



