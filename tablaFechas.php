
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
        ?>
        <tr>
            <td></td>
            <td></td>
            <td>
                <form action="servidor/eliminarFecha.php" method="post">
                    <input type="text" value="<?php  ?>" required hidden>
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