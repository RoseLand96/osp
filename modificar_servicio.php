<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agregar administrador</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/modificar_icon.png"/>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    

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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href=""><i class="fa fa-dashboard fa-fw"></i>Administación</a>
                        </li>
                         <li>
                            <a href="listar_admin.php"><i class="fa fa-bar-chart-o fa-fw"></i>Administrador</a>
                                                      <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="listar_consultador.php"><i class="fa fa-bar-chart-o fa-fw"></i>Consultador de reporte</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="listar_supervisor.php"><i class="fa fa-wrench fa-fw"></i> Supervisor</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="listar_servicio.php"><i class="fa fa-sitemap fa-fw"></i> Servicios</a>
                                                                                            
                                 <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Modificar servicio</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            todos los campos con astericos son obligatorios
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                              
<?php
include('connexion.php');
$id=$_GET['id_servicio'];
$query="SELECT * from servicio,turnos12_lunes,turnos12_martes, turnos12_miercoles, turnos12_jueves, turnos12_viernes, turnos12_sabado, turnos12_domingo ,turnos24_lunes,turnos24_martes,turnos24_miercoles,turnos24_jueves,turnos24_viernes,turnos24_sabado,turnos24_domingo where servicio.id_servicio=turnos12_lunes.id_servicio and servicio.id_servicio=turnos12_martes.id_servicio and servicio.id_servicio=turnos12_miercoles.id_servicio and servicio.id_servicio=turnos12_jueves.id_servicio and servicio.id_servicio=turnos12_viernes.id_servicio and servicio.id_servicio=turnos12_sabado.id_servicio and servicio.id_servicio=turnos12_domingo.id_servicio and servicio.id_servicio=turnos24_lunes.id_servicio  and servicio.id_servicio=turnos24_martes.id_servicio and servicio.id_servicio=turnos24_miercoles.id_servicio  and servicio.id_servicio=turnos24_jueves.id_servicio and servicio.id_servicio=turnos24_viernes.id_servicio and servicio.id_servicio=turnos24_sabado.id_servicio and servicio.id_servicio=turnos24_domingo.id_servicio and servicio.id_servicio='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();

   ?>
                                    <form role="form" action="proceso_modificar_servicio.php?id_servicio=<?php echo $row['id_servicio'];?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                          <label>Nombre servicio<FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtnomb_servicio" value="<?php echo $row['nombre_servicio'];?>">  

                                             <br>
                                             <br>
                                              <label>Estado<FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtestado" value="<?php echo $row['estado'];?>"> 
                                             <br>
                                             <br> 
                                             <label>Ciudad<FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtciudad" value="<?php echo $row['ciudad'];?>">  

                                             <br>
                                             <br>
                                              <label>numero de identificacion de supervisor<FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtnum_identif" value="<?php echo $row['numero_identif'];?>"> 
                                             <br>
                                             <br> 
                                             <label>Escoger los dias de turnos 12X12 y agregar la cantidad de guardia necesitada por dia</label>
                                             <br>
                                             <br>
                                             <label>
                                                    <input type="checkbox" name="checklunes" value="" onclick="mostrarOcultarLunes12(this)">Lunes <input class="form-control"id="lunes12" name="txtlunes12" value="<?php echo $row['cant_lun12'];?>" type="number" size="8" maxlength="5"><br>  
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkmartes" value="" onclick="mostrarOcultarMartes12(this)">Martes <input class="form-control" value="<?php echo $row['cant_mar12'];?>" id="martes12" name="txtmartes12" type="number"size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkmiercoles" value="" onclick="mostrarOcultarMiercoles12(this)">Miercoles <input class="form-control"value="<?php echo $row['cant_mier12'];?>" id="miercoles12" name="txtmiercoles12" type="number" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkjueves" value="" onclick="mostrarOcultarJueves12(this)">Jueves <input class="form-control"value="<?php echo $row['cant_juev12'];?>" id="jueves12" name="txtjueves12" type="text" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                     <input type="checkbox" name="checkviernes" value="" onclick="mostrarOcultarViernes12(this)">Viernes <input class="form-control"value="<?php echo $row['cant_vier12'];?>" id="viernes12" name="txtviernes12" type="text" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                   <input type="checkbox" name="checksabado" value="" onclick="mostrarOcultarSabado12(this)">Sabado <input class="form-control"value="<?php echo $row['cant_sab12'];?>" id="sabado12" name="txtsabado12" type="text" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkdomingo" value="" onclick="mostrarOcultarDomingo12(this)">Domingo <input class="form-control"value="<?php echo $row['cant_dom12'];?>" id="domingo12" name="txtdomingo12" type="text" size="8" maxlength="5">
                                                </label>


                                            <br>
                                            <label>Escoger los dias de turnos 24X24 y agregar la cantidad de guardia necesitada por dia</label>
                                             <br>
                                             <label>
                                                    <input type="checkbox" name="checklunes" value="" onclick="mostrarOcultarLunes24(this)">Lunes <input class="form-control"value="<?php echo $row['cant_lun24'];?>" id="lunes24" name="txtlunes24" type="text" size="8" maxlength="5"><br>  
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkmartes" value="" onclick="mostrarOcultarMartes24(this)">Martes <input class="form-control"value="<?php echo $row['cant_mar24'];?>" id="martes24" name="txtmartes24" type="text" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkmiercoles" value="" onclick="mostrarOcultarMiercoles24(this)">Miercoles <input class="form-control"value="<?php echo $row['cant_mier24'];?>" id="miercoles24" name="txtmiercoles24" type="text" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkjueves" value="" onclick="mostrarOcultarJueves24(this)">Jueves <input class="form-control"value="<?php echo $row['cant_juev24'];?>" id="jueves24" name="txtjueves24" type="text" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                     <input type="checkbox" name="checkviernes" value="" onclick="mostrarOcultarViernes24(this)">Viernes <input class="form-control"value="<?php echo $row['cant_vier12'];?>" id="viernes24" name="txtviernes24" type="text" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                   <input type="checkbox" name="checksabado" value="" onclick="mostrarOcultarSabado24(this)">Sabado <input class="form-control"value="<?php echo $row['cant_sab24'];?>" id="sabado24" name="txtsabado24" type="text" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkdomingo" value="" onclick="mostrarOcultarDomingo24(this)">Domingo <input class="form-control"value="<?php echo $row['cant_dom24'];?>" id="domingo24" name="txtdomingo24" type="text" size="8" maxlength="5">
                                                </label>

                                        </div>
                                       
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                        
                                    </form>
                                </div>
                               
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
   <div id="footer"><span align=center></div></span>
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

</body>

</html>