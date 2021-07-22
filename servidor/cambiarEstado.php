<?php 

    $idFecha = $_GET['idFecha'];
    $estado = $_GET['estado'];
    $idTarea = $_GET['idTarea'];
    
    include "conexion.php";
    $conexion = conexion();

    $sql = "UPDATE t_tareas SET estado = '$estado' WHERE id_tarea = '$idTarea'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        $link = "../checkList.php?idFecha=" . $idFecha;
        header("location:" . $link);
    } else {
        echo "No pudo actualizarse, por tu culpa :(";
    }

?>