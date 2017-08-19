<?php 

    //creamos la sesion 
    session_start(); 
    //validamos si se ha hecho o no el inicio de sesion correctamente 
    //si no se ha hecho la sesion nos regresará a login.php 
    if(!isset($_SESSION['txtusuario']))  
    { 
          header('Location: index.php');  
         
        exit(); 
       
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reportes</title>
<link rel="shortcut icon" type="image/x-icon" href="image/reporte.png"/>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="dist/js/jquery-2.1.4.min.js" type="text/javascript"></script>



   <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
   
    <script src="dist/js/bootstrap.min.js"></script>
     <script src="dist/js/jquery.min.js"></script>
   

<script type="text/javascript">

$(document).ready(function() {
  $("#btnExport").click(function(e) {
    e.preventDefault();

    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('dataTables-example');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'reporte_osp' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
  });
});
  </script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>


</style>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 100%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

<script type="text/javascript">


    $(document).ready(function () {
 
            (function ($) {
 
                $('#filtrar').keyup(function () {
 
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
 
                })
 
            }(jQuery));
 
        });
    </script>
</head>

<body oncontextmenu="return false">
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="index.html"><img src="image/logo_osp.png"/></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                    
                       
                <!-- /.dropdown -->
                <li class="dropdown">
                     <a href="logout.php">
                        <i class="glyphicon glyphicon-log-out"></i> 
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           
                <!-- /.sidebar-collapse -->
            
            <!-- /.navbar-static-side -->
        </nav>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <table><tr><td>Reporte OSP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><div>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 <td><button id="btnExport">exportar a excel</button></td>
                             </div></tr></table>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                          
                           
                            
                            
                            <table width="100%" cellspacing="10" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                        <tr style="background:#A8C5F5">
                                        <th style="background:#ffffff"><FONT color="green">Cuenta</font></th>
                                        <th style="background:#07FDC4" height="100">Ubicación</th>
                                        <th style="background:#07FDC4">Supervisor(es)</th>
                                        <th style="background:#07FDC4">Nombre Servicio</th>
                                        
                                        <th width="1%" style="background:#07FD97">Tt turnos a cubrir 12x12</th>
                                        <th  width="1%" style="background:#07FD97">Tt turnos a cubrir 24x24</th>
                                        <th width="1%" style="background:#8EFD07">turnos realmente cubiertos 12x12</th>
                                        <th width="1%" style="background:#8EFD07">turnos realmente cubiertos 24x24</th>
                                        <th width="1%" style="background:#ACFA6C">%cobertura12</th>
                                        <th  width="1%" style="background:#ACFA6C">%cobertura24</th>
                                        <th width="1%" style="background:#FA996C">turnos sin cubrir 12x12</th>
                                        <th width="1%" style="background:#FA996C">turnos sin cubrir 24x24</th>
                                    </tr>
                                </thead>
                                <tbody class="buscar">
 <?php
include('connexion.php');

 $fechaInicial=$_POST['fechaInicial'];
  $fechafin=$_POST['fechafin'];
 $datosdia=explode("-",$fechaInicial);
 $dia1=$datosdia[2];
$datosdia2=explode("-",$fechafin);
 $dia2=$datosdia[2];
 $dia=($dia2-$dia1)+1;
$sqldia="SELECT COUNT(fecha_cob) as numdia from cobertura12 where cobertura12.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura12.id_servicio";

      $sql="SELECT COUNT(cobertura12.cubrir) as contlunes,servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat, (turnos12_lunes.cant_lun12) as cant_12, SUM(cobertura12.cubrir) As cubrir12, AVG(cobertura12.porcentaje12) as promedio12,SUM(cobertura12.sin_cubrir) 
  As sin_cubrir12, SUM(cobertura12.turno_a_cubrir) As turnoacubrir12 from servicio,supervisor,cobertura12,turnos12_lunes where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos12_lunes.id_servicio 

and servicio.id_servicio=cobertura12.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura12.dia='lunes' and cobertura12.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura12.id_servicio


";
$sql2="SELECT COUNT(cobertura24.cubrir) as contlunes, servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,supervisor.apellido_pat,
supervisor.apellido_mat, (turnos24_lunes.cant_lun24) as cant_24, SUM(cobertura24.cubrir) As cubrir24 , AVG(cobertura24.porcentaje24) as promedio24,
SUM(cobertura24.sin_cubrir) As sin_cubrir24,SUM(cobertura24.turno_a_cubrir) As turnoacubrir24 from servicio,supervisor,cobertura24,turnos24_lunes where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos24_lunes.id_servicio 

and servicio.id_servicio=cobertura24.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura24.dia='lunes' and cobertura24.fecha_cob BETWEEN '$fechaInicial' and '$fechafin' group by cobertura24.id_servicio
";
$sql3="SELECT COUNT(cobertura12.cubrir) as contmartes, servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,
supervisor.apellido_pat,supervisor.apellido_mat, (turnos12_lunes.cant_lun12) as cant_12, SUM(cobertura12.cubrir) As cubrir12, 
AVG(cobertura12.porcentaje12) as promedio12,SUM(cobertura12.sin_cubrir) As sin_cubrir12, SUM(cobertura12.turno_a_cubrir) As turnoacubrir12  from servicio,supervisor,cobertura12,turnos12_lunes where servicio.numero_identif=supervisor.numero_identif and servicio.id_servicio=turnos12_lunes.id_servicio and servicio.id_servicio=cobertura12.id_servicio and servicio.numero_identif=supervisor.numero_identif and cobertura12.dia='martes' and cobertura12.fecha_cob BETWEEN '$fechaInicial' and '$fechafin' group by cobertura12.id_servicio ";

$sql4="SELECT COUNT(cobertura24.cubrir) as contmartes, servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,
supervisor.apellido_pat,supervisor.apellido_mat, (turnos24_lunes.cant_lun24) as cant_24, SUM(cobertura24.cubrir) As cubrir24 , 
AVG(cobertura24.porcentaje24) as promedio24,SUM(cobertura24.sin_cubrir)  As sin_cubrir24 ,SUM(cobertura24.turno_a_cubrir) As turnoacubrir24 from servicio,supervisor,cobertura24,turnos24_lunes where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos24_lunes.id_servicio 

and servicio.id_servicio=cobertura24.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura24.dia='martes' and cobertura24.fecha_cob BETWEEN '$fechaInicial' and '$fechafin' group by cobertura24.id_servicio
";
$sql5="SELECT COUNT(cobertura12.cubrir) as contmiercoles, servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat, (turnos12_miercoles.cant_mier12) as cant_12, SUM(cobertura12.cubrir) As cubrir12, AVG(cobertura12.porcentaje12) as promedio12,SUM(cobertura12.sin_cubrir) 
  As sin_cubrir12, SUM(cobertura12.turno_a_cubrir) As turnoacubrir12 from servicio,supervisor,cobertura12,turnos12_miercoles where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos12_miercoles.id_servicio 

and servicio.id_servicio=cobertura12.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura12.dia='miercoles' and cobertura12.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura12.id_servicio";

$sql6="SELECT COUNT(cobertura24.cubrir) as contmiercoles, servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,
supervisor.apellido_pat,supervisor.apellido_mat, (turnos24_miercoles.cant_mier24) as cant_24, SUM(cobertura24.cubrir) As cubrir24 , 
AVG(cobertura24.porcentaje24) as promedio24,SUM(cobertura24.sin_cubrir) 
  As sin_cubrir24,SUM(cobertura24.turno_a_cubrir) As turnoacubrir24 from servicio,supervisor,cobertura24,turnos24_miercoles where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos24_miercoles.id_servicio 

and servicio.id_servicio=cobertura24.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura24.dia='miercoles' and cobertura24.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura24.id_servicio
";
$sql7="SELECT COUNT(cobertura12.cubrir) as contjueves, servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat, (turnos12_jueves.cant_juev12) as cant_12, SUM(cobertura12.cubrir) As cubrir12, AVG(cobertura12.porcentaje12) as promedio12,SUM(cobertura12.sin_cubrir) 
  As sin_cubrir12, SUM(cobertura12.turno_a_cubrir) As turnoacubrir12 from servicio,supervisor,cobertura12,turnos12_jueves where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos12_jueves.id_servicio 

and servicio.id_servicio=cobertura12.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura12.dia='jueves' and cobertura12.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura12.id_servicio";
 $sql8="SELECT COUNT(cobertura24.cubrir) as contjueves, servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,supervisor.apellido_pat,
 supervisor.apellido_mat, (turnos24_jueves.cant_juev24) as cant_24, SUM(cobertura24.cubrir) As cubrir24 , 
 AVG(cobertura24.porcentaje24) as promedio24,SUM(cobertura24.sin_cubrir) 
  As sin_cubrir24,SUM(cobertura24.turno_a_cubrir) As turnoacubrir24 from servicio,supervisor,cobertura24,turnos24_jueves where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos24_jueves.id_servicio 

and servicio.id_servicio=cobertura24.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura24.dia='jueves' and cobertura24.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura24.id_servicio
";
$sql9="SELECT COUNT(cobertura12.cubrir) as contviernes, servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,supervisor.apellido_pat,
supervisor.apellido_mat, (turnos12_viernes.cant_vier12) as cant_12, SUM(cobertura12.cubrir) As cubrir12,
 AVG(cobertura12.porcentaje12) as promedio12,SUM(cobertura12.sin_cubrir) 
  As sin_cubrir12, SUM(cobertura12.turno_a_cubrir) As turnoacubrir12 from servicio,supervisor,cobertura12,turnos12_viernes where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos12_viernes.id_servicio 

and servicio.id_servicio=cobertura12.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura12.dia='viernes' and cobertura12.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura12.id_servicio";
 $sql10="SELECT COUNT(cobertura24.cubrir) as contviernes, servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,supervisor.apellido_pat,
 supervisor.apellido_mat, (turnos24_viernes.cant_vier24) as cant_24, SUM(cobertura24.cubrir) As cubrir24 , 
 AVG(cobertura24.porcentaje24) as promedio24,SUM(cobertura24.sin_cubrir) 
  As sin_cubrir24,SUM(cobertura24.turno_a_cubrir) As turnoacubrir24 from servicio,supervisor,cobertura24,turnos24_viernes where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos24_viernes.id_servicio 

and servicio.id_servicio=cobertura24.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura24.dia='viernes' and cobertura24.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura24.id_servicio
";
$sql11="SELECT COUNT(cobertura12.cubrir) as contsabado, servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat, (turnos12_sabado.cant_sab12) as cant_12, SUM(cobertura12.cubrir) As cubrir12, AVG(cobertura12.porcentaje12) as promedio12,SUM(cobertura12.sin_cubrir) 
  As sin_cubrir12, SUM(cobertura12.turno_a_cubrir) As turnoacubrir12 from servicio,supervisor,cobertura12,turnos12_sabado where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos12_sabado.id_servicio 

and servicio.id_servicio=cobertura12.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura12.dia='sabado' and cobertura12.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura12.id_servicio";
 $sql12="SELECT COUNT(cobertura24.cubrir) as contsabado,servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat, (turnos24_sabado.cant_sab24) as cant_24, SUM(cobertura24.cubrir) As cubrir24 , AVG(cobertura24.porcentaje24) as promedio24,SUM(cobertura24.sin_cubrir) 
  As sin_cubrir24,SUM(cobertura24.turno_a_cubrir) As turnoacubrir24 from servicio,supervisor,cobertura24,turnos24_sabado where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos24_sabado.id_servicio 

and servicio.id_servicio=cobertura24.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura24.dia='sabado' and cobertura24.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura24.id_servicio
";
$sql13="SELECT COUNT(cobertura12.cubrir) as contdomingo,servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat, (turnos12_domingo.cant_dom12) as cant_12, SUM(cobertura12.cubrir) As cubrir12, AVG(cobertura12.porcentaje12) as promedio12,SUM(cobertura12.sin_cubrir) 
  As sin_cubrir12, SUM(cobertura12.turno_a_cubrir) As turnoacubrir12 from servicio,supervisor,cobertura12,turnos12_domingo where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos12_domingo.id_servicio 

and servicio.id_servicio=cobertura12.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura12.dia='domingo' and cobertura12.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura12.id_servicio";
 $sql14="SELECT COUNT(cobertura24.cubrir) as contdomingo,servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat, (turnos24_domingo.cant_dom24) as cant_24, SUM(cobertura24.cubrir) As cubrir24 , AVG(cobertura24.porcentaje24) as promedio24,SUM(cobertura24.sin_cubrir) 
  As sin_cubrir24,SUM(cobertura24.turno_a_cubrir) As turnoacubrir24 from servicio,supervisor,cobertura24,turnos24_domingo where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=turnos24_domingo.id_servicio 

and servicio.id_servicio=cobertura24.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura24.dia='domingo' and cobertura24.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura24.id_servicio
";
 $sql15="SELECT servicio.estado,servicio.nombre_servicio,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat 
 from servicio,supervisor,cobertura12 
 where servicio.numero_identif=supervisor.numero_identif 

and servicio.id_servicio=cobertura12.id_servicio 

and servicio.numero_identif=supervisor.numero_identif
 and cobertura12.fecha_cob BETWEEN '$fechaInicial' and '$fechafin'  group by cobertura12.id_servicio";

 $resultado=$conexion->query($sql);
  $resultado2=$conexion->query($sql2);
    $resultado3=$conexion->query($sql3);
      $resultado4=$conexion->query($sql4);
     $resultado5=$conexion->query($sql5);
      $resultado6=$conexion->query($sql6);
       $resultado7=$conexion->query($sql7);
       $resultado8=$conexion->query($sql8);
        $resultado9=$conexion->query($sql9);
        $resultado10=$conexion->query($sql10);
        $resultado11=$conexion->query($sql11);
         $resultado12=$conexion->query($sql12);
          $resultado13=$conexion->query($sql13);
              $resultado14=$conexion->query($sql14);
               $resultado15=$conexion->query($sql15);
                   $resultadodia=$conexion->query($sqldia);
while($row15=$resultado15->fetch_assoc())
{$row2=$resultado2->fetch_assoc();$row3=$resultado3->fetch_assoc();$row4=$resultado4->fetch_assoc();$row5=$resultado5->fetch_assoc();
    $row6=$resultado6->fetch_assoc();$row7=$resultado7->fetch_assoc();$row8=$resultado8->fetch_assoc();
    $row9=$resultado9->fetch_assoc();$row10=$resultado10->fetch_assoc();$row11=$resultado11->fetch_assoc();$row12=$resultado12->fetch_assoc();
    $row13=$resultado13->fetch_assoc();$row14=$resultado14->fetch_assoc();$row=$resultado->fetch_assoc();$rowdia=$resultadodia->fetch_assoc()
  
  

    ?>

  
                                    <tr>
                                        <td >OSP</td>

                                        <td ><?php echo $row15['estado']; ?></td>
                                          <td ><?php echo $row15['nombre_sup']; ?>&nbsp;<?php echo $row15['apellido_pat']; ?>&nbsp;<?php echo $row15['apellido_mat']; ?></td>
                                            <td ><?php echo $row15['nombre_servicio']; ?></td>
                                              
                                            

                                                    <td ><?php echo ($row['turnoacubrir12'])+($row3['turnoacubrir12'])+($row5['turnoacubrir12'])+($row7['turnoacubrir12'])+($row9['turnoacubrir12'])+($row11['turnoacubrir12'])+($row13['turnoacubrir12']); ?></td>

                                                      <td ><?php echo ($row2['turnoacubrir24'])+($row4['turnoacubrir24'])+($row6['turnoacubrir24'])+($row8['turnoacubrir24'])+($row10['turnoacubrir24'])+($row12['turnoacubrir24'])+($row14['turnoacubrir24']); ?></td>

                                                        <td ><?php echo $row['cubrir12']+$row3['cubrir12']+$row5['cubrir12']+$row7['cubrir12']+$row9['cubrir12']+$row11['cubrir12']+$row13['cubrir12']; ?></td>

                                                          <td ><?php echo $row2['cubrir24']+$row4['cubrir24']+$row6['cubrir24']+$row8['cubrir24']+$row10['cubrir24']+$row12['cubrir24']+$row14['cubrir24']; ?></td>

                                                            <td ><?php echo round(($row['promedio12']+$row3['promedio12']+$row5['promedio12']+$row7['promedio12']+$row9['promedio12']+$row11['promedio12']+$row13['promedio12'])/ $rowdia['numdia'],2); ?>%</td>
 
                                                              <td ><?php echo round(($row2['promedio24']+$row4['promedio24']+$row6['promedio24']+$row8['promedio24']+$row10['promedio24']+$row12['promedio24']+$row14['promedio24'])/$rowdia['numdia'],2); ?>%</td>

                                                                <td ><?php echo $row['sin_cubrir12']+$row3['sin_cubrir12']+$row5['sin_cubrir12']+$row7['sin_cubrir12']+$row9['sin_cubrir12']+$row11['sin_cubrir12']+$row13['sin_cubrir12']; ?></td>

                                                                  <td ><?php echo $row2['sin_cubrir24']+$row4['sin_cubrir24']+$row6['sin_cubrir24']+$row8['sin_cubrir24']+$row10['sin_cubrir24']+$row12['sin_cubrir24']+$row14['sin_cubrir24']; ?></td>
                                    </tr>

                                <?php
                               
                               }



                               ?>   

                                </tbody>
                                 
                            </table>

                            <!-- /.table-responsive -->
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
       
        <!-- /#page-wrapper -->

    </div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

     <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>



     <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>


</body>

</html>
