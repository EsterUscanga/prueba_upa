<?php include '../php/CRUDCarreras.php';?>
<?php include 'layout/head.php';?>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <?php include 'layout/navegation.php';?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Vista Carrera</h1>

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-xs-5">
                        <label for="disabledSelect">Buscar</label>
                        <span class="glyphicon glyphicon-search"></span>
                        <?php echo $optionCarrera; ?>
                    </div>
                </div>
                <br>
                <form method="post" action="Vista_Carreras.php">
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Nombre de la Carrera</label>
                            <br>
                            <input type="text" name="nombre_carrera" class="form-control" id="regresar" onkeyup="this.value = this.value.toUpperCase();"
                                required></input>
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
    <script src="../js/scriptCarreras.js"></script>

</body>

</html>