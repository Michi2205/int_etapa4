<?php
$con = mysqli_connect("localhost","root","","enterprise_med");
if(!$con)
{
    die('No se estableció la conexión con el servidor:'.mysqli_error());
}
$sql="INSERT INTO clientes
VALUES('$_POST[id_cliente]','$_POST[nombre_cli]','$_POST[apellido_cli]','$_POST[numero_TEL]','$_POST[Direccion]')";
if (!mysqli_query($con, $sql, MYSQLI_USE_RESULT))
{
die('Error: ' .mysqli_error($con));
}
echo "<center>";
echo "<1 registro agregado<br>";
echo "<a href='consultartabla.php'> Ver registros</a>";
mysqli_close($con);
?>