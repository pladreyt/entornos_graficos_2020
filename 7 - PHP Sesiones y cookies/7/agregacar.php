<?php
include("conexion.php");
session_start();
extract($_REQUEST);
if(!isset($cantidad)){$cantidad=1;}
$sql="select * from catalogo where id='".$id."'";
$query=mysqli_query($link, $sql);
$row=mysqli_fetch_array($query);
if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];
$carro[md5($id)]=array('identificador'=>md5($id),'cantidad'=>$cantidad,'producto'=>$row['producto'],'precio'=>$row['precio'],'id'=>$id);

$_SESSION['carro']=$carro;

header("Location:catalogo.php?".SID);
?>