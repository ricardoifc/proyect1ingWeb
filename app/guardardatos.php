<?php

extract($_POST);
$clave=md5($clave);

include("../dll/config.php");
include("../dll/class_mysqli_7.php");

$miconexion = new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$ressql=$miconexion->consulta("insert into usuarios values('','$nombres','$correo','$usuario','$clave','$rol')");
if (!$ressql) {
	echo '<script>alert("Error de regsitro...");</script>';
	echo "<script>location.href='registro.php'</script>";
}else{
	echo '<script>alert("Datos guardados correctamente...");</script>';
	echo "<script>location.href='../'</script>";
}


?>