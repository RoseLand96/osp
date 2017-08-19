<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('connexion.php');
$nombre=$_POST['txtnombre'];
$appat=$_POST['txtappat'];
$apmat=$_POST['txtapmat'];
$usuario=$_POST['txtusuario'];
$contrasena=$_POST['txtpass'];
$query="INSERT into administrador (nombre_admin,apellido_pat_admin,apellido_mat_admin,usuario,password) values('$nombre','$appat','$apmat','$usuario','$contrasena')";
$resultado=$conexion->query($query);
if($resultado)
{
	echo "si se inserto";
	header("Location: listar_admin.php");
}
else
{
	echo"<script>alert('no se agregó')</script>";
	echo "<script language=Javascript> window.location =\"pages/listar_admin.php\"; </script>";
}

?>
