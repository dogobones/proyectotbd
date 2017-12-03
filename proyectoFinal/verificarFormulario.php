<html>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","login");
$resultado=mysqli_query($conexion,"SELECT * FROM usuarios");
while($fila=mysqli_fetch_array($resultado)){
if($fila[7]=='Iniciada'){



  
}



}

?>

</body>
</html>
