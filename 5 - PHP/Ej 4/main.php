<?php session_start(); 
if(isset($_SESSION['paginas_visitadas'])) 
$_SESSION['paginas_visitadas'] += 1; 
else
$_SESSION['paginas_visitadas']=1; 
if($_GET['reset']){
    unset($_SESSION['paginas_visitadas']); 
    $_SESSION['paginas_visitadas']=1;  
}
echo"Paginas visitadas = ".$_SESSION['paginas_visitadas'];?>
<html>
    <head>
        <title>Principal</title>
    </head>
    <body>
        <div class="container">
            <a href="pagina1.php">Ir a pagina 1</a>
            <a href="pagina2.php">Ir a pagina 2</a>
            <a href="main.php?reset=1">Resetear contador</a>
        </div>
    </body>
</html>