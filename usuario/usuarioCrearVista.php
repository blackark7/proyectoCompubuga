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

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Crear Usuario</h6>
                    </div>
                    <div class="card-body">
                        <form action="usuarioCrearControlador.php" method="post">
                            <div class="form-group">
                                <label for="">Tipo</label>
                                <select class="form-control" name="tipo">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Nombre usuario</label>
                                <input type="text" class="form-control" name="nombreUsuario" required="">
                            </div>

                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <input type="password" id="pass1" class="form-control" name="password1" required="">
                            </div>

                            <div class="form-group">
                                <label for="">Repetir contraseña</label>
                                <input type="password" id="pass2" class="form-control" name="password2" required="">
                            </div>

                            <div class="form-group">
                                <label for="">Foto</label>
                                <input type="file" id="">
                                <p class="help-block">Por favor suba una foto de perfil</p>
                            </div>

                            <button type="submit" id="registrar" class="btn btn-success">Registrar</button>
                            <button type="reset" class="btn btn-danger">Cancelar</button>
                        </form>
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
<script>
    function validarPassword() {
        var password = document.getElementById("pass1").value;
        var rPassword = document.getElementById("pass2").value;

        if (password === rPassword) {
            //                                                    alert("son iguales");
            document.getElementById("registrar").className = "btn btn-success  ";
            document.getElementById("registrar").disabled = false;

        } else {

            document.getElementById("registrar").className += " disabled";
            document.getElementById("registrar").disabled = true;
        }

    }
</script>


</body>

</html>

