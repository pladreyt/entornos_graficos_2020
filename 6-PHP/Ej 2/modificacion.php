<?php
include ("conexion.php");
//Captura datos desde el Form anterior
$id = $_POST['id'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tiene_metro = $_POST['tiene_metro'];
//Arma la instrucción SQL y luego la ejecuta
$sql = "UPDATE ciudades set ciudad='$ciudad', pais='$pais', habitantes='$habitantes', superficie='$superficie', tiene_metro='$tiene_metro' where
id='$id'";
mysqli_query($link,$sql) or die (mysqli_error($link));
echo("La ciudad fue modificada<br>");
echo("<a href= 'menu.html'>Volver al Menu del ABM</a>");
// Cerrar la conexion
mysqli_close($link);
?>