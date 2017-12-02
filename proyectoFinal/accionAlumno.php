<html>

<head>
<title></title>
</head>

<body>

<?php

$conexion=mysqli_connect("localhost","root","","login");

$resultado=mysqli_query($conexion,"select * from usuarios where sesion=\"Iniciada\"");

$fila=mysqli_fetch_array($resultado);

if(isset($_POST["salir"])) header("Location: login.php");

else {
	
	echo "Modificando datos personales.";
	
	//TODO EL FORM DEL FORMULARIO PARA MODIFICAR LOS DATOS PERSONAELES DEL USUARIO EN SESIÓN.
	
}
	
?>

</body>

</html>