<meta charset="8">
<html>
    <head>
        <title>Consular clientes</title>
         <link rel="stylesheet" type="text/css" herf="CSS.css">
         <meta charset="utf-8"/>
<style type="text/css"></style>
</head>
<body>
<center>
<?php
$con = mysqli_connect("localhost", "root", "","enterprise_med");
$resultado = mysqli_query($con, "select * from clientes");
if($resultado === FALSE) {
echo "fallo";
die (mysqli_error());
}
echo "<a href='consulta_alumnos.php'> Actualizar tabla</a>";
echo "<h1>Consulta de la tabla Datos</h1>";
echo "<table border='1>
<tr>
<th> Matricula </th>
<th> Nombre</th>
<th> Apellidos</th>
<th>Edad</th>
</tr>";
while($row=mysqli_fetch_array($resultado))
{
echo "<tr>";
echo "<td align=center>" .$row["id_cliente"] ."</td>";
echo "<td>".$row['nombre_cli']."</td>";
 echo "<td>".$row['apellido_cli'] ."</td>";
echo "<td align=center>".$row['edad']. "</td>";
echo "</tr>" ;
}
echo "</table>";
$registros=mysqli_num_rows($resultado);
echo "<br>Registros: " .$registros;
mysqli_close($con);
?>
</center></body></html>