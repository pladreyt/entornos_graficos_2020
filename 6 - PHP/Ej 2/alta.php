<?php
include("conexion.php");

$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$habitantes = $_POST['habitantes'];
$superficie = $_POST['superficie'];
$tiene_metro = $_POST['tiene_metro'];

//Arma la instrucción SQL y luego la ejecuta
$sql = "SELECT ciudad FROM ciudades WHERE ciudad='$ciudad'";
$query = mysqli_query($link, $sql) or die (mysqli_error($link));
$resultado = mysqli_fetch_assoc($query);

if ($resultado['ciudad'] == $ciudad) {
    echo ("La ciudad ya existe<br>");
    echo ("<a href='ciudades_alta.html'>VOLVER AL MENU DE ALTA</a>");
}
else {
    $sql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tiene_metro)
    values ('$ciudad','$pais', '$habitantes', '$superficie', '$tiene_metro')";
    mysqli_query($link, $sql) or die (mysqli_error($link));
    echo("La ciudad fue registrada correctamente.<br>");
    echo ("<a href='menu.html'>VOLVER AL MENU</A>");
    // Liberar conjunto de resultados
    mysqli_free_result($Resultado);
}
// Cerrar la conexion
mysqli_close($link);
?>