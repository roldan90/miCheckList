<?php
    if (isset($_GET['idFecha']) && isset($_GET['fecha'])) {
        $link = "servidor/agregarTarea.php?idFecha=" . $_GET['idFecha'] . "&&fecha=" . $_GET['fecha'];
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Agregar listado de tareas</h1>
            <p class="lead">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="<?php echo $link; ?>" method="POST">
                            <label for="tarea">Escribe la tarea</label>
                            <textarea 
                                name="tarea" 
                                id="tarea" 
                                cols="30" 
                                rows="3"
                                required 
                                class="form-control"></textarea>
                            <br>
                            <button class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div id="tablaTareas"></div>
                    </div>
                </div>
            </p>
        </div>
    </div>
</div>
<?php include "footer.php" ?>
<script>
    $(document).ready(function(){
        $('#tablaTareas').load('tablaTareas.php');
    });
</script>
<?php 
    } else {
        header("location:index.php");
    } 
?>