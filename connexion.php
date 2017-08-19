<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>
<?php
$conexion= new mysqli("rmspavs8mpub7dkq.chr7pe7iynqr.eu-west-1.rds.amazonaws.com", "q38dpb0unfwgo9ca", "o904u8n2xhtwpbdm", "s3my1t0wrg30n21j");
if($conexion)
{
	echo "conexion exito";
}else
{
	echo "conexion fracasada";
}

?>