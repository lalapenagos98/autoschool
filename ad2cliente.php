<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->



<?php 						


$id     = $_POST['id'];
$nombre = $_POST['nombre'];
$tipo = $_POST['apellido'];
$marca = $_POST['direccion'];
$valorv = $_POST['telefono'];
$valorc = $_POST['email'];
$valorc = $_POST['pais'];
$valorc = $_POST['estado'];
$valorc = $_POST['tipo'];
$valorc = $_POST['usuario'];
$valorc = $_POST['contraseña'];


	echo $nombre;



include("conexion.php")	;
 
$sql = "INSERT INTO clientes VALUES ('$id', '$nombre', '$apellido', '$direccion', '$telefono', '$email', '$pais', '$tipo', '$usuario', '$contraseña', '$estado')" ;

mysqli_query($con,$sql);


	echo " sus datos han sido insertados!!"


?>
<br>
<br>

<div class="back">
						<a href="signin.html">Volver a ingreso</a>
				</div>