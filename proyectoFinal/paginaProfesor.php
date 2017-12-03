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

echo "<center>$filaUsuario[1] EXTRAESCOLAR ENCARGADO $filaUsuario[9]<br><br></center>";

echo "<form action='actualizarAlumnos' method='POST'>";

echo "<caption><center><strong>Alumnos</strong><br></center></caption>";

echo "<table align=center border=2>";

echo "<tr>
		<th>Id</th><th>Nombre</th><th>Apellido</th><th>Dirección</th><th>Carrera</th><th>Gustos</th><th>Estado</th>
      </tr>";

$f="0";

while($fila=mysqli_fetch_array($resultado)) {

	echo "<tr>
			<th>$fila[0]</th><th>$fila[1]</th><th>$fila[2]</th><th>$fila[3]</th><th>$fila[4]</th><th>$fila[6]</th>
			<th>
			<select name='estado$f'>
			<option value='Enviada'>Enviada</option>
			<option value='Aceptada'>Aceptada</option>
			<option value='Rechazada'>Rechazada</option>
			<option value='Borrar'>Borrar</option>
			<option selected>$fila[7]</option>
			</select>
			</th>
		  </tr>";

    $f=$f+1;

}

echo "</table>";

echo "<center>
		<input type='submit' name='actualizar' value='Actualizar'>
		<input type='submit' name='salir' value='Salir'>
	  </center>";

echo "</form>";

?>

</body>

</html>
