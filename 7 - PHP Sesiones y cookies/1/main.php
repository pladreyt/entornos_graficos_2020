<!DOCTYPE html>
<html lang="es">

<head>
    <title>Cambio estilo</title>
</head>

<body>
    <?php
    $opciones = array(
        1 => 'normal',
        2 => 'oscuro',
        3 => 'rockero',
    );
    ?>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        Seleccionar estilo.
        <br>
        <select name="estilo">
            <?php
            foreach ($opciones as $name => $v) {
                if ($_COOKIE["estilo"] == $v ) {
                    echo '<option' . ' value="' . $v . '"' . ' selected' . '>' . $v . '</option>';
                } else {
                    echo '<option' . ' value="' . $v . '"' . '>' . $v . '</option>';
                }
            }
            ?>
        </select>
        <input type="submit" value="Cambiar estilo">
        <?php
        if (isset($_POST["estilo"])) {
            $estilo = $_POST["estilo"];
            setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
            header("Refresh: 0");
        } else {
            if (isset($_COOKIE["estilo"])) {
                $estilo = $_COOKIE["estilo"];
            }
        }
        if (isset($estilo)) {
            echo '<link rel="stylesheet" type="text/css" href="' . $estilo . '.css">';
        }
        if (isset($_POST["estilo"])) {
            header("Refresh: 0.1");
        }
        ?>
    </form>
</body>

</html>