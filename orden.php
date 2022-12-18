<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Orden Cliente</title>
	<img src="banner1.png" width="100%">
</head>

<body style="background-color: #feffff;">

<h1>Datos de la orden</h1>
<form action="" method="post">
<div class="columna1">
<div class="contenedor3">
	<table>
		<thead>
			<tr>
				<th><h3>Orden</h3></th>
            </tr>
			<tr>
			<th><input type="text" name="txtorden" size="40" class="txtO"></th>	
			</tr>
		</thead>
	</table>
</div>
</div>

<div class="columna2">
<div class="contenedor">
	<table>
		<thead>
			<tr>
			<th><h3>Precio total</h3></th>
			<th><input type="text" name="txtprecio" size="40" class="txtP"></th>
            </tr>
			<tr>
			<th><h3>Folio</h3></th>
			<th><input type="text" name="txtfolio" size="40" class="txtF"></th>	
			</tr>
		</thead>
	</table>
</div>
</div>

<div class="contenedor2">
	<table>
		<thead>
			<tr>
			<th><button type="submit" name="guardar" value="Agregar" class="btnAgregar">Guardar</button></th>
			<th><a href="menu.html" class="btnListo">Listo</button></a>
            </tr>
		</thead>
	</table>
</div>
<style type="text/css" href="css/style.css">
    .btnListo{
    text-decoration: none;
    font-weight: 600;
    font-size: 25px;
    color: #000000;
    background-color: #F8C629;
    border-radius: 6px;
    border: 2px solid #000000;
  }
    .btnAgregar{
    font-weight: 600;
    font-size: 25px;
    color: #000000;
    background-color: #F8C629;
    border-radius: 6px;
    border: 2px solid #000000;
  }
  .txtO{
  	font-size: 15px;
    background-color: #A9EE9C;
    border-radius: 6px;
    border: 2px solid #69D17B;
  }
   .txtP{
   	font-size: 15px;
    background-color: #A9EE9C;
    border-radius: 6px;
    border: 2px solid #69D17B;
  }
   .txtF{
   	font-size: 15px;
    background-color: #A9EE9C;
    border-radius: 6px;
    border: 2px solid #69D17B;
  }
  .contenedor{
width: 100px;
height: 140px;
margin-right: auto;
margin-left: auto;
border-radius: 20px;
background-color:  #20FF8000;
opacity: 0.9;
}

.contenedor2{
width: 150px;
margin-right: auto;
margin-left: 680px;
border-radius: 20px;
background-color:  #20FF8000;
opacity: 0.9;
}



.columna1{
position:absolute;
top:170px;
width:450px;
margin-top:100px;
background-color:  #20FF8000;
}

.columna2{
margin-left:300px;
margin-right:300px;
margin-top:100px;
background-color:  #20FF8000;
}



.separacionPie{
	height: 50px;
}

</style>
</form>
<?php 
if(isset($_POST['guardar']))
{
$orden=$_POST['txtorden'];
$precio=$_POST['txtprecio'];
$folio=$_POST['txtfolio'];
	mysqli_query($conexion,"insert into orden (Orden, Precio, Folio)values ('$orden','$precio','$folio')")or die(mysql_error());
	echo "<h2>Orden Pedida, espera a que te llegue a tu casa</h2>";
		}
?>
</body>


<footer>
<div class="separacionPie"></div>
<img src="" width="100%">
</footer>
</html>