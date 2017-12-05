<html>

<head>
<title></title>
</head>

<body>

<?php

$conexion=mysqli_connect("localhost","root","","login");

$usuario=mysqli_query($conexion,"select * from usuarios where sesion='Iniciada'");

$filaUsuario=mysqli_fetch_array($usuario);

$resultado=mysqli_query($conexion,"select * from bitacora");

echo "<center>BIT&Aacute;CORA<br><br></center>";

echo "<form action='paginaAdmin.php' method='POST'>";

echo "<caption><center><strong>Tabla formularios</strong><br></center></caption>";

echo "<table align=center border=2>";

echo "<tr>
		<th>Id</th><th>Usuario</th><th>Tipo</th><th>Fecha y hora</th><th>Acci&oacute;n</th><th>Usuario afectado</th>
      </tr>";

while($fila=mysqli_fetch_array($resultado)) {

	echo "<tr>
			<th>$fila[0]</th><th>$fila[1]</th><th>$fila[2]</th><th>$fila[3]</th><th>$fila[4]</th><th>$fila[5]</th>
		  </tr>";

}

echo "</table>";

echo "<center>
		<br><input type='submit' name='regresar' value='Regresar'>
	  </center>";

echo "</form>";

?>

</body>

</html>
