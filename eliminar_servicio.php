<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('connexion.php');
$id=$_REQUEST['id_servicio'];

$query="DELETE FROM servicio where id_servicio='$id'";


$resultado=$conexion->query($query);
if($resultado)
{
	$query2="DELETE FROM turnos12_lunes where id_servicio='$id'";
	$resultado2=$conexion->query($query2);
	$query3="DELETE FROM turnos12_martes where id_servicio='$id'";
	$resultado3=$conexion->query($query3);
	$query4="DELETE FROM turnos12_miercoles where id_servicio='$id'";
	$resultado4=$conexion->query($query4);
	$query5="DELETE FROM turnos12_jueves where id_servicio='$id'";
	$resultado5=$conexion->query($query5);
	$query6="DELETE FROM turnos12_viernes where id_servicio='$id'";
	$resultado6=$conexion->query($query6);
	$query7="DELETE FROM turnos12_sabado where id_servicio='$id'";
	$resultado7=$conexion->query($query7);
	$query8="DELETE FROM turnos12_domingo where id_servicio='$id'";
	$resultado8=$conexion->query($query8);
	$query9="DELETE FROM turnos24_lunes where id_servicio='$id'";
	$resultado9=$conexion->query($query9);
	$query10="DELETE FROM turnos24_martes where id_servicio='$id'";
	$resultado10=$conexion->query($query10);
	$query11="DELETE FROM turnos24_miercoles where id_servicio='$id'";
	$resultado11=$conexion->query($query11);
	$query12="DELETE FROM turnos24_jueves where id_servicio='$id'";
	$resultado12=$conexion->query($query12);
	$query13="DELETE FROM turnos24_viernes where id_servicio='$id'";
	$resultado13=$conexion->query($query13);
	$query14="DELETE FROM turnos24_sabado where id_servicio='$id'";
	$resultado14=$conexion->query($query14);
	$query15="DELETE FROM turnos24_domingo where id_servicio='$id'";
	$resultado15=$conexion->query($query15);

	header("Location: listar_servicio.php");
	//header("Location: tabla_mos.php");
}
else
{
	echo "no se elemino";
}

?>