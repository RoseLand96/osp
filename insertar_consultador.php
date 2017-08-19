<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('connexion.php');
$usuario=$_POST['txtusuario'];
$contrasena=$_POST['txtpass'];
$query="INSERT into consultador_rep (usuario,password) values('$usuario','$contrasena')";
$resultado=$conexion->query($query);
if($resultado)
{
	
	header("Location: listar_consultador.php");
}
else
{
	echo"<script>alert('no se inserto')</script>";
	echo "<script language=Javascript> window.location =\"pages/listar_consultador.php\"; </script>";
}

?>
