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

	$f="0";

	while($fila=mysqli_fetch_array($resultado)) {

		$estado=$_POST["estado$f"];

		if($estado=="Borrar") {

			mysqli_query($conexion,"delete from formularios where id=$fila[0]");

			mysqli_query($conexion,"update usuarios set estado='Ninguna', extraescolar='Ninguno' where id=$fila[0]");



		} else {

			mysqli_query($conexion,"update formularios set estado='$estado' where id=$fila[0]");

			mysqli_query($conexion,"update usuarios set estado='$estado' where id=$fila[0]");
     if($estado=='Aceptada') mysqli_query($conexion,"UPDATE usuarios SET extraescolar='$fila[5]' where id=$fila[0]");
		 else mysqli_query($conexion,"UPDATE usuarios SET extraescolar='Ninguno' where id=$fila[0]");


		}

		$f=$f+1;

	}

	header("Location: paginaProfesor.php");

}

?>

</body>

</html>
