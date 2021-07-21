<table class="table" id="tablaListadoFechas">
    <thead>
        <th>Id</th>
        <th>Fecha</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
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
    </tbody>
</table>