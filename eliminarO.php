<?php 
include("conexion.php");
$id=$_GET['id'];
mysqli_query($conexion,"delete from orden where id=$id");
header("location:ordenes.php");
?>