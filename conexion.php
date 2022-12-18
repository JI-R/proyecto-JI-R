<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base = "bdpedidochino"; //BD creada por nosotros//
$conexion = new mysqli($host,$usuario,$contrasena,$base);
if ($conexion -> connect_errno)
	{
die("Fallo la conexion :(".$conexion -> mysqli_connect_errno().")".$conexion -> mysqli_connect_error());
	}
?>