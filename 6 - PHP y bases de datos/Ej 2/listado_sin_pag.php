<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
<title>Listado completo</title>
</head>
<body>
<?php
include("conexion.php");
$sql = "SELECT * FROM ciudades";
$resultado = mysqli_query($link, $sql);
$total_registros=mysqli_num_rows($resultado);
echo "Numero de registros encontrados: " . $total_registros . "<br>";
?>
<table>
<tr>
    <th>Id</th>
    <th>Ciudad</th>
    <th>Pais</th>
    <th>Habitantes</th>
    <th>Superficie</th>
    <th>Tiene metro</th>
</tr>
<?php
while ($fila = mysqli_fetch_array($resultado))
{
?>
<tr>
 <td><?php echo ($fila['id']); ?></td>
 <td><?php echo ($fila['ciudad']); ?></td>
 <td><?php echo ($fila['pais']); ?></td>
 <td><?php echo ($fila['habitantes']); ?></td>
 <td><?php echo ($fila['superficie']); ?></td>
 <td><?php echo ($fila['tiene_metro'])? "Si": "No"; ?></td>
</tr>

<?php
}
// Liberar conjunto de resultados
mysqli_free_result($resultado);
// Cerrar la conexion
mysqli_close($link);
?>
 </td>
</tr>
</table>
<p><a href="menu.html">Volver al menu</a></p>
</body>
</html>