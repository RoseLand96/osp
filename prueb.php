<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    
     <title>Listar administrador</title>


    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
     <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <script src="../dist/css/sweetalert.min.js"></script>
  

   
    <script src="../dist/js/bootstrap.min.js"></script>

  <script src="../dist/js/sweet-alert.js"></script>
  <link rel="stylesheet" type="text/css" href="../dist/css/sweet-alert.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
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
                          
                            <!-- /input-group -->
                        </li>
                        <li background="#ffffff">
                            <a><i class="fa fa-dashboard fa-fw"></i>Administación</a>
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
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <div class="input-group ">
                                    <button type="button" class="btn btn-default" id="myBtn">
                                    <i class="fa fa-plus"></i>&nbsp;Agregar
                                </button>
                            </span>
                            </div>
                              <div id="myModal" class="modal" tabindex="-1" >

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form role="form" action="insertar_admin.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Agregar</label>
                                            <br>
                                            <br>
                                            <label>Nombre<FONT color="red">*</FONT></label>
                                            <input type="text" class="form-control" id="inputError" REQUIRED  name="txtnombre" value="">
                                            <br>
                                            <br>
                                            <label>Apellido paterno<FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtappat" value="">

                                             <br>
                                             <br>
                                               
                                          <label>Apellido materno<FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtapmat" value="">


                                             <br>
                                             <br>
                                           <label>Usuario<FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtusuario" value="">  

                                             <br>
                                             <br>
                                              <label>Contraseña<FONT color="red">*</FONT></label>
                                             <input type="Password" class="form-control" id="inputError" REQUIRED name="txtpass" value="">
                                        </div>
                                       
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                        
                                    </form>
  </div>

</div>
                        </div>

                        <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                             <div class="input-group custom-search-form" style="width:25%" align="right">
                                <input type="search" id="filtrar"  class="form-control" placeholder="Buscar...">
                                 <span class="input-group-addon"><i class="fa fa-search"></i></span>                            
                            </div>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido paterno</th>
                                        <th>Apellido materno</th>
                                        <th>usuario</th>
                                        <th>contraseña</th>
                                         <th>editar</th>
                                        <th>borrar</th>
                                    </tr>
                                </thead>
                                <tbody class="buscar">
                                    <?php
include('connexion.php');
$query="SELECT * from administrador";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc())
{
    ?>
<script type="text/javascript">

    
function myFunction(x) {
  
    switch(x) {
  
      case 0: 
       swal({
  title: "Está seguro?",
  text: "No sera capaz de recuperar este registro!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Si, Eliminalo!",
  closeOnConfirm: false
},
function(){
   window.location.href = "eliminar_admin.php?id_admin=<?php echo $row['id_admin']; ?>"; 
   swal("Suprimido!", "El registro ha sido suprimido.", "success");  
});
                 
        break;
  }
}
function myFunction2(x) {
  
    switch(x) {
  
      case 0: 
       swal({
  title: "Está seguro?",
  text: "Quiere modificar este registro?!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Si, Modficalo!",
  closeOnConfirm: false
},
function(){
   window.location.href = "modificar_admin.php?id_admin=<?php echo $row['id_admin']; ?>"; 
   swal("Modificado!", "El registro ha sido modificado.", "success");  
});
                 
        break;
  }
}

</script>
                                    <tr>
                                        <td ><?php echo $row['nombre_admin']; ?></td>
                                        <td><?php echo $row['apellido_pat_admin']; ?></td>
                                        <td><?php echo $row['apellido_mat_admin']; ?></td>
                                        <td class="center"><?php echo $row['usuario']; ?></td>
                                            <td class="center"><?php echo $row['password']; ?></td>
                                     <th ><a href="modificar_admin.php?id_admin=<?php echo $row['id_admin']; ?>"  id="Btnmodif"><img src="../image/modif.png"></a></th>
                                     <th ><a  onclick="myFunction(0)"><img src="../image/eliminar.png"></a></th>
                                        
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
            <!-- /.row -->
           
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
