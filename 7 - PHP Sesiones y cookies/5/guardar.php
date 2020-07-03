<?php
session_start();
$_SESSION["usuario"]=$_POST["usuario"];
$_SESSION["password"]=$_POST["password"];

echo ("<a href='formulario.html'>Volver</a>");
?>