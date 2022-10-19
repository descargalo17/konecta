
<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$referencia=$_POST['referencia'];
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];
$stock=$_POST['stock'];
$peso=$_POST['peso'];
$fechaActual = date('Y-m-d');
$id;


$sql="INSERT INTO productos ( nombre, referencia, precio, peso, categoria, stock, fecha_creacion) VALUES ('$nombre','$referencia','$precio','$peso','$categoria','$stock','$fechaActual')";
if (strlen($nombre)>0) {
    if (strlen($referencia)>0) {
        if ($precio>0) {
            if ($peso>0) {
                $query= mysqli_query($con,$sql);
            }
            
        }
       
    }
    
}
if(isset($query)){
    Header("Location: productos.php");
    
}else {
    echo"error";
    
}
?>
