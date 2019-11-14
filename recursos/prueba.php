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


//    <!--modal eliminar-->
//<div class="modal fade" id="eliminarModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
//    <div class="modal-dialog" role="document">
//        <div class="modal-content">
//            <div class="modal-header">
//                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
//                </button>
//                <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
//            </div>
//            <form method="post" action="../instalaciones/eliminarInstalacionControlador.php" enctype="multipart/form-data">
//                <input type="hidden" name="codigo" id="codigoNoticiaEliminar1">
//                <div class="modal-body">
//                    <h3>¿Esta seguro que desea eliminar la instalacion?</h3>
//                </div>
//                <div class="modal-footer">
//                    <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
//                    <button type="submit" class="btn btn-primary">SI</button>
//                </div>
//            </form>
//        </div>
//    </div>
//</div>


//    <a onclick='showCreateThanksYouForm(" . $fila['id'] . ")'><span class='glyphicon glyphicon-picture' </span></a>

//    function showCreateThanksYouForm(v) {
//        var valor = v;
//        document.getElementById('codigoNoticia').value = v;
//        $('#modal-create-thanks-you').modal('show')
//    }
//UPDATE `docentes` SET `nombre` = 'LOPEZ7', `carrera` = '1', `telefono` = '3145704207', `documento` = '1116260777', `fecha` = '2019-11-08', `direccion` = 'kr 7d 31c1214' WHERE `docentes`.`id` = 7;
//SELECT * FROM `docentes` 