<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>TABLA USUARIOS</title>
	<link rel="stylesheet" type="text/css" href="estilosUsuarios.css">
</head>
<body style="background-color: #feffff;">
<div>	
<div id="header">
<ul class="nav">
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Usuario</th>
		        <th>Clave</th>
		        <th>Tipo</th>
		        <th>Editar y Eliminar</th>
		        <li><a href="agregarU.php">Nuevo</a>
		</thead>
		<tbody>
<?php 
$consulta = mysqli_query($conexion,"SELECT * FROM usuarios")or die(mysql_error());
while ($registro=mysqli_fetch_array($consulta)) {
?>
			<tr>
			 <td><?php echo $registro['id'] ?></td>	
	         <td><?php echo $registro['usuario'] ?></td>
		     <td><?php echo $registro['clave'] ?></td>
		     <td><?php echo $registro['tipo'] ?></td>
		        <td>
		        	<a href="editarU.php?id=<?php echo $registro['id'] ?>">Editar</a>
		        	<a href="eliminarU.php?id=<?php echo $registro['id'] ?>">Eliminar</a>
		        </td>
			</tr>
	<?php 
	} 
	?>
		</tbody>
	</table>
	</ul>
</div>
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
</html>