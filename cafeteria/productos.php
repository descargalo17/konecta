<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM productos";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAFETERIA</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body  >
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KONECTA COFFEE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="productos.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="venta.php">venta </a>
        </li>
       
       
        
      </ul>
      
    </div>
  </div>
</nav>




<a href="crear.php" class="btn btn-success">Crear Producto</a>





<div class="container mt-5">
                    <div class="row"> 

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>REFERENCIA</th>
                                        <th>PRECIO</th>
                                        <th>PESO</th>
                                        <th>CATEGORIA</th>
                                        <th>STOCK</th>
                                        <th>FECHA DE CREACION</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdProducto']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['referencia']?></th>
                                                <th><?php  echo $row['precio']?></th>  
                                                <th><?php  echo $row['peso']?></th>
                                                <th><?php  echo $row['categoria']?></th>
                                                <th><?php  echo $row['stock']?></th>
                                                <th><?php  echo $row['fecha_creacion']?></th>   
                                                <th><a href="editar.php?id=<?php echo $row['IdProducto'] ?>" class="btn btn-info">Editar</a>  </th>
                                                <th><a href="eliminar.php?id=<?php echo $row['IdProducto'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
  
    


    <script src="js\bootstrap.bundle.min.js"></script>
</body>
</html>