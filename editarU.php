<?php  
include("conexion.php");
$id=$_GET['id'];
$consulta = mysqli_query($conexion,"SELECT * FROM usuarios WHERE Id='$id'")or die(mysql_error());
while ($fila=mysqli_fetch_array($consulta)) {
?>
<head>
	<link rel="stylesheet" type="text/css" href="estilosUsuarios.css">
	<title>TABLA USUARIOS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #feffff;"> 
<div>	
	<form>
<div id="header">
<ul class="nav">
	<table>
		<thead>
			<tr>
				<th>Usuario</th>
		        <th>Clave</th>
		        <th>Tipo</th>
		        <li><a href="indexU.php">Regresar</a></li>
				<li><input type="submit" name="" value="Actualizar"></li>
			</tr>
			<tr>
			<input type="hidden" name="txtid" value="<?php echo $fila['id'] ?>">
			<th><input type="text" name="txtusuario" value="<?php echo $fila['usuario'] ?>"></th>
		    <th><input type="text" name="txtclave" value="<?php echo $fila['clave'] ?>"><br/></th>
			<th><input type="text" name="txttipo" value="<?php echo $fila['tipo'] ?>"></th>
			</tr>
		</thead>
		<tbody>

		</tbody>
	</table>
	</ul>
</div>
	</form>		
</div>	
	
<style type="text/css" href="estilosUsuarios.css">
	@charset "utf-8";
/* CSS Document */
.nav{
width: 185%;/*tamaño de la tabla general*/
height: 400px;/*aumentar tamaño de abajo*/
margin-right: 220%;
margin-left: 0%;
border-radius: 20px;
background-color: #dea845;
opacity: 0.9;
}

table{
	border-collapse: collapse;
	font-size: 12pt;
	font-family: 'arial';
	width: 100%;
}
table th{
	text-align: left;
	padding: 5px;
	background: #d46e26;
	color: #fff;
}

table tr:nth-child(odd){
	background: #fff;
}

table td{
	padding: 10px;
}

*{
padding: 0px;
margin: 0px;
}

#header{
margin: 30px;/*mover a la izquierda*/
width: 500px;
font-family:Arial, Helvetica, sans-serif;
}

ul, ol{
list-style: none;
}

.nav li a {
background-color: #dea845;
color: #000000;
text-decoration: none;	
padding: 9px 20px;
display: block;
}

.nav li a:hover{
background-color: #fff;	
}

.nav > li {
float: left;	
}

.nav li ul{
display: none;
position: absolute;	
min-width: 140px;
}

.nav li:hover > ul{
display: block;
}

header nav ul{
	list-style: none;
	overflow: hidden; 	
}

header nav ul li{
	float: left;
}
</style>	
</body>
<br>
<br>
<br>
<br>
<?php } ?>
</div>	
<?php  
include("conexion.php");
$idp=$_GET['txtid'];
$usuario=$_GET['txtusuario'];
$clave=$_GET['txtclave'];
$tipo=$_GET['txttipo'];
if ($usaurio!=null||$clave!=null||$tipo!=null) {
mysqli_query($conexion,"update usuarios set Usuario='$usuario',clave='$clave',tipo='$tipo' where id='$idp'");
	if ($usuario=1) {
		header("location:indexU.php");
	}
}
?>