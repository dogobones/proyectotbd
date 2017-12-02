<html>

<head>
<title>Login</title>
</head>

<body>

<?php

echo "<caption><strong>LOGIN SCE</strong><br><br></caption>";

echo "<form action=\"verificarUsuario.php\" method=\"post\">";

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

echo "</form>";

?>

</body>

</html> 