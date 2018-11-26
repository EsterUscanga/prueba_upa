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
                            <input type="text" class="form-control" value="<?php if(isset($inputname)){echo $inputname;}?>" id="regresarNombre"onkeyup="this.value = this.value.toUpperCase();"></input>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Apellido Paterno</label>
                            <input type="text" class="form-control" value="<?php if(isset($inputpaterno)){echo $inputpaterno;}?>" id="regresarApellidoPaterno"onkeyup="this.value = this.value.toUpperCase();"></input>
                        </div>
                    <br>
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Apellido Materno</label>
                            <input type="text" class="form-control" value="<?php if(isset($inputmaterno)){echo $inputmaterno;}?>" id="regresarApellidoMaterno"onkeyup="this.value = this.value.toUpperCase();"></input>
                        </div>
                    </div>
                    <br>
                    </label>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Correo Personal</label>
                            <input type="text" class="form-control" value="<?php if(isset($inputpersonal)){echo $inputpersonal;}?>" id="regresarCorreoPersonal"onkeyup="this.value = this.value.toLowerCase(); "></input>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Correo Instutucional</label>
                            <input type="text" class="form-control" value="<?php if(isset($inputinstitucional)){echo $inputinstitucional;}?>"id="regresarCorreoInstitucional"onkeyup="this.value = this.value.toLowerCase();"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Grado academico</label>
                            <select class="form-control" id="regresarGradoAcademico">
                                <option value="LICENCIATURA" <?php if(isset($l)){if($l){echo 'selected="selected"';}}?>>LICENCIATURA</option>
                                <option value="MAESTRIA" <?php if(isset($l)){if($m){echo 'selected="selected"';}}?>>MAESTRIA</option>
                                <option value="DOCTORADO" <?php if(isset($l)){if($d){echo 'selected="selected"';}}?>>DOCTORADO</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Especialidad</label>
                            <input type="text" class="form-control" value="<?php if(isset($inputespecialidad)){echo $inputespecialidad;}?>" id="regresarEspecialidad"onkeyup="this.value = this.value.toUpperCase();"></input>
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