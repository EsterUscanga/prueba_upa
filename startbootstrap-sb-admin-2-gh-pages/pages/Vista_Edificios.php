<?php include '../php/CRUDEdificios.php';?>
<?php include 'layout/head.php';?>

<div id="wrapper">
    <!-- Navigation -->
    <?php include 'layout/navegation.php';?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edificios</h1>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-xs-5">
                    <label for="disabledSelect">Buscar</label>
                    <span class="glyphicon glyphicon-search"></span>
                    <?php echo $selectEdificio; ?>
                </div>
            </div>
            <br>
            <form method="post" action="Vista_Edificios.php">
                <div class="row">
                    <div class="col-xs-5">

                        <label for="disabledSelect">Nombre del Edificio</label>
                        <br>
                        <input type="text" name="nombre_edificio" class="form-control" id="regresarEdificio"
                            onkeyup="this.value = this.value.toUpperCase();" required></input>
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
<script src="../js/scriptEdificios.js"></script>