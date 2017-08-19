<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reportes</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="../dist/js/jquery-2.1.4.min.js" type="text/javascript"></script>

   
    <script src="../dist/js/bootstrap.min.js"></script>


   <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

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

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="../image/logo_osp.png"/></a>
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
                           <table><tr><td>Reporte diario OSP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><div>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td><input type="button" value="Imprimir" onclick="javascript:window.print()" ></td>
                             </div></tr></table>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                          
                                <div>
                                 <td width="50" style="font-size=50px"><?php echo date("d/m/Y");?></td>
                                 <td><?php echo strftime("%A");?></td> 
                             </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <div><table> <tr><td><input type="text" class="form-control" id="filtrar" style="width:100%" placeholder="Estado/nombre servicio"></td><td>
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button></td></tr></table></div>

                           
                            
                            
                            <table width="100%" cellspacing="10" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                        <tr style="background:#A8C5F5">
                                        <th style="background:#ffffff"><FONT color="green">Cuenta</font></th>
                                         <th height="100" style="background:#07FDC4">Ublicación</th>
                                        <th style="background:#07FDC4">Supervisor(es)</th>
                                        <th style="background:#07FDC4">Nombre Servicio</th>
                                     
                                        <th width="1%">Diarios de 12x12</th>
                                        <th width="1%">Diarios de 24x24</th>
                                        <th width="1%"  style="background:#07FD97">Tt turnos a cubrir 12x12</th>
                                        <th width="1%"  style="background:#07FD97">Tt turnos a cubrir 24x24</th>
                                        <th width="1%" style="background:#8EFD07">turnos realmente cubiertos 12x12</th>
                                        <th width="1%" style="background:#8EFD07">turnos realmente cubiertos 24x24</th>
                                        <th width="1%" style="background:#ACFA6C">%cobertura12</th>
                                        <th width="1%" style="background:#ACFA6C">%cobertura24</th>
                                        <th width="1%" style="background:#FA996C">turnos sin cubrir 12x12</th>
                                        <th width="1%" style="background:#FA996C">turnos sin cubrir 24x24</th>
                                    </tr>
                                </thead>
                                <tbody class="buscar">
 <?php
include('connexion.php');
 $fecha=$_POST['fecha'];
 $dia=strftime("%A");
  $mes =$_POST['mes'];
  $ano = date("Y");

 $query="SELECT servicio.estado,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat,turnos12_sabado.cant_sab12,turnos24_sabado.cant_sab24,servicio.nombre_servicio,cobertura12.cubrir As cubrir12,cobertura24.cubrir As cubrir24, cobertura12.porcentaje12,cobertura24.porcentaje24,cobertura12.sin_cubrir As sin_cubrir12, cobertura24.sin_cubrir As sin_cubrir24 
 from servicio,supervisor,turnos12_sabado,turnos24_sabado,cobertura24,cobertura12 
 where servicio.numero_identif=supervisor.numero_identif 
 and servicio.id_servicio=turnos12_sabado.id_servicio
  and servicio.id_servicio=turnos24_sabado.id_servicio 
  and servicio.id_servicio=cobertura12.id_servicio 
  and servicio.id_servicio=cobertura24.id_servicio 
  and cobertura12.dia='sabado' 
  and cobertura24.dia='sabado'
  and cobertura12.fecha_cob='$fecha' and cobertura24.fecha_cob='$fecha' ";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
 
 ?>
                                    <tr>
                                        <td >OSP</td>
                                        <td ><?php echo $row['estado']; ?></td>
                                          <td ><?php echo $row['nombre_sup']; ?>&nbsp;<?php echo $row['apellido_pat']; ?>&nbsp;<?php echo $row['apellido_mat']; ?></td>
                                            <td ><?php echo $row['nombre_servicio']; ?></td>
                                              <td ><?php echo $row['cant_sab12']; ?></td>
                                                  <td ><?php echo $row['cant_sab24']; ?></td>
                                                    <td ><?php echo $row['cant_sab12']; ?></td>
                                                      <td ><?php echo $row['cant_sab24']; ?></td>
                                                        <td ><?php echo $row['cubrir12']; ?></td>
                                                          <td ><?php echo $row['cubrir24']; ?></td>
                                                            <td ><?php echo $row['porcentaje12']; ?>%</td>
                                                              <td ><?php echo $row['porcentaje24']; ?>%</td>
                                                                <td ><?php echo $row['sin_cubrir12']; ?></td>
                                                                  <td ><?php echo $row['sin_cubrir24']; ?></td>
                                    </tr>
                                    <tr>

                                        
                                    </tr>   
                                <?php
                               }
    $query1="SELECT servicio.estado,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat,turnos12_domingo.cant_dom12,turnos24_domingo.cant_dom24,servicio.nombre_servicio,cobertura12.cubrir As cubrir12,cobertura24.cubrir As cubrir24, cobertura12.porcentaje12,cobertura24.porcentaje24,cobertura12.sin_cubrir As sin_cubrir12, cobertura24.sin_cubrir As sin_cubrir24 from servicio,supervisor,turnos12_domingo,turnos24_domingo,cobertura24,cobertura12 where servicio.numero_identif=supervisor.numero_identif and servicio.id_servicio=turnos12_domingo.id_servicio and servicio.id_servicio=turnos24_domingo.id_servicio and servicio.id_servicio=cobertura12.id_servicio and servicio.id_servicio=cobertura24.id_servicio and cobertura12.dia='domingo' and cobertura24.dia='domingo' and cobertura12.fecha_cob='$fecha'  and cobertura24.fecha_cob='$fecha'";
