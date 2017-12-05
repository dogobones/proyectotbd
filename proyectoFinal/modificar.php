<html>

<head>
<title></title>
</head>

<body>

<?php

	$conexion=mysqli_connect("localhost","root","","login");

	$usuario=mysqli_query($conexion,"select * from usuarios where sesion='Iniciada'");

	echo "MODIFICAR PROFESOR:";

	echo "<form action='verificarModificar' method='POST'>";
	
	$resultado=mysqli_query($conexion,"select * from profesores where seleccionado='Si'");
	
	$fila=mysqli_fetch_array($resultado);
	
	echo "Nombre: <input type='text' name='nombre' value='$fila[0]'><br>";
	echo "Apellido: <input type='text' name='apellido' value='$fila[1]'><br>";
	echo "Direccion: <input type='text' name='direccion' value='$fila[2]'><br>";
	echo "Extraescolar: <input type='text' name='extraescolar' value='$fila[3]' readonly><br>";
	
	echo "<input type='submit' name='modificar' value='Modificar'>";
	echo "<input type='reset' name='reset' value='Reset'>";
	
	echo "</form>";

?>

</body>

</html>
