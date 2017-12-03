<html>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","login");
$nombre_nuevo=$_POST["CNom"];
$apellido_nuevo=$_POST["CApe"];
$direccion_nuevo=$_POST["CDir"];
$password_nuevo=$_POST["CPass"];

if(isset($_POST["BActualizar"])){
  $resultado=mysqli_query($conexion,"UPDATE usuarios SET nombre='$nombre_nuevo',  apellido='$apellido_nuevo',  direccion='$direccion_nuevo',  contra='$password_nuevo' where sesion='Iniciada' ");

  if(!$resultado){
 echo "Error al actualizar los datos".mysqli_error($conex);

  }else{

header("Location: estadoSolicitud.php");
}

}

?>
</body>
</html>
