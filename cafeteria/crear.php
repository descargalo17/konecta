<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT idcategoria, categoria FROM categoria";
    $query=mysqli_query($con,$sql);
?>


<!DOCTYPE html>
<html lang="es">
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




<div class="container mt-5">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" required>
                                    <input type="text" class="form-control mb-3" name="referencia" placeholder="referencia"required>
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio"required>
                                    <input type="text" class="form-control mb-3" name="peso" placeholder="peso en Gr"required>
                                    <select name="categoria" class="form-select"  >
                                    <?php 
                                        while($datos = mysqli_fetch_array($query))
                                        {
                                    ?>
                                            <option value="<?php echo $datos['categoria']?>"> <?php echo $datos['categoria']?> </option>
                                    <?php
                                        }
                                    ?> 
                                    </select>
                                    <br>
                                    
                                    <input type="text" class="form-control mb-3" name="stock" placeholder="stock">
                                   
                                  
                                    
                                    <input type="submit" class="btn btn-primary"required>

                                    
                                </form>
                        </div>






<script src="js\bootstrap.bundle.min.js"></script>
</body>
</html>