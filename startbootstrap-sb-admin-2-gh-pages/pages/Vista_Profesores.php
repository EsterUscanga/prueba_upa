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
                            <input type="text" class="form-control" id="regresarNombre"onkeyup="this.value = this.value.toUpperCase();"></input>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Apellidos</label>
                            <input type="text" class="form-control" id="regresarApellido"onkeyup="this.value = this.value.toUpperCase();"></input>
                        </div>
                    </div>
                    <br>
                    </label>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Correo Personal</label>
                            <input type="text" class="form-control" id="regresarCorreoPersonal"onkeyup="this.value = this.value.toLowerCase(); "></input>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Correo Instutucional</label>
                            <input type="text" class="form-control" id="regresarCorreoInstitucional"onkeyup="this.value = this.value.toLowerCase();"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Grado academico</label>
                            <input type="text" class="form-control" id="regresarGradoAcademico"onkeyup="this.value = this.value.toLowerCase();"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Especialidad</label>
                            <input type="text" class="form-control" id="regresarEspecialidad"onkeyup="this.value = this.value.toUpperCase();"></input>
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

</body>

</html>