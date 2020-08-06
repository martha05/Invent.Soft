
<?php
    include("conexion.php");

    if (isset($_GET['id_e'])){
        $id_e = $_GET['id_e'];
        $sql = "DELETE FROM especificacion where id_e=$id_e";
        $resultado = mysqli_query($conexion, $sql);
        if (!$resultado){
            die("no full");

        }
        
        header("Location: ../descripcionar.php");
    }
?>