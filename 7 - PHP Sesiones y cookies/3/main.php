<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario</title>
</head>

<body>
    <form action="registro.php" method="POST" name="ingreso_usuario">
        <td> Usuario:</td>
        <td> <input style="width:100px" autocomplete="off" type="text" name="usuario" maxlength="140"> </td>
        <input type="submit" name="Submit" value="Ingresar">
    </form>
    <?php
    $usuario = $_COOKIE["usuario"];
    if ( $usuario ) {
        echo '<p>El ultimo usuario que ingreso fue <b>' . $usuario . '</b></p>';
    }
    ?>
</body>

</html>