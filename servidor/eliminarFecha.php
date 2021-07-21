<?php
    $id = $_POST['idEliminar'];
    include "conexion.php";
    $conexion = conexion();

    $sql = "DELETE FROM t_fechas WHERE id_fecha = '$id'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo eliminar, estas chavo!!";
    }

?>