$resultado2=$conexion->query($query1);
while($row2=$resultado2->fetch_assoc())
{
 
 ?>
                                    <tr>
                                        <td >OSP</td>
                                        <td ><?php echo $row2['estado']; ?></td>
                                          <td ><?php echo $row2['nombre_sup']; ?>&nbsp;<?php echo $row2['apellido_pat']; ?>&nbsp;<?php echo $row2['apellido_mat']; ?></td>
                                            <td ><?php echo $row2['nombre_servicio']; ?></td>
                                             <td ><?php echo $row2['cant_dom12']; ?></td>
                                                  <td ><?php echo $row2['cant_dom24']; ?></td>
                                                    <td ><?php echo $row2['cant_dom12']; ?></td>
                                                      <td ><?php echo $row2['cant_dom24']; ?></td>
                                                        <td ><?php echo $row2['cubrir12']; ?></td>
                                                          <td ><?php echo $row2['cubrir24']; ?></td>
                                                            <td ><?php echo $row2['porcentaje12']; ?>%</td>
                                                              <td ><?php echo $row2['porcentaje24']; ?>%</td>
                                                                <td ><?php echo $row2['sin_cubrir12']; ?></td>
                                                                  <td ><?php echo $row2['sin_cubrir24']; ?></td>
                                    </tr>
                                <?php
                               }

$query3="SELECT servicio.estado,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat,turnos12_lunes.cant_lun12,turnos24_lunes.cant_lun24,servicio.nombre_servicio,cobertura12.cubrir As cubrir12,cobertura24.cubrir As cubrir24, cobertura12.porcentaje12,cobertura24.porcentaje24,cobertura12.sin_cubrir As sin_cubrir12, cobertura24.sin_cubrir As sin_cubrir24 from servicio,supervisor,turnos12_lunes,turnos24_lunes,cobertura24,cobertura12 where servicio.numero_identif=supervisor.numero_identif and servicio.id_servicio=turnos12_lunes.id_servicio and servicio.id_servicio=turnos24_lunes.id_servicio and servicio.id_servicio=cobertura12.id_servicio and servicio.id_servicio=cobertura24.id_servicio and cobertura12.dia='lunes' and cobertura24.dia='lunes' and cobertura12.fecha_cob='$fecha'  and cobertura24.fecha_cob='$fecha'";
$resultado3=$conexion->query($query3);
while($row3=$resultado3->fetch_assoc())
{
  
    ?>

  
                                    <tr>
                                        <td >OSP</td>
                                        <td ><?php echo $row3['estado']; ?></td>
                                          <td ><?php echo $row3['nombre_sup']; ?>&nbsp;<?php echo $row3['apellido_pat']; ?>&nbsp;<?php echo $row3['apellido_mat']; ?></td>
                                            <td ><?php echo $row3['nombre_servicio']; ?></td>
                                              <td ><?php echo $row3['cant_lun12']; ?></td>
                                                  <td ><?php echo $row3['cant_lun24']; ?></td>
                                                    <td ><?php echo $row3['cant_lun12']; ?></td>
                                                      <td ><?php echo $row3['cant_lun24']; ?></td>
                                                        <td ><?php echo $row3['cubrir12']; ?></td>
                                                          <td ><?php echo $row3['cubrir24']; ?></td>
                                                            <td ><?php echo $row3['porcentaje12']; ?>%</td>
                                                              <td ><?php echo $row3['porcentaje24']; ?>%</td>
                                                                <td ><?php echo $row3['sin_cubrir12']; ?></td>
                                                                  <td ><?php echo $row3['sin_cubrir24']; ?></td>
                                    </tr>

                                <?php
                               
                               }
  $query4="SELECT servicio.estado,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat,turnos12_martes.cant_mar12,
  turnos24_martes.cant_mar24,servicio.nombre_servicio,cobertura12.cubrir As cubrir12,cobertura24.cubrir As cubrir24,
   cobertura12.porcentaje12,cobertura24.porcentaje24,cobertura12.sin_cubrir As sin_cubrir12, cobertura24.sin_cubrir 
   As sin_cubrir24 from servicio,supervisor,turnos12_martes,turnos24_martes,cobertura24,cobertura12 
   where servicio.numero_identif=supervisor.numero_identif and servicio.id_servicio=turnos12_martes.id_servicio 
   and servicio.id_servicio=turnos24_martes.id_servicio and servicio.id_servicio=cobertura12.id_servicio and 
   servicio.id_servicio=cobertura24.id_servicio and cobertura12.dia='martes' and cobertura24.dia='martes' 
   and cobertura12.fecha_cob='$fecha'  and cobertura24.fecha_cob='$fecha'";
