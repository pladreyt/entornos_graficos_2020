<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario</title>
</head>
<?php 
    session_start();
?>
<body>
    <form action="verificar.php" method="POST" name="ingreso">
        <td> Mail:</td>
        <td> <input style="width:100px" autocomplete="off" type="mail" name="mail" maxlength="140"> </td>
        <input type="submit" name="Submit" value="Ingresar">
    </form>
    <a href='mostrar.php'>Mostrar</a>

</body>

</html>