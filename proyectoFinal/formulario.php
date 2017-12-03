<html>

<head>
<title></title>
</head>

<body>

<?php

$conexion=mysqli_connect("localhost","root","","login");

$resultado=mysqli_query($conexion,"select * from usuarios where sesion=\"Iniciada\"");

$fila=mysqli_fetch_array($resultado);
//echo "Formulario a llenar<br>";

//Inicio de formulario-------------------------------------------------------->
echo "<form >";
echo "<table border=2>";
//Titulo de la tabla
echo "<caption><strong>FORMULARIO</strong><br><br></caption>";
//Fila 1 -------------------------------------------->
echo "<tr>";
echo "<th>ID</th>";
echo "<td><input type='Text' name='CID'></td>";
echo "</tr>";
//Fila 2----------------------------------------------->
echo "<tr>";
echo "<th>Nombre</th>";
echo "<td><input type='Text' name='CNombre'></td>";
echo "</tr>";
// Fila 3---------------------------------------------->
echo "<tr>";
echo "<th>Apellido</th>";
echo "<td><input type='Text' name='CApellido'></td>";
echo "</tr>";
//Fila 4----------------------------------------------->
echo "<tr>";
echo "<th>Dirección</th>";
echo "<td><input type='Text' name='CDireccion'></td>";
echo "</tr>";
//Fila 5----------------------------------------------->
echo "<tr>";
echo "<th>Carrera</th>";
echo "<td><input type='Text' name ='CCarrera'></td>";
echo "</tr>";
//Fila 6----------------------------------------------->
echo "<tr>";
echo "<th>ExtraEscolar</th>";
echo "<td><input type='Text' name ='CExtra'></td>";
echo "</tr>";
//Fila 7----------------------------------------------->
echo "<tr>";
echo "<th>Gustos</th>";
echo "<td><input type='Text' name ='CGustos'></td>";
echo "</tr>";


<<<<<<< HEAD
echo "<form action=\"verificarFormulario.php\" method=\"post\">";
=======
>>>>>>> 94e1ed6cc2812e8f6da1f636652ba095975660e0


<<<<<<< HEAD
echo "<tr>
		<th>USUARIO</th>
	    <td><input type=\"text\" name=\"user\" value=\"\"></td>
      </tr>";
 
echo "<tr>
		<th>CONTRASENIA</th>
		<td><input type=\"password\" name=\"password\" value=\"\"></td>
      </tr>";
=======
echo "</table>";
echo "</form>";

>>>>>>> 94e1ed6cc2812e8f6da1f636652ba095975660e0




//Fin del formulario----------------------------------------------------------->

mysqli_query($conexion,"update usuarios set estado=\"Enviada\" where id=$fila[0]");

?>

</body>

</html>
