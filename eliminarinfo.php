
<?php
    include("conexion.php");

    if (isset($_GET['id_usu'])){
        $id_usu = $_GET['id_usu'];
        $sql = "DELETE FROM usuarios where id_usu=$id_usu";
        $resultado = mysqli_query($conexion, $sql);
        if (!$resultado){
            die("no full");

        }
        
        header("Location: ../listai.php");
    }
?>