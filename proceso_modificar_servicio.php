<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
include('connexion.php');
$id=$_GET['id_servicio'];
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
$query="UPDATE servicio,turnos12_lunes,turnos12_martes, turnos12_miercoles, turnos12_jueves, turnos12_viernes,
 turnos12_sabado, turnos12_domingo ,turnos24_lunes,turnos24_martes,
 turnos24_miercoles,turnos24_jueves,turnos24_viernes,turnos24_sabado,turnos24_domingo
 SET nombre_servicio='$nombre',estado='$estado',ciudad='$ciudad',
 numero_identif='$numero_identif',cant_lun12='$lunes12',
 cant_mar12='$martes12',cant_mier12='$miercoles12',
 cant_juev12='$jueves12',cant_vier12='$viernes12',cant_sab12='$sabado12',
 cant_dom12='$domingo12',cant_lun24='$lunes24',cant_mar24='$martes24',
 cant_mier24='$miercoles24',cant_juev24='$jueves24',cant_vier24='$viernes24',
 cant_sab24='$sabado24',cant_dom24='$domingo24' WHERE  servicio.id_servicio=turnos12_lunes.id_servicio 
 and servicio.id_servicio=turnos12_martes.id_servicio and servicio.id_servicio=turnos12_miercoles.id_servicio
  and servicio.id_servicio=turnos12_jueves.id_servicio and servicio.id_servicio=turnos12_viernes.id_servicio
   and servicio.id_servicio=turnos12_sabado.id_servicio and servicio.id_servicio=turnos12_domingo.id_servicio 
   and servicio.id_servicio=turnos24_lunes.id_servicio  and servicio.id_servicio=turnos24_martes.id_servicio 
   and servicio.id_servicio=turnos24_miercoles.id_servicio  and servicio.id_servicio=turnos24_jueves.id_servicio
    and servicio.id_servicio=turnos24_viernes.id_servicio and servicio.id_servicio=turnos24_sabado.id_servicio 
    and servicio.id_servicio=turnos24_domingo.id_servicio and servicio.id_servicio='$id'";

$resultado=$conexion->query($query);
if($resultado)
{
	header("Location: listar_servicio.php");
}
else
{
	echo "no se modifico";
}

?>