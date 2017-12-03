<html>

<head>
<title></title>
</head>

<body>

<?php


$conexion=mysqli_connect("localhost","root","","login");
$resultado=mysqli_query($conexion,"SELECT * FROM usuarios where sesion='Iniciada'");
while($fila=mysqli_fetch_array($resultado)){
$id_obt=$fila[0];
$nombre_obt=$fila[1];
$apellido_obt=$fila[2];
$direccion_obt=$fila[3];
$estado_obt=$fila[8];
}



//echo "Formulario a llenar<br>";

//Inicio de formulario-------------------------------------------------------->
echo "<form action='verificarFormulario.php' method='POST'>";
echo "<table border=2>";
//Titulo de la tabla
echo "<caption><strong>FORMULARIO</strong><br><br></caption>";
//Fila 1 -------------------------------------------->
echo "<tr>";
echo "<th>ID</th>";
echo "<td><input type='Text' name='CID' value='$id_obt' readonly ></td>";
echo "</tr>";
//Fila 2----------------------------------------------->
echo "<tr>";
echo "<th>Nombre</th>";
echo "<td><input type='Text' name='CNombre' value='$nombre_obt' readonly></td>";
echo "</tr>";
// Fila 3---------------------------------------------->
echo "<tr>";
echo "<th>Apellido</th>";
echo "<td><input type='Text' name='CApellido' value='$apellido_obt' readonly></td>";
echo "</tr>";
//Fila 4----------------------------------------------->
echo "<tr>";
echo "<th>Dirección</th>";
echo "<td><input type='Text' name='CDireccion' value='$direccion_obt' readonly></td>";
echo "</tr>";
//Fila 5----------------------------------------------->
echo "<tr>";
echo "<th>Carrera</th>";
echo "<td><input type='Text' name ='CCarrera' ></td>";
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

//Fila 8----------------------------------------------->
echo "<tr>";
echo "<th>Estado</th>";
echo "<td><input type='Text' name ='CEstado' value='$estado_obt' readonly></td>";
echo "</tr>";


//Fila 9----------------------------------------------->
echo "<tr>";
echo "<th colspan='2'><input type='Submit' name='BEnviar' value='Enviar '><input type='Reset' name='BReset' value='Reset'></th>";
echo "</tr>";



//Fin del formulario----------------------------------------------------------->



?>

</body>

</html>
