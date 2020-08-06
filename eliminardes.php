<?php
    include("conexion.php");

    if (isset($_GET['id_descripcion'])){
        $id_descripcion = $_GET['id_descripcion'];
        $sql = "DELETE FROM descripcion1 where id_descripcion=$id_descripcion";
        $resultado = mysqli_query($conexion, $sql);
        if (!$resultado){
            die("no full");

        }
        
        header("Location: ../descripcionar.php");
    }
?>