<body>
<html>
<head>
<title>Listado completo con paginacion</title>
<style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php
include("conexion.php");
$Cant_por_Pag = 5;
$pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
if (!$pagina) {
$inicio = 0;
$pagina=1;
}
else {
$inicio = ($pagina - 1) * $Cant_por_Pag;
}// total de páginas
$sql = "SELECT * FROM ciudades";
$resultado = mysqli_query($link, $sql);
$total_registros=mysqli_num_rows($resultado);
$total_paginas = ceil($total_registros/ $Cant_por_Pag);
echo "Numero de registros encontrados: " . $total_registros . "<br>";
echo "Se muestran paginas de " . $Cant_por_Pag . " registros cada una<br>";
echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
$sql = "SELECT * FROM ciudades"." limit " . $inicio . "," . $Cant_por_Pag;
$resultado = mysqli_query($link, $sql);
$total_registros=mysqli_num_rows($resultado);
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
<?php
if ($total_paginas > 1){
for ($i=1;$i<=$total_paginas;$i++){
if ($pagina == $i)
//si muestro el índice de la página actual, no coloco enlace
echo $pagina . " ";
else
//si la página no es la actual, coloco el enlace para ir a esa página
echo "<a href='listado_pag.php?pagina=" . $i ."'>" . $i . "</a> ";}}?>
<p><a href="menu.html">Volver al menu</a></p>
</body>
</html>