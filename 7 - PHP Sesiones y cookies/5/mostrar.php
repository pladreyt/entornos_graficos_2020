<?php
session_start();
echo("USUARIO: " . $_SESSION["usuario"] . '<br>' );
echo("PASSWORD: " .$_SESSION["password"] . '<br>' );

echo ("<a href='formulario.html'>Volver</a>");
?>