<html>
<body>
<?php

$conexion=mysqli_connect("localhost","root","","login");

$usuario=mysqli_query($conexion,"select * from usuarios where sesion='Iniciada'");

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$direccion=$_POST["direccion"];
$extraescolar=$_POST["extraescolar"];

if(empty($nombre) || empty($apellido) || empty($direccion) || empty($extraescolar)) header("Location: ingresar.php");

else {
	
	mysqli_query($conexion,"insert into profesores values ('$nombre','$apellido','$direccion','$extraescolar','No')");
	
	mysqli_query($conexion,"insert into usuarios values (null,'$nombre','$apellido','$direccion','$nombre',123,'Maestro','No iniciada','Ninguna','$extraescolar')");
	
	header("Location: profesores.php");
	
}

?>

</body>
</html>
