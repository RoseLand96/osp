<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('connexion.php');
$id=$_GET['id_admin'];
$nombre=$_POST['txtnombre'];
$appat=$_POST['txtappat'];
$apmat=$_POST['txtapmat'];
$usuario=$_POST['txtusuario'];
$contrasena=$_POST['txtpass'];
$query="UPDATE administrador SET nombre_admin='$nombre',apellido_pat_admin='$appat',apellido_mat_admin='$apmat',usuario='$usuario',password='$contrasena' WHERE id_admin='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: listar_admin.php");
}
else
{
	echo "no se modifico";
}

?>