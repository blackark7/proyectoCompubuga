
<?php

include_once '../conexion.php';

class docenteModelo {

    function insertar($nombre, $carrera, $telefono, $documento, $fecha, $direccion, $foto) {
        global $link;
        $consulta = "INSERT INTO `docentes` (`id`, `nombre`, `carrera`, `telefono`, `documento`, `fecha`, `direccion`, `foto`) VALUES (NULL, '$nombre', '$carrera', '$telefono', '$documento', '$fecha', '$direccion','$foto');";
        $query = mysqli_query($link, $consulta);
    }

    function eliminar($id) {

        global $link;
        $consulta = "DELETE FROM `docentes` WHERE `docentes`.`id` = $id";
        $query = mysqli_query($link, $consulta);
    }

    function modificar($nombre, $carrera, $telefono, $documento, $fecha, $direccion, $id) {
        global $link;
        $consulta = "UPDATE `docentes` SET `nombre` = '$nombre', `carrera` = '$carrera', `telefono` = '$telefono', `documento` = '$documento', `fecha` = '$fecha', `direccion` = '$direccion' WHERE `docentes`.`id` = $id;";
        $query = mysqli_query($link, $consulta);
    }

    function modificarFoto($foto, $id) {
        global $link;
        $consulta = "UPDATE `docentes` SET `foto` = '$foto' WHERE `docentes`.`id` = $id;";
        $query = mysqli_query($link, $consulta);
    }

    function mostrarTodos() {
        global $link;
        $consulta = "SELECT * FROM `docentes`";
        $query = mysqli_query($link, $consulta);
        return $query;
    }

    function mostrar($id) {
        global $link;
        $consulta = "SELECT * FROM `docentes` WHERE id = $id";
        $query = mysqli_query($link, $consulta);
        return $query;
    }

    function ultimoId() {
        global $link;
        $consulta = "SELECT * FROM `docentes`";
        $query = mysqli_query($link, $consulta);
        while ($fila = mysqli_fetch_array($query)) {

            if ($fila != NULL) {
                $id = $fila['id'];
            }
        }
        return $id;
    }

}

?>
