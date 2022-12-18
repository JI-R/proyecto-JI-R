<?php
include("conexion.php");
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$usuario' and clave = '$clave'");
$comprobacion = mysqli_num_rows($query);
if($comprobacion == 1){
echo("Usuario y contraseña correcta");
echo "<script>window.location.href='menu.html'</script>";
}else if ($comprobacion == 0){
echo("Usuario y contraseña incorrectas");
echo "<script>window.location.href='index.html'</script>";
}
?>