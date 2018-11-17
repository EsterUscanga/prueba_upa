<?php include '../php/CRUDMaestros.php';?>
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
                        <h1 class="page-header">Vista Maestros</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Buscar</label>
                            <span class="glyphicon glyphicon-search"></span>
                            <?php echo $option; ?>                            
                        </div>
                    </div>
                    <br>
                    <form action="Vista_Profesores.php" method="post">
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Nombre</label>
                            <input type="text" class="form-control" id="regresarNombre"></input>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Apellido Paterno</label>
                            <input type="text" class="form-control" id="regresarApellidoPaterno"></input>
                        </div>
                    <br>
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Apellido Materno</label>
                            <input type="text" class="form-control" id="regresarApellidoMaterno"></input>
                        </div>
                    </div>
                    <br>
                    </label>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Correo Personal</label>
                            <input type="text" class="form-control" id="regresarCorreoPersonal"></input>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Correo Instutucional</label>
                            <input type="text" class="form-control" id="regresarCorreoInstitucional"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Grdo academico</label>
                            <input type="text" class="form-control" id="regresarGradoAcademico"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Especialidad</label>
                            <input type="text" class="form-control" id="regresarEspecialidad"></input>
                        </div>
                    </div>
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
    <script src="../js/scriptProfesores.js"></script>
    <script src="../js/cancel.js"></script>


</body>

</html>