    <?php
    $con = mysqli_connect("localhost","root","","enterprise_med");
    echo "<br><center>";
    if(!$con)
    {
        die('No se establecio la conexion con el servidor:'.mysqli_error($con));
    }
    $sql="DELETE FROM pedidos WHERE id_producto='{$_POST["id_productos"]}'";
    if (!mysqli_query($con,$sql,MYSQLI_USE_RESULT))
    {
        die('Error:'.mysqli_error($con));
    }echo "registro borrador<br><br>";
    echo"<a href='borrar_datos.html'> Regresar</a>";
    mysqli_close($con);
    ?>