<?php

include("conexion.php");
$con=conectar();


$IdProducto=$_GET['id'];


$sql="DELETE FROM productos  WHERE IdProducto='$IdProducto'";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: productos.php");
}

?>
