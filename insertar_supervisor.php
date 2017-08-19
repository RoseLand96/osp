<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('connexion.php');
$nombre=$_POST['txtnombre'];
$appat=$_POST['txtappat'];
$apmat=$_POST['txtapmat'];

$contrasena=$_POST['txtpass'];
$query="INSERT into supervisor (nombre_sup,apellido_pat,apellido_mat,password) values('$nombre','$appat','$apmat','$contrasena')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
	header("Location: listar_supervisor.php");
}
else
{
	echo"no se inserto";
}

?>
