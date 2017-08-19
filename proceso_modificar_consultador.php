<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('connexion.php');
$id=$_GET['id_cons'];
$usuario=$_POST['txtusuario'];
$contrasena=$_POST['txtpass'];
$query="UPDATE consultador_rep SET usuario='$usuario',password='$contrasena' WHERE id_cons='$id'";
$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: listar_consultador.php");
}
else
{
	echo "no se modifico";
}

?>