<?php
    $fecha = $_POST['fecha'];
    include "conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_fechas (fecha) VALUES ('$fecha')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo agregar nada !";
    }
?>