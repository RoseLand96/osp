<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php 
include('connexion.php');
		$usuario=$_REQUEST['txtusuario'];
		$password=$_REQUEST['txtpass'];
	
/*mysql_connect('localhost', 'root', '1234', "unapp") or die ("no conection".mysql_error());
mysql_select_db('unapp') or die("Error al seleccionar la base de datos:".mysql_error());*/

$query="SELECT * from administrador where usuario='".$usuario."'";
$query2="SELECT * from consultador_rep where usuario='".$usuario."'";
$resultado=$conexion->query($query);
$resultado2=$conexion->query($query2);
if($row=$resultado->fetch_assoc())
{
    if($row['password']==$password)
    {
    	session_start();
    	$_SESSION["txtusuario"]=$usuario;
    	$_SESSION["txtpass"]=$password;
    	header("Location: listar_admin.php");
    }else
    {
    	header("Location: index.php");

    }
}else if($row=$resultado2->fetch_assoc())
{
   if($row['password']==$password)
    {
        session_start();
        $_SESSION["txtusuario"]=$usuario;
        $_SESSION["txtpass"]=$password;
        header("Location: reporte.php");
    }else
    {
        header("Location: index.php");

    }
}
else
{
    	header("Location: index.php");
}

?>