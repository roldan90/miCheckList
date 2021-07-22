<?php 
    $idFecha = $_GET['idFecha'];
    $fecha = $_GET['fecha'];
    $tarea = $_POST['tarea'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_tareas (id_fecha, tarea, estado) VALUES ('$idFecha', '$tarea', 0)";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        $link = "../checkList.php?idFecha=" . $idFecha . "&fecha=" . $fecha;
        header("location:" . $link);
    } else {
        echo "No se ha podido agregar la tarea!!!";
    }
?>