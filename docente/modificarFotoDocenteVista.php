<?php
@session_start();
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

        <title>Cambiar Foto</title>

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


                    <?php
                    $id = filter_input(INPUT_GET, 'id');
                    include_once "docenteModelo.php";
                    $docenteModelo = new docenteModelo();
                    $result = $docenteModelo->mostrar($id);
                    while ($fila = mysqli_fetch_array($result)) {

                        if ($fila != NULL) {

                            $foto = $fila['foto'];
                        }
                    }
                    ?>   
                  
                        <h1>Cambiar Foto</h1>
                        <html>





                            <img src="<?php echo $foto; ?>" class="rounded float-left" width="80" height="80" >


                            <br>  <br>  <br>  <br>


                            <form action = "modificarFotoDocenteControlador.php" method = "POST" enctype = "multipart/form-data">
                                <input type = "hidden" value = "<?php echo $id; ?>" name = "id">
                                <div class = "form-group">
                                    <label for = "">Foto</label>
                                    <input type = "file" name = "foto" id = "" required>
                                    <p class = "help-block">Por favor suba una foto de perfil</p>
                                </div>
                                <hr>
                                <input type = "submit" value = "Guardar">
                            </form>

                    </div>
                </div>
            </div>
        </div>

    </body>
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

</html>

