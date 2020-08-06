
<?php
    include("conexion.php");

    if (isset($_GET['id_u'])){
        $id_u = $_GET['id_u'];
        $sql = "DELETE FROM ubicacion where id_u=$id_u";
        $resultado = mysqli_query($conexion, $sql);
        if (!$resultado){
            die("no full");

        }
        
        header("Location: ../descripcionar.php");
    }
?>