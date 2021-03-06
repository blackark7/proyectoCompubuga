<?php
include_once "../componets/enrutamientoSeguridad.php";
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

        <!-- Custom fonts for this template-->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
              rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar menu despegable   -->
            <?php
            include_once '../componets/menu.php';
            ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    <?php
                    include_once '../componets/navBar.php';
                    ?>
                    <div class="container">
                        <h1>MATERIAS</h1>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Lista de Materias</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Materia</th>
                                                <th>Carrera asignada</th>
                                                <th>Acciones</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Materia</th>
                                                <th>Carrera asignada</th>
                                                <th>Acciones</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            include_once "materiasModelo.php";
                                            $materiasModelo = new materiasModelo();
                                            $result = $materiasModelo->mostrarTodos();
                                            $contador = 0;
                                            while ($fila = mysqli_fetch_array($result)) {

                                                if ($fila != NULL) {
                                                    $contador++;
                                                    echo '<tr>
                                            <td>' . $fila['nombre'] . '</td>
                                            <td>' . $fila['carrera'] . '</td>


                                            <td>
                                               <a href="#" onclick="eliminarModal(' . $fila['id'] . ')" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
                                                <i class="fas fa-trash"></i>
                                                </a>
                                               </a>
                                                <a href="materiasModificarVista.php?id=' . $fila['id'] . '" class="btn btn-info btn-circle btn-sm" data-toggle="tooltip" data-placement="bottom" title="Modificar">
                                                <i class="fas fa-edit"></i>
                                                </a>

                                            </td>

                                        </tr>';
                                                }
                                            }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of Main Content -->


                <!-- Footer -->
                <?php
                include_once '../componets/footer.php';
                ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">�</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <!--        //MODAL DE ELIMINAR-->
        <div class="modal fade" id="mEliminar" tabindex="-1" role="dialog" aria-labelledby="mEliminar">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <!--<h4 class="modal-title" id="myModalLabel">Eliminar</h4>-->
                    </div>
                    <form method="post" action="materiasEliminarControlador.php" >
                        <input type="hidden" name="id" id="idUsuario">
                        <div class="modal-body">
                            <h3>¿Esta seguro que desea eliminar la materia?</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">SI</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

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

        <!--        //MODAL DE ELIMINAR-->
        <script type="text/javascript">
            function eliminarModal(v) {
                var valor = v;
                document.getElementById('idUsuario').value = v;
                $('#mEliminar').modal('show')
            }
        </script>


    </body>

</html>

