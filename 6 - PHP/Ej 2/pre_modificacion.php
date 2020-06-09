<?php
include ("conexion.php");
//Captura datos desde el Form anterior
$ciudad = $_POST['ciudad'];
//Arma la instrucción SQL y luego la ejecuta
$sql = "SELECT * FROM ciudades WHERE ciudad ='$ciudad' ";
$resultado = mysqli_query($link, $sql) or die (mysqli_error($link));;
$fila = mysqli_fetch_array($resultado);
if(mysqli_num_rows($resultado) == 0) {
 echo ("La ciudad no existe.<br>");
 echo ("<a href='ciudades_mod.html'>Volver</a>");
}
else{
?>

<form action="modificacion.php" method="POST" name="ciudades_mod">
    <table width="250px">
        <input type="hidden" name="id" value="<?php echo($fila['id']); ?>">
        <tr>
            <td> Ciudad: </td>
            <td> <input style="width:100px" autocomplete="off" type="text" name="ciudad" maxlength="45" value="<?php echo($fila['ciudad']); ?>"></td>
        </tr>
        <tr>
            <td> Pais: </td>
            <td> <input style="width:100px" autocomplete="off" type="text" name="pais" maxlength="45" value="<?php echo($fila['pais']); ?>"></td>
        </tr>
        <tr>
            <td> Habitantes: </td>
            <td> <input style="width:100px" autocomplete="off" type="number" name="habitantes" min="1" max="99999999" value="<?php echo($fila['habitantes']); ?>"></td>
        </tr>
        <tr>
            <td> Superficie: </td>
            <td> <input style="width:100px" step="0.01" autocomplete="off" type="number" name="superficie" min="1" max="99999999" value="<?php echo($fila['superficie']); ?>"></td>
        </tr>
        <tr>
            <td> Tiene metro: </td>
            <td> <input type="hidden" value="0" name="tiene_metro"/> <input type="checkbox" name="tiene_metro" value="1" <?php echo ($fila['tiene_metro'] == 1) ? "checked" : ""; ?> /> </td>
        </tr>
        <tr>
            <td colspan="2"> <input type="submit" name="submit" value="Modificar ciudad">
                <p><a href="menu.html">Volver al menu</a></p>
            </td>
        </tr>
    </table>
</form>
<?php
}
// Liberar conjunto de resultados
mysqli_free_result($resultado);
// Cerrar la conexion
mysqli_close($link);
?>