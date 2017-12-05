<html>

<head>
<title></title>
</head>

<body>

<?php

$conexion=mysqli_connect("localhost","root","","login");

$usuario=mysqli_query($conexion,"select * from usuarios where sesion='Iniciada'");

$borrar=$_POST["campo"];

if(isset($_POST["regresar"])) header("Location: paginaAdmin.php");

else if(isset($_POST["ingresar"])) header("Location: ingresar.php");

else if(isset($_POST["modificar"])) {
	
	$entrar=false;
	
	$resultado=mysqli_query($conexion,"select * from profesores");
	
	mysqli_query($conexion,"update profesores set seleccionado='No'");
	
	while($fila=mysqli_fetch_array($resultado)) {
		
		if($fila[0]=="$borrar") {
			
			$entrar=true;
			
			mysqli_query($conexion,"update profesores set seleccionado='Si' where nombre='$borrar'");
			
		}
		
	}
	
	if($entrar) header("Location: modificar.php");
	
	else header("Location: profesores.php");
	
}

else if(isset($_POST["eliminar"])) {
	
	mysqli_query($conexion,"delete from profesores where nombre='$borrar'");
	
	$fila=mysqli_query($conexion,"select extraescolar from usuarios where nombre='$borrar'");
	
	$extraescolarBorrado=mysqli_fetch_array($fila);
	
	mysqli_query($conexion,"delete from usuarios where nombre='$borrar'");
	
	$fila=mysqli_query($conexion,"select nombre from formularios where extraescolar='$extraescolarBorrado[0]'");
	
	$nombreQuitarSolicitud=mysqli_fetch_array($fila);
	
	mysqli_query($conexion,"delete from formularios where extraescolar='$extraescolarBorrado[0]'");
	
	mysqli_query($conexion,"update usuarios set extraescolar='Ninguno', estado='Ninguna' where nombre='$nombreQuitarSolicitud[0]'");
	
	header("Location: profesores.php");
	
}

?>

</body>

</html>
