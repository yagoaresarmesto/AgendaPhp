<?php
$user="root"; //user
$pass=""; //pass
$server="localhost"; //servidor
$db="agenda"; //Base de datos

$conn= new mysqli($server, $user, $pass, $db);

if (!$conn){
die("Conenction failed:" .mysqli_connect_error());
}
?>
