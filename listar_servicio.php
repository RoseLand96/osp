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

    <title>Servicios</title>
<link rel="shortcut icon" type="image/x-icon" href="image/admin.png"/>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">


    <script src="dist/css/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/css/sweetalert.css">

     <script src="dist/js/jquery-2.1.4.min.js" type="text/javascript"></script>

   
    <script src="dist/js/bootstrap.min.js"></script>

   <script src="dist/js/sweet-alert.js"></script>
  <link rel="stylesheet" type="text/css" href="dist/css/sweet-alert.css">

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
    width: 40%;
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
function mostrarOcultarLunes12(obj) {
  lunes12.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}  
</script>
<script type="text/javascript">
function mostrarOcultarMartes12(obj) {
  martes12.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}  
</script>
<script type="text/javascript">
function mostrarOcultarMiercoles12(obj) {
 miercoles12.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}  
</script>
<script type="text/javascript">
function mostrarOcultarJueves12(obj) {
  jueves12.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}  
</script>
<script type="text/javascript">
function mostrarOcultarViernes12(obj) {
  viernes12.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}  
</script>
<script type="text/javascript">
function mostrarOcultarSabado12(obj) {
  sabado12.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}
</script>  
<script type="text/javascript">
function mostrarOcultarDomingo12(obj) {
  domingo12.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}  

</script>

<script type="text/javascript">
function mostrarOcultarLunes24(obj) {
  lunes24.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}  
</script>
<script type="text/javascript">
function mostrarOcultarMartes24(obj) {
  martes24.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}  
</script>
<script type="text/javascript">
function mostrarOcultarMiercoles24(obj) {
  miercoles24.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}  
</script>
<script type="text/javascript">
function mostrarOcultarJueves24(obj) {
  jueves24.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}  
</script>
<script type="text/javascript">
function mostrarOcultarViernes24(obj) {
  viernes24.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}  
</script>
<script type="text/javascript">
function mostrarOcultarSabado24(obj) {
  sabado24.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}
</script>  
<script type="text/javascript">
function mostrarOcultarDomingo24(obj) {
  domingo24.style.visibility = (obj.checked) ? 'visible' : 'hidden';
}  

</script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



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

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                           
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a><i class="fa fa-dashboard fa-fw"></i>Administrar</a>
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
                    <h1 class="page-header">Listar servicios</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
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
      <form role="form" name="fvalida" action="insertar_servicio.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Agregar</label>
                                            <br>
                                            <br>
                                           <label>Nombre servicio <FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtnomb_servicio" value="">  

                                             <br>
                                             <br>
                                              <label>Estado<FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtestado" value=""> 
                                             <br>
                                             <br> 
                                             <label>Ciudad<FONT color="red">*</FONT></label>
                                             <input type="text" class="form-control" id="inputError" REQUIRED name="txtciudad" value="">  

                                             <br>
                                             <br>
                                              <label>numero de identificacion de supervisor<FONT color="red">*</FONT></label>
                                             <input type="number" class="form-control" id="inputError" REQUIRED name="txtnum_identif" value=""> 
                                             <br>
                                             <br> 
                                             <label>Escoger los dias de turnos 12X12 y agregar la cantidad de guardia necesitada por dia</label>
                                             <br>
                                             <br>
                                             <label>
                                                    <input type="checkbox" name="checklunes" value="" onclick="mostrarOcultarLunes12(this)">Lunes <input class="form-control"style="visibility:hidden;" id="lunes12" name="txtlunes12" type="number" size="8" maxlength="5"><br>  
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkmartes" value="" onclick="mostrarOcultarMartes12(this)">Martes <input class="form-control"style="visibility:hidden;" id="martes12" name="txtmartes12" type="number"size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkmiercoles" value="" onclick="mostrarOcultarMiercoles12(this)">Miercoles <input class="form-control"style="visibility:hidden;" id="miercoles12" name="txtmiercoles12" type="number" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkjueves" value="" onclick="mostrarOcultarJueves12(this)">Jueves <input class="form-control"style="visibility:hidden;" id="jueves12" name="txtjueves12" type="number" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                     <input type="checkbox" name="checkviernes" value="" onclick="mostrarOcultarViernes12(this)">Viernes <input class="form-control"style="visibility:hidden;" id="viernes12" name="txtviernes12" type="number" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                   <input type="checkbox" name="checksabado" value="" onclick="mostrarOcultarSabado12(this)">Sabado <input class="form-control"style="visibility:hidden;" id="sabado12" name="txtsabado12" type="number" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkdomingo" value="" onclick="mostrarOcultarDomingo12(this)">Domingo <input class="form-control"style="visibility:hidden;" id="domingo12" name="txtdomingo12" type="number" size="8" maxlength="5">
                                                </label>


                                            <br>
                                            <label>Escoger los dias de turnos 24X24 y agregar la cantidad de guardia necesitada por dia</label>
                                             <br>
                                             <label>
                                                    <input type="checkbox" name="checklunes" value="" onclick="mostrarOcultarLunes24(this)">Lunes <input class="form-control"style="visibility:hidden;" id="lunes24" name="txtlunes24" type="number" size="8" maxlength="5"><br>  
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkmartes" value="" onclick="mostrarOcultarMartes24(this)">Martes <input class="form-control"style="visibility:hidden;" id="martes24" name="txtmartes24" type="number" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkmiercoles" value="" onclick="mostrarOcultarMiercoles24(this)">Miercoles <input class="form-control"style="visibility:hidden;" id="miercoles24" name="txtmiercoles24" type="number" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkjueves" value="" onclick="mostrarOcultarJueves24(this)">Jueves <input class="form-control"style="visibility:hidden;" id="jueves24" name="txtjueves24" type="number" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                     <input type="checkbox" name="checkviernes" value="" onclick="mostrarOcultarViernes24(this)">Viernes <input class="form-control"style="visibility:hidden;" id="viernes24" name="txtviernes24" type="number" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                   <input type="checkbox" name="checksabado" value="" onclick="mostrarOcultarSabado24(this)">Sabado <input class="form-control"style="visibility:hidden;" id="sabado24" name="txtsabado24" type="number" size="8" maxlength="5">
                                                </label>
                                                <br>
                                                <label>
                                                    <input type="checkbox" name="checkdomingo" value="" onclick="mostrarOcultarDomingo24(this)">Domingo <input class="form-control"style="visibility:hidden;" id="domingo24" name="txtdomingo24" type="number" size="8" maxlength="5">
                                                </label>








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
                                                       
                            </div>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        
                                        <th>nombre servicioo</th>
                                        <th>estado</th>
                                         <th>ciudad</th>
                                        <th>numero identificación</th>
                                             <th>L 12</th>
                                               <th>M 12</th>
                                               <th>M 12</th>
                                               <th>J 12</th>
                                               <th>V 12</th>
                                               <th>S 12</th>
                                               <th>D 12</th>


                                               <th>L 24</th>
                                               <th>M 24</th>
                                               <th>M 24</th>
                                               <th>J 24</th>
                                               <th>V 24</th>
                                               <th>S 24</th>
                                               <th>D 24</th>

                                                <th>modificar</th>
                                               <th>eliminar</th>
                                    </tr>
                                </thead>
                                <tbody class="buscar">
                                    <?php