$resultado4=$conexion->query($query4);
while($row4=$resultado4->fetch_assoc())
{
  
 ?>

  
                                    <tr>
                                        <td >OSP</td>
                                        <td ><?php echo $row4['estado']; ?></td>
                                          <td ><?php echo $row4['nombre_sup']; ?>&nbsp;<?php echo $row4['apellido_pat']; ?>&nbsp;<?php echo $row4['apellido_mat']; ?></td>
                                            <td ><?php echo $row4['nombre_servicio']; ?></td>
                                             <td ><?php echo $row4['cant_mar12']; ?></td>
                                                  <td ><?php echo $row4['cant_mar24']; ?></td>
                                                    <td ><?php echo $row4['cant_mar12']; ?></td>
                                                      <td ><?php echo $row4['cant_mar24']; ?></td>
                                                        <td ><?php echo $row4['cubrir12']; ?></td>
                                                          <td ><?php echo $row4['cubrir24']; ?></td>
                                                            <td ><?php echo $row4['porcentaje12']; ?>%</td>
                                                              <td ><?php echo $row4['porcentaje24']; ?>%</td>
                                                                <td ><?php echo $row4['sin_cubrir12']; ?></td>
                                                                  <td ><?php echo $row4['sin_cubrir24']; ?></td>
                                    </tr>

                                <?php
                               
                               }
$query6="SELECT servicio.estado,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat,
turnos12_jueves.cant_juev12,turnos24_jueves.cant_juev24,
servicio.nombre_servicio,cobertura12.cubrir As cubrir12,
cobertura24.cubrir As cubrir24, cobertura12.porcentaje12,
cobertura24.porcentaje24,cobertura12.sin_cubrir As sin_cubrir12, cobertura24.sin_cubrir As sin_cubrir24
 from servicio,supervisor,turnos12_jueves,turnos24_jueves,cobertura24,cobertura12 
 where servicio.numero_identif=supervisor.numero_identif and servicio.id_servicio=turnos12_jueves.id_servicio
  and servicio.id_servicio=turnos24_jueves.id_servicio and servicio.id_servicio=cobertura12.id_servicio 
  and servicio.id_servicio=cobertura24.id_servicio and cobertura12.dia='jueves' 
  and cobertura24.dia='jueves' and cobertura12.fecha_cob='$fecha'  and cobertura24.fecha_cob='$fecha'";
$resultado6=$conexion->query($query6);
while($row6=$resultado6->fetch_assoc())
{
  
 

 ?>

  
                                    <tr>
                                        <td >OSP</td>
                                        <td ><?php echo $row6['estado']; ?></td>
                                          <td ><?php echo $row6['nombre_sup']; ?>&nbsp;<?php echo $row6['apellido_pat']; ?>&nbsp;<?php echo $row6['apellido_mat']; ?></td>
                                            <td ><?php echo $row6['nombre_servicio']; ?></td>
                                             
                                                <td ><?php echo $row6['cant_juev12']; ?></td>
                                                  <td ><?php echo $row6['cant_juev24']; ?></td>
                                                    <td ><?php echo $row6['cant_juev12']; ?></td>
                                                      <td ><?php echo $row6['cant_juev24']; ?></td>
                                                        <td ><?php echo $row6['cubrir12']; ?></td>
                                                          <td ><?php echo $row6['cubrir24']; ?></td>
                                                            <td ><?php echo $row6['porcentaje12']; ?>%</td>
                                                              <td ><?php echo $row6['porcentaje24']; ?>%</td>
                                                                <td ><?php echo $row6['sin_cubrir12']; ?></td>
                                                                  <td ><?php echo $row6['sin_cubrir24']; ?></td>
                                    </tr>

                                <?php
                               
                               }
