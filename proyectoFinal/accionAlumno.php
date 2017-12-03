<html>

<head>
<title></title>
</head>

<body>

<?php

$conexion=mysqli_connect("localhost","root","","login");

$resultado=mysqli_query($conexion,"select * from usuarios where sesion='Iniciada'");

while($fila=mysqli_fetch_array($resultado)){
$Nombre_obtenido=$fila[1];
$Apellidos_obtenido=$fila[2];
$Direccion_obtenido=$fila[3];
$Contraseña_obtenido=$fila[5];
}

if(isset($_POST["salir"])) header("Location: login.php");

else {

	echo "Modificando datos personales.";

	//Inicio de formulario-------------------------------------------------------->
	echo "<form action='verificarAccionAlumno.php' method='POST'>";
	echo "<table border=2>";
	//Titulo de la tabla
	echo "<caption><strong>FORMULARIO</strong><br><br></caption>";
	//Fila 1--------------------------------------------------------------------->
	echo "<tr>";
	echo "<td>Nombre</td>";
	echo "<th><input type='Text' name='CNom' value='$Nombre_obtenido' ></th>";
	echo "</tr>";
	//Fila 2--------------------------------------------------------------------->
	echo "<tr>";
	echo "<td>Apellidos</td>";
	echo "<th><input type='Text' name='CApe' value='$Apellidos_obtenido' ></th>";
	echo "</tr>";
	//Fila 3--------------------------------------------------------------------->
	echo "<tr>";
	echo "<td>Direccion</td>";
	echo "<th><input type='Text' name='CDir' value='$Direccion_obtenido' ></th>";
	echo "</tr>";
	//Fila 4--------------------------------------------------------------------->
	echo "<tr>";
	echo "<td>Contraseña</td>";
	echo "<th><input type='Text' name='CPass' value='$Contraseña_obtenido' ></th>";
	echo "</tr>";
	//Fila 5--------------------------------------------------------------------->
	echo "<tr>";
	echo "<th colspan='2'><input type='Submit' name='BActualizar' value='Enviar '><input type='Reset' name='BReset' value='Reset'></th>";
	echo "</tr>";

}

?>

</body>

</html>
