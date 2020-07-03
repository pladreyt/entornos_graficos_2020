<!DOCTYPE html>
<html lang="es">

<head>
    <title>Contador</title>
</head>

<body>
    <?php
     if (isset($_COOKIE["contador"])) {
        $contador = $_COOKIE["contador"] + 1;
        setcookie("contador", $contador, time() + (60 * 60 * 24 * 90));
        echo "<font face='arial' size='3'>Bienvenido de nuevo. Felices de que ingreses nuevamente, con esta llevas:" . $contador . "</font>";
    }
    else {
        setcookie("contador", 1, time() + (60 * 60 * 24 * 90));
        echo "<font face='arial' size='3'>Bienvenido al sitio !</font>";
    }
    ?>
</body>

</html>