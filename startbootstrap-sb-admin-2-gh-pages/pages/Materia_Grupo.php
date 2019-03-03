<?php include '../php/CRUDMateria_Grupo.php';?>
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
                        <h1 class="page-header">Materia Grupo</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <form action="Materia_Grupo.php" method="post">
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Materia</label>
                            <?php echo $selectMateria; ?>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Profesor</label>
                            <?php echo $selectMaestro; ?>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xs-5">
                            <label for="disabledSelect">Grupo</label>
                            <?php echo $selectGrupo; ?>
                        </div>
                    </div>

                    <div id="horario" onload="horario()">

                    </div>
                    
                    <br>
                    <?php include 'layout/horario.php'?>
                    <br>
                    <?php include 'layout/buttonCRUD.php'?>
                </form>

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
    <script src="../js/scriptMateria_Grupo.js"></script> 
    <script src="../js/horario.js"></script> 

</body>

</html>