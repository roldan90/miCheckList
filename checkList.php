<?php
    if (isset($_GET['idFecha']) && isset($_GET['fecha'])) {
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Agregar listado de tareas</h1>
            <p class="lead">
            </p>
        </div>
    </div>
</div>
<?php include "footer.php" ?>
<script>
    $(document).ready(function(){
        //$('#tablaFechas').load('tablaFechas.php');
    });
</script>
<?php 
    } else {
        header("location:index.php");
    } 
?>