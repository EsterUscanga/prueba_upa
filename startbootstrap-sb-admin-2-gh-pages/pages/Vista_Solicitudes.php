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
                    <h1 class="page-header">Solicitudes de cambio</h1>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Grupo</label>
                            <input class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Materia</label>
                            <input class="form-control">

                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <textarea class="form-control" rows="4" col="5" maxlength="250"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
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