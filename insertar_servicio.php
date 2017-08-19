<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('connexion.php');
$nombre=$_POST['txtnomb_servicio'];
$estado=$_POST['txtestado'];
$ciudad=$_POST['txtciudad'];
$numero_identif=$_POST['txtnum_identif'];
$lunes12=$_POST['txtlunes12'];
$martes12=$_POST['txtmartes12'];
$miercoles12=$_POST['txtmiercoles12'];
$jueves12=$_POST['txtjueves12'];
$viernes12=$_POST['txtviernes12'];
$sabado12=$_POST['txtsabado12'];
$domingo12=$_POST['txtdomingo12'];
$lunes24=$_POST['txtlunes24'];
$martes24=$_POST['txtmartes24'];
$miercoles24=$_POST['txtmiercoles24'];
$jueves24=$_POST['txtjueves24'];
$viernes24=$_POST['txtviernes24'];
$sabado24=$_POST['txtsabado24'];
$domingo24=$_POST['txtdomingo24'];

/*$result=mysql_query("SELECT MAX(id_servicio) from servicio");
 $row = mysql_fetch_row($result);
    $highest_id = $row[0];*/
	$query1="INSERT into servicio (nombre_servicio,estado,ciudad,numero_identif) values('$nombre','$estado','$ciudad','$numero_identif')";
	
   $resultado1=$conexion->query($query1);

if($resultado1)
{
	$ultimo_id = mysqli_insert_id($conexion); 
	$query2="INSERT into turnos12_lunes (cant_lun12,dia,id_servicio) values('$lunes12','lunes','$ultimo_id')";
	$resultado2=$conexion->query($query2);
	$query3="INSERT into turnos12_martes (cant_mar12,dia,id_servicio) values('$martes12','martes','$ultimo_id')";
	$resultado3=$conexion->query($query3);
	$query4="INSERT into turnos12_miercoles (cant_mier12,dia,id_servicio) values('$miercoles12','miercoles','$ultimo_id')";
	$resultado4=$conexion->query($query4);
	$query5="INSERT into turnos12_jueves (cant_juev12,dia,id_servicio) values('$jueves12','jueves','$ultimo_id')";
	$resultado5=$conexion->query($query5);
	$query6="INSERT into turnos12_viernes (cant_vier12,dia,id_servicio) values('$viernes12','viernes','$ultimo_id')";
	$resultado6=$conexion->query($query6);
	$query7="INSERT into turnos12_sabado (cant_sab12,dia,id_servicio) values('$sabado12','sabado','$ultimo_id')";
	$resultado7=$conexion->query($query7);
	$query8="INSERT into turnos12_domingo (cant_dom12,dia,id_servicio) values('$domingo12','domingo','$ultimo_id')";
	$resultado8=$conexion->query($query8);

	$query9="INSERT into turnos24_lunes (cant_lun24,dia,id_servicio) values('$lunes24','lunes','$ultimo_id')";
	$resultado9=$conexion->query($query9);
	$query10="INSERT into turnos24_martes (cant_mar24,dia,id_servicio) values('$martes24','martes','$ultimo_id')";
	$resultado10=$conexion->query($query10);
	$query11="INSERT into turnos24_miercoles (cant_mier24,dia,id_servicio) values('$miercoles24','miercoles','$ultimo_id')";
	$resultado11=$conexion->query($query11);
	$query12="INSERT into turnos24_jueves (cant_juev24,dia,id_servicio) values('$jueves24','jueves','$ultimo_id')";
	$resultado12=$conexion->query($query12);
	$query13="INSERT into turnos24_viernes (cant_vier24,dia,id_servicio) values('$viernes24','viernes','$ultimo_id')";
	$resultado13=$conexion->query($query13);
	$query14="INSERT into turnos24_sabado (cant_sab24,dia,id_servicio) values('$sabado24','sabado','$ultimo_id')";
	$resultado14=$conexion->query($query14);
	$query15="INSERT into turnos24_domingo (cant_dom24,dia,id_servicio) values('$domingo24','domingo','$ultimo_id')";
	$resultado15=$conexion->query($query15);

	header("Location: listar_servicio.php");
}
else
{
	echo"<script>alert('no se inserto')</script>";
	
}


?>
