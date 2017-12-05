<html>

<head>
<title></title>
</head>

<body>

<?php

	echo "NUEVO PROFESOR:";

	echo "<form action='verificarIngresar' method='POST'>";
	
	echo "Nombre: <input type='text' name='nombre'><br>";
	echo "Apellido: <input type='text' name='apellido'><br>";
	echo "Direccion: <input type='text' name='direccion'><br>";
	echo "Extraescolar: <input type='text' name='extraescolar'><br>";
	
	echo "<input type='submit' name='ingresar' value='Añadir'>";
	echo "<input type='reset' name='reset' value='Reset'>";
	
	echo "</form>";

?>

</body>

</html>
