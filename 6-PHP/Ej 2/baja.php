<?php
include ("conexion.php");
$ciudad = $_POST['ciudad'];
$sql = "SELECT * FROM ciudades WHERE ciudad='$ciudad' ";
$resultado = mysqli_query($link, $sql);
if(mysqli_num_rows($resultado) == 0)
 {
 echo ("Ciudad inexistente <br>");
 echo ("<a href='ciudades_baja.html'>Continuar</a>");
}
else{
//Arma la instrucción SQL y luego la ejecuta
$sql= "DELETE FROM ciudades WHERE ciudad = '$ciudad' ";
mysqli_query($link, $sql);
 echo("La ciudad fue eliminada<br>");
 echo("<a href='menu.html'>Volver al Menu</a>");
}
// Liberar conjunto de resultados
mysqli_free_result($resultado);
// Cerrar la conexion
mysqli_close($link);
?>