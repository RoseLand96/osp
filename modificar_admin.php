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
                    <h1 class="page-header">Modificar administrador</h1>
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
$id=$_GET['id_admin'];
$query="SELECT * from administrador where id_admin='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();

   ?>
   <script type="text/javascript">

    
function myFunction(x) {
  
    switch(x) {
  
      case 0: 
       swal({
  title: "Está seguro?",
  text: "Quieres modificar el registro!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Si, Eliminalo!",
  closeOnConfirm: false
},
function(){
   window.location.href = "proceso_modificar_admin.php?id_admin=<?php echo $row['id_admin']; ?>"; 
   swal("Suprimido!", "El registro ha sido suprimido.", "success");  
});
                 
        break;
  }
}


</script>
                                    <form role="form" action="proceso_modificar_admin.php?id_admin=<?php echo $row['id_admin'];?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nombre<FONT color="red">*</FONT></label>
                                            <input type="text" class="form-control" id="inputError" REQUIRED  name="txtnombre" value="<?php echo $row['nombre_admin'];?>">
                                            <br>
                                            <br>
                                            <label>Apellido paterno<FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtappat" value="<?php echo $row['apellido_pat_admin'];?>">

                                             <br>
                                             <br>
                                               
                                          <label>Apellido materno<FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtapmat" value="<?php echo $row['apellido_mat_admin'];?>">


                                             <br>
                                             <br>
                                           <label>Usuario<FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtusuario" value="<?php echo $row['usuario'];?>">  

                                             <br>
                                             <br>
                                              <label>Contraseña<FONT color="red">*</FONT></label>
                                             <input type="Password" class="form-control" id="inputError" REQUIRED name="txtpass" value="<?php  echo $row['password'];?>">
                                        </div>
                                       
                                        <button type="submit"  class="btn btn-default">Enviar</button>
                                        
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