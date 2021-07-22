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
        while($mostrar = mysqli_fetch_array($respuesta)) {  
    ?>
        <tr>
            <td><?php echo $contador ++; ?></td>
            <td><?php echo $mostrar['tarea']; ?></td>
            <td>
                <?php 
                    if ($mostrar['estado'] == 0) {
                        $link = "servidor/cambiarEstado.php?idFecha=" . $_GET['idFecha'] . "&&fecha=" . $_GET['fecha'] . "&&estado=";
                ?>
                    <a class="btn btn-info" href="<?php echo $link. "0"; ?>">Sin terminar</a>
                <?php } else { ?>
                    <a class="btn btn-success" href="<?php echo $link. "1"; ?>">Terminada</a>
                <?php } ?>
            </td>
            <td>
                <form action="servidor/eliminarTarea.php" method="POST">
                    <input type="text" hidden value="<?php echo $mostrar['id_tarea']; ?>">
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>