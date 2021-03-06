<?php include '../php/CRUDGrupos.php';?>
<?php include 'layout/head.php';?>

<div id="wrapper">
    <!-- Navigation -->
    <?php include 'layout/navegation.php';?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Grupos</h1>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-xs-5">
                    <label for="disabledSelect">Buscar</label>
                    <span class="glyphicon glyphicon-search"></span>
                    <?php echo $selectGrupo; ?>
                </div>
            </div>
            <br>
            <form method="post" action="Vista_Grupos.php">
                <div class="row">
                    <div class="col-xs-5">

                        <label for="disabledSelect">Nombre del Grupo</label>
                        <br>
                        <input type="text" name="nombre_grupo" class="form-control" id="regresarGrupo"
                            onkeyup="this.value = this.value.toUpperCase();" required></input>
                        <br>
                        <label for="disabledSelect">Nombre de la carrera</label>
                        <br>
                        <?php echo $optionCarrera;?>
                        <br>
                        <?php include 'layout/buttonCRUD.php'?>
                    </div>
                </div>
            </form>
            <br>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<script src="../js/scriptGrupos.js"></script>