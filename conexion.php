<?php

$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];
$conexion=mysqli_connect("localhost","root","12345678","pagina web");
$consulta="select * from login where usuario='$usuario' and contraseña='$contraseña' ";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	header("location:home.html");
}
else
{
	echo "error en la conexion";
}

?>