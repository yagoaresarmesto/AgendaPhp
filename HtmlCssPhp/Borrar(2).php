<?php
 
include("conectar.php"); //Conectar Base


$sql ="DELETE FROM profesional WHERE Telefono='$_POST[Telefono]'";
$resultado=mysqli_query($conn, $sql);




mysqli_close($conn);
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

<div class="Borrado">

<p> Se ha borrado el contacto con éxito ≧◠‿◠≦✌ </p>

<p><a href="2.MiAgendaProfesional.php"> Pulsa para volver a los contactos profesionales</p></a

</div>


</body>
</html>