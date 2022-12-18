<?php 
include("conexion.php");
$id=$_GET['id'];
mysqli_query($conexion,"delete from usuarios where id=$id");
header("location:indexU.php");
?>