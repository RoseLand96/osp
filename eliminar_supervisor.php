<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('connexion.php');
$id=$_REQUEST['id_supervisor'];

$query="DELETE FROM supervisor WHERE id_supervisor='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: listar_supervisor.php");
	//header("Location: tabla_mos.php");
}
else
{
	echo "no se elemino";
}

?>