include('connexion.php');
$query="SELECT * from servicio,turnos12_lunes,turnos12_martes, turnos12_miercoles, turnos12_jueves,
 turnos12_viernes, turnos12_sabado,turnos12_domingo where servicio.id_servicio=turnos12_lunes.id_servicio
  and servicio.id_servicio=turnos12_martes.id_servicio and servicio.id_servicio=turnos12_miercoles.id_servicio
   and servicio.id_servicio=turnos12_jueves.id_servicio and servicio.id_servicio=turnos12_viernes.id_servicio 
   and servicio.id_servicio=turnos12_sabado.id_servicio and servicio.id_servicio=turnos12_domingo.id_servicio 
   ";
   $query2="SELECT * from servicio,turnos24_lunes,turnos24_martes,turnos24_miercoles,turnos24_jueves,turnos24_viernes,
 turnos24_sabado,turnos24_domingo
 where servicio.id_servicio=turnos24_lunes.id_servicio  and servicio.id_servicio=turnos24_martes.id_servicio 
   and servicio.id_servicio=turnos24_miercoles.id_servicio  and servicio.id_servicio=turnos24_jueves.id_servicio
    and servicio.id_servicio=turnos24_viernes.id_servicio and servicio.id_servicio=turnos24_sabado.id_servicio 
    and servicio.id_servicio=turnos24_domingo.id_servicio
   ";
$resultado=$conexion->query($query);
$resultado2=$conexion->query($query2);
while($row=$resultado->fetch_assoc())
{$row2=$resultado2->fetch_assoc();
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
   window.location.href = "eliminar_servicio.php?id_servicio=<?php echo $row['id_servicio']; ?>"; 
   swal("Suprimido!", "El registro ha sido suprimido.", "success");  
});
                 
        break;
  }
}
    </script>

                                    <tr>
                                       
                                        <td><?php echo $row['nombre_servicio']; ?></td>
                                            <td><?php echo $row['estado']; ?></td>
                                            <td><?php echo $row['ciudad']; ?></td>
                                            <td><?php echo $row['numero_identif']; ?></td>
                                            <td><?php echo $row['cant_lun12']; ?></td>
                                            <td><?php echo $row['cant_mar12']; ?></td>
                                            <td><?php echo $row['cant_mier12']; ?></td>
                                            <td><?php echo $row['cant_juev12']; ?></td>
                                            <td><?php echo $row['cant_vier12']; ?></td>
                                            <td><?php echo $row['cant_sab12']; ?></td>
                                            <td><?php echo $row['cant_dom12']; ?></td>

                                            <td><?php echo $row2['cant_lun24']; ?></td>
                                            <td><?php echo $row2['cant_mar24']; ?></td>
                                            <td><?php echo $row2['cant_mier24']; ?></td>
                                            <td><?php echo $row2['cant_juev24']; ?></td>
                                            <td><?php echo $row2['cant_vier24']; ?></td>
                                            <td><?php echo $row2['cant_sab24']; ?></td>
                                            <td><?php echo $row2['cant_dom24']; ?></td>
                                     <th class="center"><a href="modificar_servicio.php?id_servicio=<?php echo $row['id_servicio']; ?>" ><img src="image/modif.png"></a></th>
                                     <th class="center"><a  onclick="myFunction(0)"><img src="image/eliminar.png"></a></th>
                                        
                                    </tr>
                                   
                                    <?php
                               }
                               ?>    
                                </tbody>
                            </table>
        </div>
        <!-- /#page-wrapper -->
  

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