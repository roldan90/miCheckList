<?php include "header.php"; ?>

<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Agregar Fecha de listado</h1>
            <p class="lead">
                <form action="servidor/agregaFecha.php" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="fecha">Seleccionar Fecha</label>
                            <input type="date" required class="form-control" name="fecha">
                            <br>
                            <button class="btn btn-primary">Agregar</button>
                        </div>
                    </div>
                </form>
            </p>
        </div>
    </div>
</div>

<?php include "footer.php" ?>