<?php 
include("registro/conexion.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inico Usuario</title>
    <link rel="stylesheet" href="css/inicioadmin.css">
    <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>

    <div class="container">
        
        <div class="menu">
            <h1>Bienvenido a Invent.Soft</h1>
            <a href="login.php"style="text-decoration: none; color: white;"><p>Cerrar Sesión</p></a>
        </div>
       

        <div class="pagina" style="margin-top: 30px;">
        <table class="table table-border ">
                <thead>
                    <tr>
                        <th>Codigo Articulo</th>
                        <th>Grupo</th>
                        <th>Placa</th>
                        <th>Valor unitario</th>
                        <th>Ver mas sobre el Articulo</th>
                   
                        <tbody>
                            <?php
                        
                            $query = "SELECT * FROM articiculo";
                            $q = mysqli_query($conexion, $query);

                            while($fila=mysqli_fetch_array($q)){ ?>
                            <tr>
                                
                                <td><?php echo $fila['codigo_art'] ?></td>
                                <td><?php echo $fila['grupo'] ?></td>
                                <td><?php echo $fila['placa'] ?></td>
                                <td><?php echo $fila['valor_unitario'] ?></td>
                                <td><a href="descripcionar.php">Ver mas...</a>
                            </td>
                               
                            </tr>

                           
                            <?php } ?>
                            
                        </tbody>
                    </tr>
                </thead>

            </table>
            
        </div>
        </div>
       
                            
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

   
</body>
</html>
