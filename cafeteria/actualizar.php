<?php

include("conexion.php");
$con=conectar();
$IdProducto=$_POST['IdProducto'];
$nombre=$_POST['nombre'];
$referencia=$_POST['referencia'];
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];
$stock=$_POST['stock'];
$peso=$_POST['peso'];


$sql="UPDATE productos SET  nombre='$nombre',referencia='$referencia',precio='$precio',categoria='$categoria' ,stock='$stock' ,peso='$peso' WHERE IdProducto='$IdProducto'";
$query=mysqli_query($con,$sql);

 
if($query){
    Header("Location: productos.php");
}
?>