<html>

<head>
<title></title>
</head>

<body>

<?php

if(isset($_POST["profesores"])) header("Location: profesores.php");

else if(isset($_POST["bitacora"])) header("Location: bitacora.php");

else header("Location: login.php");

?>

</body>

</html>
