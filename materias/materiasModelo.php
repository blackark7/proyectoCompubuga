<?php

include_once '../conexion.php';

class materiasModelo {

    function insertar($nombre, $carrera) {
        global $link;
        $consulta = "INSERT INTO `materia` (`id`, `nombre`, `carrera`) VALUES (NULL, '$nombre', '$carrera');";
        $query = mysqli_query($link, $consulta);
    }

    function eliminar($id) {

        global $link;
        $consulta = "DELETE FROM `materia` WHERE `materia`.`id` = $id";
        $query = mysqli_query($link, $consulta);
    }

    function mostrarTodos() {
        global $link;
        $consulta = "SELECT * FROM `materia`";
        $query = mysqli_query($link, $consulta);
        return $query;
    }

    function modificar($nombre, $carrera, $id) {
        global $link;
        $consulta = "UPDATE `materia` SET `nombre` = '$nombre', `carrera` = '$carrera' WHERE `materia`.`id` = $id;";
        $query = mysqli_query($link, $consulta);
    }

    function mostrar($id) {
        global $link;
        $consulta = "SELECT * FROM `materia` WHERE id = $id";
        $query = mysqli_query($link, $consulta);
        return $query;
    }

}

?>
