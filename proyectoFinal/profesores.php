<html>

<head>
<title></title>
</head>

<body>

<?php

$conexion=mysqli_connect("localhost","root","","login");

$usuario=mysqli_query($conexion,"select * from usuarios where sesion='Iniciada'");

$filaUsuario=mysqli_fetch_array($usuario);

$resultado=mysqli_query($conexion,"select * from usuarios where tipo='Maestro'");

echo "<center>PROFESORES ACTUALES<br><br></center>";

echo "<form action='opcionProfesores.php' method='POST'>";

echo "<table align=center border=2>";

echo "<tr>
		<th>Nombre</th><th>Apellido</th><th>Direcci&oacute;n</th><th>Extraescolar</th>
      </tr>";

while($fila=mysqli_fetch_array($resultado)) {

	echo "<tr>
			<th>$fila[1]</th><th>$fila[2]</th><th>$fila[3]</th><th>$fila[9]</th>
		  </tr>";

}

echo "</table>";

echo "<center>

		<br><input type='submit' name='regresar' value='Regresar'><br>
		<br><input type='submit' name='ingresar' value='Añadir nuevo'><br><br>
		
		<table align=center>
			<tr>
				<td><input type='submit' name='modificar' value='Modificar a:'></td><td rowspan=2><input type='text' name='campo' value='' size='16' placeholder='Nombre del profesor...'>
			</tr>
			<tr>
				<td><input type='submit' name='eliminar' value='Eliminar a:'></td>
			</tr>
		</table>
		
	  </center>";

echo "</form>";

?>

</body>

</html>
