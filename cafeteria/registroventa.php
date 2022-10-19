<?php
include("conexion.php");
$con=conectar();

$idProducto=$_POST['IdProducto'];
$cantidad=$_POST['cantidad'];
$query="SELECT stock, nombre FROM productos WHERE IdProducto=$idProducto";
$data=mysqli_query($con,$query);
$data->data_seek(0);
while ($fila = $data->fetch_assoc()) {
    if ($fila['stock'] <= 0) {
        echo "stock no disponible";
    }
    else {
        echo "stock disponible " ;
    
            echo " fila = " . $fila['nombre'] . "\n";
            echo " stock = " . $fila['stock'] . "\n";
            $newstock=$fila['stock']-$cantidad;
            echo "stock  disponible";
            echo  $newstock;
            $names=$fila['nombre'];
            $upte="UPDATE productos SET  stock='$newstock'  WHERE IdProducto='$idProducto'";
            $upt=mysqli_query($con,$upte);
            $id;
            $fecha=date('Y-m-d');
            $sql="INSERT INTO ventas  VALUES ('$id', ' $names' , '$cantidad','$fecha' )";
            $cre= mysqli_query($con,$sql);
            if($cre){

                Header("Location: venta.php");
                
            }else {
            }

    }



}









