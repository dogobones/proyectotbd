<html>

<head>
<title></title>
</head>

<body>

<?php

$conexion=mysqli_connect("localhost","root","","login");

$usuario=mysqli_query($conexion,"select * from usuarios where sesion='Iniciada'");

$filaUsuario=mysqli_fetch_array($usuario);

$resultado=mysqli_query($conexion,"select * from formularios where extraescolar='$filaUsuario[9]'");

if(isset($_POST["salir"])) header("Location: login.php");

else {

	$f=0;

	while($fila=mysqli_fetch_array($resultado)) {

		mysqli_query($conexion,"update formularios set estado='$_POST('estado$f')' where id=$fila[0]");

		$f++;

	}

	header("Location: paginaProfesor.php");

}

?>

</body>

</html>
