<?php
include("conexion.php");
session_start();
$sql = "SELECT nombre FROM alumnos WHERE mail = '". $_POST["mail"] . "'";
$resultado = mysqli_query($link, $sql);
$fila = mysqli_fetch_row($resultado);
$_SESSION["nombre"] = $fila[0];
// Liberar conjunto de resultados
mysqli_free_result($resultado);
// Cerrar la conexion
mysqli_close($link);
echo ("<a href='formulario.php'>Volver</a>");

?>