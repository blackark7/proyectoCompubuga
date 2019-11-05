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
                        <h1>DOCENTES</h1>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Lista de Docentes</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Carrera</th>
                                                <th>Telefono</th>
                                                <th>Acciones</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Carrera</th>
                                                <th>Telefono</th>
                                                <th>Acciones</th>

                                            </tr>
                                        </tfoot>

                                        <tbody>
                                            <?php
                                            include_once "docenteModelo.php";
                                            $docenteModelo = new docenteModelo();
                                            $result = $docenteModelo->mostrarTodos();
                                            $contador = 0;
                                            while ($fila = mysqli_fetch_array($result)) {

                                                if ($fila != NULL) {
                                                    $contador++;


                                                    echo '<tr>
                                            <td> <img src="' . $fila['foto'] . '" class="rounded float-left" width="80" height="80" ></td>
                                            <td>' . $fila['nombre'] . '</td>
                                            <td>' . $fila['carrera'] . '</td>
                                            <td>' . $fila['telefono'] . '</td>
                
                <td>
               <a href="#" onclick="eliminarModal(' . $fila['id'] . ')" class="btn btn-danger btn-circle btn-sm" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
                <i class="fas fa-trash"></i>
                </a>
                <a href="#" class="btn btn-info btn-circle btn-sm" data-toggle="tooltip" data-placement="bottom" title="Modificar">
                <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-success  btn-circle btn-sm" data-toggle="modal" data-target="#modalAsignar" title="Asignar Materia">
                <i class="fas fa-list-alt"></i>
                </a>
                <button class="btn btn-warning  btn-circle btn-sm" data-toggle="modal" data-target="#exampleModal" title="Asignar Disponibilidad">
                <i class="fas fa-clock"></i>
                </button>
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


        <!-- Modal ASIGNAR DISPONIBILIDAD -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog  modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Asignar disponibilidad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="asignarDisponibilidadDocenteControlador.php" method="post">
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Lunes</th>
                                        <th scope="col">Martes</th>
                                        <th scope="col">Miercoles</th>
                                        <th scope="col">Jueves</th>
                                        <th scope="col">Viernes</th>
                                        <th scope="col">Sabado</th>
                                        <th scope="col">Domingo</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><input type="checkbox" name="ml" class="form-check-input" id="exampleCheck1"> Mañana
                                        </td>
                                        <td><input type="checkbox" name="mma" class="form-check-input" id="exampleCheck1"> Mañana
                                        </td>
                                        <td><input type="checkbox" name="mmi" class="form-check-input" id="exampleCheck1"> Mañana
                                        </td>
                                        <td><input type="checkbox" name="mj" class="form-check-input" id="exampleCheck1"> Mañana
                                        </td>
                                        <td><input type="checkbox" name="mv" class="form-check-input" id="exampleCheck1"> Mañana
                                        </td>
                                        <td><input type="checkbox" name="ms" class="form-check-input" id="exampleCheck1"> Mañana
                                        </td>
                                        <td><input type="checkbox" name="md" class="form-check-input" id="exampleCheck1"> Mañana
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="tl" class="form-check-input" id="exampleCheck1"> Tarde</td>
                                        <td><input type="checkbox" name="tm" class="form-check-input" id="exampleCheck1"> Tarde</td>
                                        <td><input type="checkbox" name="tmi" class="form-check-input" id="exampleCheck1"> Tarde
                                        </td>
                                        <td><input type="checkbox" name="tj" class="form-check-input" id="exampleCheck1"> Tarde</td>
                                        <td><input type="checkbox" name="tv" class="form-check-input" id="exampleCheck1"> Tarde</td>
                                        <td><input type="checkbox" name="ts" class="form-check-input" id="exampleCheck1"> Tarde</td>
                                        <td><input type="checkbox" name="td" class="form-check-input" id="exampleCheck1"> Tarde</td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="nl" class="form-check-input" id="exampleCheck1"> Noche</td>
                                        <td><input type="checkbox" name="nm" class="form-check-input" id="exampleCheck1"> Noche</td>
                                        <td><input type="checkbox" name="nmi" class="form-check-input" id="exampleCheck1"> Noche
                                        </td>
                                        <td><input type="checkbox" name="nj" class="form-check-input" id="exampleCheck1"> Noche</td>
                                        <td><input type="checkbox" name="nv" class="form-check-input" id="exampleCheck1"> Noche</td>
                                        <td><input type="checkbox" name="ns" class="form-check-input" id="exampleCheck1"> Noche</td>
                                        <td><input type="checkbox" name="nd" class="form-check-input" id="exampleCheck1"> Noche</td>
                                    </tr>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal ASIGNAR MATERIA-->
        <div class="modal fade" id="modalAsignar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog  modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Asignar materia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="asignarMateriaDocenteControlador.php" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Dia de la semana</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="diaSemana">
                                    <option value="lunes">Lunes</option>
                                    <option value="martes">Martes</option>
                                    <option value="miercoles">Miercoles</option>
                                    <option value="jueves">Jueves</option>
                                    <option value="viernes">Viernes</option>
                                    <option value="sabado">Sabado</option>
                                    <option value="domingo">Domingo</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Materia</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="materia">
                                    <option value="webmaster">Web Master</option>
                                    <option value="excel">Excel</option>
                                    <option value="informatica">Informatica</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Hora inicio</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="horaInicio">
                                    <option value="7">7</option>
                                    <option value="7.30">7.30</option>
                                    <option value="8">8</option>
                                    <option value="8.30">8.30</option>
                                    <option value="9">9</option>
                                    <option value="9.30">9.30</option>
                                    <option value="10">10</option>
                                    <option value="10.30">10.30</option>
                                    <option value="11">11</option>
                                    <option value="11.30">11.30</option>
                                    <option value="12">12</option>
                                    <option value="12.30">12.30</option>
                                    <option value="13">13</option>
                                    <option value="13.30">13.30</option>
                                    <option value="14">14</option>
                                    <option value="14.30">14.30</option>
                                    <option value="15">15</option>
                                    <option value="15.30">15.30</option>
                                    <option value="16">16</option>
                                    <option value="16.30">16.30</option>
                                    <option value="17">17</option>
                                    <option value="17.30">17.30</option>
                                    <option value="18">18</option>
                                    <option value="18.30">18.30</option>
                                    <option value="19">19</option>
                                    <option value="19.30">19.30</option>
                                    <option value="20">20</option>
                                    <option value="20.30">20.30</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Hora fin</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="horaFin">
                                    <option value="7">7</option>
                                    <option value="7.30">7.30</option>
                                    <option value="8">8</option>
                                    <option value="8.30">8.30</option>
                                    <option value="9">9</option>
                                    <option value="9.30">9.30</option>
                                    <option value="10">10</option>
                                    <option value="10.30">10.30</option>
                                    <option value="11">11</option>
                                    <option value="11.30">11.30</option>
                                    <option value="12">12</option>
                                    <option value="12.30">12.30</option>
                                    <option value="13">13</option>
                                    <option value="13.30">13.30</option>
                                    <option value="14">14</option>
                                    <option value="14.30">14.30</option>
                                    <option value="15">15</option>
                                    <option value="15.30">15.30</option>
                                    <option value="16">16</option>
                                    <option value="16.30">16.30</option>
                                    <option value="17">17</option>
                                    <option value="17.30">17.30</option>
                                    <option value="18">18</option>
                                    <option value="18.30">18.30</option>
                                    <option value="19">19</option>
                                    <option value="19.30">19.30</option>
                                    <option value="20">20</option>
                                    <option value="20.30">20.30</option>
                                    <option value="21">21</option>


                                </select>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
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
                    <form method="post" action="docenteEliminarControlador.php" >
                        <input type="hidden" name="id" id="idUsuario">
                        <div class="modal-body">
                            <h3>¿Esta seguro que desea eliminar el usuario?</h3>
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

        <!-- Page level custom scripts -->
        <script src="../js/demo/datatables-demo.js"></script>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });

        </script>
        <script type="text/javascript">
            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
            });
        </script>

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
