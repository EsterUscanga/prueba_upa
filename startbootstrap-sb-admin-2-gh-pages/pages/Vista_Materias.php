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
                        <h1 class="page-header">Vista Materias</h1>

                    </div>
                    <!-- /.col-lg-12 -->
                    
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Buscar</label>
                            <span class="glyphicon glyphicon-search"></span>
                            <select id="selectMateria" class="form-control">
                            <?php include '../php/getlistMaterias.php';?>
                            </select>
                        </div>
                        <label>

                        </label>


                    </div>
                    <label>

                    </label>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Nombre de la Materia</label>
                            <select id="disabledSelect" class="form-control">
                                <option> </option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <label for="disabledSelect">Carrera</label>
                            <select id="disabledSelect" class="form-control">
                                <option> </option>
                            </select>
                        </div>

                    </div>
                    <label>

                    </label>
                    <div>
                        <button type="button" class="btn btn-default btn-xs" height="20">
                            <span class="glyphicon glyphicon-ok"></span>
                            <div><label>Agregar</label></div>
                        </button>
                        <button type="button" class="btn btn-default btn-xs" height="20">
                            <span class="glyphicon glyphicon-remove"></span>
                            <div><label>Cancelar</label></div </button> <button type="button" class="btn btn-default btn-xs"
                                height="20">
                            <span class="glyphicon glyphicon-unchecked"></span>
                            <div><label>Modificar</label></div>
                        </button>
                        <button type="button" class="btn btn-default btn-xs" height="20">
                            <span class="glyphicon glyphicon-trash"></span>
                            <div><label>Borrar</label></div>
                        </button>

                    </div>
                    <label>
                    </label>


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

</body>

</html>