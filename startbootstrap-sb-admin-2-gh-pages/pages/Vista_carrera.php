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
                        <select id="disabledSelect" class="form-control">
                            <option> </option>

                        </select>
                    </div>
                    <label>

                    </label>


                </div>
                <label>

                </label>
                <div class="row">
                    <div class="col-xs-5">
                        <label for="disabledSelect">Nombre de la Carrera</label>
                        <select id="disabledSelect" class="form-control">
                            <option> </option>
                        </select>
                    </div>

                </div>
                <br>
                <?php include 'layout/buttonCRUD.php'?>                     
     
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

</body>

</html>