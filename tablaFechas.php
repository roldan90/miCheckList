<?php 
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_fecha, fecha FROM t_fechas";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table" id="tablaListadoFechas">
    <thead>
        <th>Id</th>
        <th>Fecha</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php 
        while($mostrar = mysqli_fetch_array($respuesta)){ 
            $idFecha = $mostrar['id_fecha'];
        ?>
        <tr>
            <td><?php echo $mostrar['id_fecha']; ?></td>
            <td><?php echo $mostrar['fecha']; ?></td>
            <td>
                <form action="servidor/eliminarFecha.php" method="post">
                    <input type="text" value="<?php echo $idFecha; ?>" required hidden>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        <?php
        } 
        ?>
    </tbody>
</table>