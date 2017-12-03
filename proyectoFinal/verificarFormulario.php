<html>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","login");

$id_nuevo=$_POST["CID"];
$nombre_nuevo=$_POST["CNombre"];
$apellido_nuevo=$_POST["CApellido"];
$direccion_nuevo=$_POST["CDireccion"];
$carrera_nuevo=$_POST["CCarrera"];
$extraEscolar_nuevo=$_POST["CExtra"];
$gustos_nuevo=$_POST["CGustos"];
$estado_nuevo="Enviada";

if(isset($_POST["BEnviar"])){
if(empty($carrera_nuevo)||empty($extraEscolar_nuevo)||empty($gustos_nuevo)){
header("Location: formulario.php");

}
  else{
  $resultado=mysqli_query($conexion,"INSERT INTO formularios(id,nombre,apellido,direccion,carrera,extraescolar,gustos,estado) values($id_nuevo,'$nombre_nuevo','$apellido_nuevo','$direccion_nuevo','$carrera_nuevo','$extraEscolar_nuevo','$gustos_nuevo','$estado_nuevo')");
  if(!$resultado){
 echo "Error al enviar los datos".mysqli_error($conex);

  }

  else{
mysqli_query($conexion,"update usuarios set estado=\"Enviada\" where sesion='Iniciada'");
header("Location: estadoSolicitud.php");
}

}

}

?>

</body>
</html>
