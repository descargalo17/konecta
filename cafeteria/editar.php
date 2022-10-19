<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];
$sql="SELECT * FROM productos WHERE IdProducto='$id'";
$cat="SELECT idcategoria, categoria FROM categoria";
    $boot=mysqli_query($con,$cat);

$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
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
    <body>
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


<div class="container mt-5">
                    <form action="actualizar.php" method="POST">
                    
                                <input type="hidden" name="IdProducto" value="<?php echo $row['IdProducto']  ?>">
                                <h4>nombre</h4>
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>" required>
                                <h4>referencia</h4>
                                <input type="text" class="form-control mb-3" name="referencia" placeholder="referencia" value="<?php echo $row['referencia']  ?>"required>
                                <h4>precio</h4>
                                <input type="text" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>"required>
                                <h4>peso</h4>
                                <input type="text" class="form-control mb-3" name="peso" placeholder="peso" value="<?php echo $row['peso']  ?>"required>
                                <h4>categoria</h4>
                                <select name="categoria">
                                    <?php 
                                        while($datos = mysqli_fetch_array($boot))
                                        {
                                    ?>
                                            <option value="<?php echo $datos['categoria']?>"> <?php echo $datos['categoria']?> </option>
                                    <?php
                                        }
                                    ?> 
                                    </select>
                                    <br>
                                    <br>
                                    <h4>stock</h4>
                                <input type="text" class="form-control mb-3" name="stock" placeholder="stock" value="<?php echo $row['stock']  ?>"required>
                                
                                
                                
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>             



    </body>
</html>