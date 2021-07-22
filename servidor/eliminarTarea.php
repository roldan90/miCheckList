<?php 
    $idTarea = $_POST['idEliminarTarea'];
    $idFecha = $_GET['idFecha'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "DELETE FROM t_tareas WHERE id_tarea = '$idTarea'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        $link = "../checkList.php?idFecha=" . $idFecha;
        header("location:" . $link);
    } else {
        echo "No se pudo eliminar :(";
    }
?>