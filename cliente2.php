<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<img src="banner1.png" width="100%">
</head>
<body style="background-color: #feffff;">

<form action="" method="post">
<div class="cuadroContenedor">
	<table>
		<thead>
			<tr>
				<th><h3>Nombre del cliente</h3></th>
			<th><input type="text" name="nombre" size="35" class="textNC" required=""></th>
			<th><button class="btnBuscar" target="_blank" name="buscar">Buscar</button></th>
            </tr>
			<tr>
			<th><h3>Telefono</h3></th>
			<th><input type="text" name="telefono" size="35" class="textT" ></th>	
			</tr>
			<tr>
			<th><h3>Direccion</h3></th>	
			<th><input type="text" name="txtDireccion" size="35" class="textD" ></th>
			</tr>
			<tr>
			<th><h3>Referencias</h3></th>	
			<th><input type="text" name="txtReferencias" size="35" class="textR" ></th>
			</tr>
		</thead>
	</table>	
</div>
<br><br><br>

<div class="contenedorB">
	<table>
		<thead>
			<tr>
				<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th><button type="submit" name="insertar" class="btnGuardar">Guardar</button></th>
				<th><a href="orden.php" class="btnSiguiente" target="_blank">Siguiente</a></th>
			</tr>
		</thead>
	</table>
	<style type="text/css">
  .btnGuardar{
    padding: 10px;
    font-weight: 600;
    font-size: 15px;
    color: #000000;
    background-color: #F8C629;
    border-radius: 6px;
    border: 2px solid #000000;
  }
    .btnSiguiente{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 15px;
    color: #000000;
    background-color: #F8C629;
    border-radius: 6px;
    border: 2px solid #000000;
  }
    .btnBuscar{
    font-weight: 600;
    font-size: 15px;
    color: #000000;
    background-color: #F8C629;
    border-radius: 6px;
    border: 2px solid #000000;
  }
  .textNC{
    background-color: #A9EE9C;
    border-radius: 6px;
    border: 2px solid #69D17B;
  }
   .textT{
    background-color: #A9EE9C;
    border-radius: 6px;
    border: 2px solid #69D17B;
  }
   .textD{
    background-color: #A9EE9C;
    border-radius: 6px;
    border: 2px solid #69D17B;
  }
   .textR{
    background-color: #A9EE9C;
    border-radius: 6px;
    border: 2px solid #69D17B;
  }
</style>
</div>
<br><br><br>
</form>

<?php 
if(isset($_POST['insertar']))
{
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$direccion=$_POST['txtDireccion'];
$referencias=$_POST['txtReferencias'];
	mysqli_query($conexion,"insert into cliente (nombre, telefono, Direccion, Referencias)values ('$nombre','$telefono','$direccion','$referencias')")or die(mysql_error());
 
  echo ("Dato Guardado");
		}
?>


<?php
if(isset($_POST['buscar']))
{
$nombre = $_POST["nombre"];
$query = mysqli_query($conexion,"SELECT * FROM cliente WHERE nombre = '$nombre'");
$comprobacion = mysqli_num_rows($query);

if($comprobacion == 1){
  echo ("Este Usuario ya EXISTE");

}else if ($comprobacion == 0){
  echo ("Dato Guardado");
}
}

?>

</body>

<footer>
<img src="" width="100%">
</footer>
</html>