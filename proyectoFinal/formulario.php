<html>

<head>
<title></title>
</head>

<body>

<?php

$conexion=mysqli_connect("localhost","root","","login");

$resultado=mysqli_query($conexion,"select * from usuarios where sesion=\"Iniciada\"");

$fila=mysqli_fetch_array($resultado);

/*echo "<caption><strong>FORMULARIO</strong><br><br></caption>";

echo "<form action=\"crearFormulario.php\" method=\"post\">";

echo "<table>";


echo "<tr>
		<th>USUARIO</th>
	    <td><input type=\"text\" name=\"user\" value=\"\"></td>
      </tr>";
 
echo "<tr>
		<th>CONTRASENIA</th>
		<td><input type=\"password\" name=\"password\" value=\"\"></td>
      </tr>";

echo "<tr>
		<th></th>
        <td><input type=\"submit\" name=\"ingresar\" value=\"Sign in\"></td>
      </tr>";
 
echo "</table>";

echo "</form>";*/

echo "Formulario a llenar";

mysqli_query($conexion,"update usuarios set estado=\"Enviada\" where id=$fila[0]");
	
?>

</body>

</html>