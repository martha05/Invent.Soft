<?php
  include "registro/conexion.php";
  
   error_reporting();
   
  $codigo_art=$_GET['id'];
  $cons="SELECT * from articiculo WHERE codigo_art = $codigo_art";
  $run=mysqli_query($conexion, $cons);

  while($row=mysqli_fetch_array($run)) {
   $codigo_art=$row[0];
   $grupo=$row[1];
   $placa=$row[2];
   $valor_unitario=$row[3];
  
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulo</title>
    <link rel="stylesheet" href="css/articulo.css">
</head>
<body>
<div class="containe">
    <div class="menu">
        <a href="inicioadmin.php" style="text-decoration: none;"><h2>Ingresar Articulo</h2></a>
    </div>
    <form class="formulario" action="registro/editar.php" method="POST">
        
        <div class="container">
            <div class="articulo">
            <h1>Articulo</h1> 
            <div class="input-cont">
                <input type="number" name="codigo" value="<?php echo $codigo_art?>" placeholder="Codigo Articulo"  id="input" required>      
            </div>   
            <div class="input-cont">
                <input type="number" name="grupo" value="<?php echo $grupo?>" placeholder="Grupo"  id="input"  required>      
            </div> 
            <div class="input-cont">
                <input type="number" name="placa" value="<?php echo $placa?>" placeholder="placa"  id="input"  required>      
            </div>
            <div class="input-cont">
                <input type="number" name="valor"  value="<?php echo $valor?>" placeholder="Valor Unitario"  id="input"required>      
            </div>
            <div class="input-cont">
                <input type="submit" id="botton" name="ingresar" value="EDITAR" id="input" required>      
            </div>
        </div>      
    </div>
</form>
</div>
</body>
</html>