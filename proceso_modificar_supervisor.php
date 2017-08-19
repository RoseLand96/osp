<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('connexion.php');
$id=$_GET['numero_identif'];
$nombre=$_POST['txtnombre'];
$appat=$_POST['txtappat'];
$apmat=$_POST['txtapmat'];
$contrasena=$_POST['txtpass'];
$query="UPDATE supervisor SET nombre_sup='$nombre',apellido_pat='$appat',apellido_mat='$apmat',password='$contrasena' WHERE numero_identif='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: listar_supervisor.php");
}
else
{
	echo "no se modifico";
}

?>