$query7="SELECT servicio.estado,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat,turnos12_miercoles.cant_mier12,turnos24_miercoles.cant_mier24,servicio.nombre_servicio,cobertura12.cubrir As cubrir12,cobertura24.cubrir As cubrir24, cobertura12.porcentaje12,cobertura24.porcentaje24,cobertura12.sin_cubrir As sin_cubrir12, cobertura24.sin_cubrir As sin_cubrir24 from servicio,supervisor,turnos12_miercoles,turnos24_miercoles,cobertura24,cobertura12 where servicio.numero_identif=supervisor.numero_identif and servicio.id_servicio=turnos12_jueves.id_servicio and servicio.id_servicio=turnos24_jueves.id_servicio and servicio.id_servicio=cobertura12.id_servicio and servicio.id_servicio=cobertura24.id_servicio and cobertura12.dia='miercoles' and cobertura24.dia='miercoles' and cobertura12.fecha_cob='$fecha'  and cobertura24.fecha_cob='$fecha'";
$resultado7=$conexion->query($query7);
while($row7=$resultado7->fetch_assoc())
{
  
  
  

 ?>

  
                                    <tr>
                                        <td >OSP</td>
                                        <td ><?php echo $row7['estado']; ?></td>
                                          <td ><?php echo $row7['nombre_sup']; ?>&nbsp;<?php echo $row7['apellido_pat']; ?>&nbsp;<?php echo $row7['apellido_mat']; ?></td>
                                            <td ><?php echo $row7['nombre_servicio']; ?></td>
                                             
                                                <td ><?php echo $row7['cant_mier12']; ?></td>
                                                  <td ><?php echo $row7['cant_mier24']; ?></td>
                                                    <td ><?php echo $row7['cant_mier12']; ?></td>
                                                      <td ><?php echo $row7['cant_mier24']; ?></td>
                                                        <td ><?php echo $row7['cubrir12']; ?></td>
                                                          <td ><?php echo $row7['cubrir24']; ?></td>
                                                            <td ><?php echo $row7['porcentaje12']; ?>%</td>
                                                              <td ><?php echo $row7['porcentaje24']; ?>%</td>
                                                                <td ><?php echo $row7['sin_cubrir12']; ?></td>
                                                                  <td ><?php echo $row7['sin_cubrir24']; ?></td>
                                    </tr>

                                <?php
                               
                               }

$query8="SELECT servicio.estado,supervisor.nombre_sup,supervisor.apellido_pat,supervisor.apellido_mat,turnos12_viernes.cant_vier12,turnos24_viernes.cant_vier24,servicio.nombre_servicio,cobertura12.cubrir As cubrir12,cobertura24.cubrir As cubrir24, cobertura12.porcentaje12,cobertura24.porcentaje24,cobertura12.sin_cubrir As sin_cubrir12, cobertura24.sin_cubrir As sin_cubrir24 from servicio,supervisor,turnos12_viernes,turnos24_viernes,cobertura24,cobertura12 where servicio.numero_identif=supervisor.numero_identif and servicio.id_servicio=turnos12_jueves.id_servicio and servicio.id_servicio=turnos24_jueves.id_servicio and servicio.id_servicio=cobertura12.id_servicio and servicio.id_servicio=cobertura24.id_servicio and cobertura12.dia='viernes' and cobertura24.dia='viernes' and cobertura12.fecha_cob='$fecha'  and cobertura24.fecha_cob='$fecha'";
$resultado8=$conexion->query($query8);
while($row8=$resultado8->fetch_assoc())
{
  
  
  

 ?>

  
                                    <tr>
                                        <td >OSP</td>
                                        <td ><?php echo $row8['estado']; ?></td>
                                          <td ><?php echo $row8['nombre_sup']; ?>&nbsp;<?php echo $row8['apellido_pat']; ?>&nbsp;<?php echo $row8['apellido_mat']; ?></td>
                                            <td ><?php echo $row8['nombre_servicio']; ?></td>
                                             
                                                <td ><?php echo $row8['cant_vier12']; ?></td>
                                                  <td ><?php echo $row8['cant_vier24']; ?></td>
                                                    <td ><?php echo $row8['cant_vier12']; ?></td>
                                                      <td ><?php echo $row8['cant_vier24']; ?></td>
                                                        <td ><?php echo $row8['cubrir12']; ?></td>
                                                          <td ><?php echo $row8['cubrir24']; ?></td>
                                                            <td ><?php echo $row8['porcentaje12']; ?>%</td>
                                                              <td ><?php echo $row8['porcentaje24']; ?>%</td>
                                                                <td ><?php echo $row8['sin_cubrir12']; ?></td>
                                                                  <td ><?php echo $row8['sin_cubrir24']; ?></td>
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
   <div id="footer"><span align=center>@CopyRight</div></span>
    </div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script src="../dist/js/sb-admin-2.js"></script>

     <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
