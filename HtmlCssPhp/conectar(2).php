<?php
$user="root"; //user
$pass=""; //pass
$server="localhost"; //servidor
$db="agenda"; //Base de datos

$conn2= new mysqli($server, $user, $pass, $db);

if (!$conn2){
die("Conenction failed:" .mysqli_connect_error());
}
?>
