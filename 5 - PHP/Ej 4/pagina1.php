<?php session_start(); 
if(isset($_SESSION['paginas_visitadas'])) 
$_SESSION['paginas_visitadas'] += 1; 
else
$_SESSION['paginas_visitadas']=1; 
  
echo"Paginas visitadas = ".$_SESSION['paginas_visitadas'];?>
<p>Esta es la pagina 1.</p>
<a href="main.php">Volver</a>
