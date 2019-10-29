<?php
//    $foto = $_FILES["foto"]["name"];
//    $archivo = $_FILES["foto"]["tmp_name"];
//    $destino = "../images/" . $foto;
//    $move = move_uploaded_file($archivo, $destino);
//    if (!$move) {
//        $codigo = $_FILES['foto']['error'];
//        echo 'codigo error: ' . $codigo;
//        echo 'la imagen  no pudo ser movida';
//    } else {
//
//
//        $campos = array("foto", "idInstalacion");
////$valores son los valores a almacenar
//        $valores = array("$destino", "$noticia");
////la funcion insertar recive el nombre de la tabla y los dos arrays de campos y valores
//        $nombreDeTabla = "fotosInstalacion";
//        $utilModelo->insertar($nombreDeTabla, $campos, $valores);
//        $_SESSION['mensajeOk'] = '<div class="alert alert-success">
//              <button class="close" data-dismiss="alert">×</button>
//              <strong>Exito!</strong> Imagen agregada correctamente</div>';
//        header('Location: ../admin/adminVista.php');
//        exit();
//
//    }


//    enctype="multipart/form-data"