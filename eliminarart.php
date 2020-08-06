<?php
    include("conexion.php");

    if (isset($_GET['codigo_art'])){
        $codigo_art = $_GET['codigo_art'];
        $sql = "DELETE FROM articiculo where codigo_art=$codigo_art";
        $resultado = mysqli_query($conexion, $sql);
        if (!$resultado){
            die("no full");

        }
        
        header("Location: ../inicioadmin.php");
    }
?>