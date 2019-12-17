

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

         
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    <?php
                    include_once '../componets/navBar.php';
                    ?>
                    
                    
                    <?php 
                    $id = filter_input(INPUT_GET, 'id');
include_once "usuarioModelo.php";
$usuarioModelo = new usuarioModelo();
$result = $usuarioModelo->mostrar($id);
while ($fila = mysqli_fetch_array($result)) {

    if ($fila != NULL) {

        $foto = $fila['foto'];
    }
}
                    
                 ?>   
                    <div class="container">
                        <h1>Cambiar Foto</h1>
                        <html>





                            <img src="<?php echo $foto; ?>" class="rounded float-left" width="80" height="80" >


                            <br>  <br>  <br>  <br>


                            <form action = "modificarFotoUsuarioControlador.php" method = "POST" enctype = "multipart/form-data">
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
                    </body>
                    </html>

