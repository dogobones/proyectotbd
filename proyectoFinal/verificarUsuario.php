<html>

<head>
<title></title>
</head>

<body>

<?php

$conexion=mysqli_connect("localhost","root","","login");

$usuario=$_POST["user"];
$contrasenia=$_POST["password"];

$entrar=false;

$resultado=mysqli_query($conexion,"select * from usuarios");

while($fila=mysqli_fetch_array($resultado)) {
	
	if($fila[4]==$usuario && $fila[5]==$contrasenia) {
		
		$entrar=true;
		
		echo "<script> alert('Sesion correcta'); </script>";
		echo "<script> windows.location='login.php' </script>";
		
		mysqli_query($conexion,"update usuarios set sesion=\"No iniciada\"");
		
		mysqli_query($conexion,"update usuarios set sesion=\"Iniciada\" where id=$fila[0]");
		
		if($fila[6]=="Alumno" && $fila[8]=="Ninguna") header("Location: formulario.php");
		
		else if($fila[6]=="Alumno") header("Location: estadoSolicitud.php");
		
		else if ($fila[6]=="Admin") header("Location: paginaAdmin.php");
		
		else header("Location: paginaProfesor.php");
		
	}
	
}

if(!$entrar) header("Location: login.php");
	
?>

</body>

</html>