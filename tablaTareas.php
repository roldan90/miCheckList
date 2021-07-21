<?php
    $idFecha = $_GET['idFecha'];
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_tarea, tarea, estado FROM t_tareas WHERE id_fecha = '$idFecha'";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table">
    <thead>
        <th>#</th>
        <th>Tarea</th>
        <th>Estado</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
    <?php
        $contador = 1; 
        while($mostrar = mysqli_fetch_row($respuesta)) {  
    ?>
        <tr>
            <td><?php echo $contador ++; ?></td>
            <td><?php echo $mostrar[1]; ?></td>
            <td>
                <?php if ($mostrar[2] == 0) { ?>
                    <a class="btn btn-info" href="#">Sin terminar</a>
                <?php } else { ?>
                    <a class="btn btn-success" href="#">Terminada</a>
                <?php } ?>
            </td>
            <td>
                <form action="servidor/eliminarTarea.php" method="POST">
                    <input type="text" hidden value="<?php echo $mostrar[0]; ?>">
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>