<html>

<head>
<title></title>
</head>

<body>

<?php

$conexion=mysqli_connect("localhost","root","","login");

$resultado=mysqli_query($conexion,"select * from usuarios where sesion=\"Iniciada\"");

$fila=mysqli_fetch_array($resultado);

echo "<form action=\"accionAlumno.php\" method=\"post\">";

if($fila[8]=="Enviada") echo "Solicitud enviada.";

else if($fila[8]=="Aceptada") echo "Solicitud aceptada";

else if($fila[8]=="Rechazada") echo "Solicitud rechazada; serás asignado a un extraescolar que se adapte mejor a tus habilidades.";

echo "<br><input type=\"submit\" name=\"datosPersonales\" value=\"Modificar datos personales\"><br>";

echo "<input type=\"submit\" name=\"salir\" value=\"Salir\"><br>";

echo "</form>";
	
?>

</body>

</html>