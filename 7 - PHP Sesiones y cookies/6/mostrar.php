<?php
session_start();
if (isset($_SESSION['nombre'])) {
    echo 'Bienvenido ' . $_SESSION['nombre'] . '. ';
} else {
    echo ' No tienes permiso para ver esta pagina.';
}
echo ("<a href='formulario.php'>Volver</a>");

?>