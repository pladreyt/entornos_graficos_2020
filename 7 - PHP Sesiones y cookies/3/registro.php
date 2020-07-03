<?php
$usuario = $_POST['usuario'];
setcookie("usuario", $usuario, time() + (60 * 60 * 24 * 90));
echo ("<a href='main.php'>Volver</a>");
?>