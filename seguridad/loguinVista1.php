<?php
@session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: ../docente/docenteAdministrarVista.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Compubuga Admin</title>


        <!-- Custom styles for this template-->
<!--        <link href="../css/estilos.css" rel="stylesheet">-->

    </head>

    <body id="page-top">

   
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4>Iniciar sesión</h4>
                        </div>
                        <div class="panel-body">

                            <form role="form" action="loguinControlador.php" method="post">
                                <input type="text" name="user" placeholder="usuario">
                                <br>
                                <input type="password" name="password" placeholder="Contraseña">
                                <br>
                                <input type="submit" value="INGRESAR">
                                <br>
                                <?php
                                if (isset($_SESSION['mensaje'])) {
                                    echo $_SESSION['mensaje'];
                                    unset($_SESSION['mensaje']);
                                }
                                ?>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of Page Wrapper -->


        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../js/demo/datatables-demo.js"></script>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>



    </body>

</html>

