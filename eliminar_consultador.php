<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('connexion.php');
$id=$_REQUEST['id_cons'];

$query="DELETE FROM consultador_rep WHERE id_cons='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: listar_consultador.php");
	//header("Location: tabla_mos.php");
}
else
{
	echo "no se elemino";
}

?>