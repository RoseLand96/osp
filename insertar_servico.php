<?php
include('connexion.php');
$nombre=$_POST['txtnomb_servicio'];
$estado=$_POST['txtestado'];
$ciudad=$_POST['txtciudad'];
$numero_identif=$_POST['txtnum_identif'];
$lunes12=$_POST['txtlunes12'];
$martes12=$_POST['txtmartes12'];
$miecoles12=$_POST['txtmiercoles12'];
$jueves12=$_POST['txtjueves12'];
$viernes12=$_POST['txtviernes12'];
$sabado12=$_POST['txtsabado12'];
$domingo12=$_POST['txtdomingo12'];
$lunes24=$_POST['txtlunes24'];
$martes24=$_POST['txtmartes24'];
$miecoles24=$_POST['txtmiercoles24'];
$jueves24=$_POST['txtjueves24'];
$viernes24=$_POST['txtviernes24'];
$sabado24=$_POST['txtsabado24'];
$domingo24=$_POST['txtdomingo24'];

if(empty($lunes12) && empty($martes12) && empty($miercoles12) && empty($jueves12) && empty($viernes12) && empty($sabado12) && empty($domingo12) && empty($lunes24) && empty($martes24) && empty($miercoles24) && empty($jueves24) && empty($viernes24) && empty($sabado24) && empty($domingo24)){
$query="INSERT into servicio (nombre_servicio,estado,ciudad,numero_identif) values('$nombre','$estado','$ciudad','$numero_identif')";
$resultado=$conexion->query($query);
if($resultado)
{
	
	header("Location: agregar_servicio.php");
}
else
{
	echo"<script>alert('no se inserto')</script>";
	echo "<script language=Javascript> window.location =\"pages/agregar_consultador.php\"; </script>";
}
}

?>
