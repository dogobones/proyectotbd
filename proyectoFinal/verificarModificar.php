<html>
<body>
<?php

$conexion=mysqli_connect("localhost","root","","login");

$usuario=mysqli_query($conexion,"select * from usuarios where sesion='Iniciada'");

$resultado=mysqli_query($conexion,"select * from profesores where seleccionado='Si'");

$aux=mysqli_fetch_array($resultado);

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$direccion=$_POST["direccion"];

if(empty($nombre) || empty($apellido) || empty($direccion)) header("Location: modificar.php");

else {
	
	mysqli_query($conexion,"update profesores set nombre='$nombre', apellido='$apellido', direccion='$direccion' where seleccionado='Si'");
	
	mysqli_query($conexion,"update usuarios set nombre='$nombre', apellido='$apellido', direccion='$direccion' where nombre='$aux[0]'");
	
	header("Location: profesores.php");
	
}

?>

</body>
</html>
