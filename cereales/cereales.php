<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cereales";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Panaderia la 10 - CRUD - cereales</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                <div class="volver"><a href="../index.html"><img src="https://cdn-icons-png.flaticon.com/512/32/32170.png"></a></div>
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>CEREALES</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_cereales" placeholder="cod cereales">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="imagen" placeholder="Imagen">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row["cod_cereales"]?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo "<img src=".$row['imagen']." style='width: 100px; height: 60px;'>"?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['precio']?></th>    
                                                <th><a href='actualizar.php?id=<?php echo $row['cod_cereales'] ?>' class="btn btn-primary">Editar</a></th>
                                                <th><a href='delete.php?id=<?php echo $row['cod_cereales'] ?>' class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>