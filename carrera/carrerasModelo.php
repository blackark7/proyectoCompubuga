<?php

include_once '../conexion.php';

class carrerasModelo {

    function insertar($nombre) {
        global $link;
        $consulta = "INSERT INTO `carrera` (`id`, `nombre`) VALUES (NULL, '$nombre');";
        $query = mysqli_query($link, $consulta);
    }
    
     function eliminar($id) {
       
        global $link;
        $consulta = "DELETE FROM `carrera` WHERE `carrera`.`id` = $id";
        $query = mysqli_query($link, $consulta);
    }
    

    function mostrarTodos() {
        global $link;
        $consulta = "SELECT * FROM `carrera`";
        $query = mysqli_query($link, $consulta);
        return $query;
    }
    
       function modificar($nombre, $id) {
        global $link;
        $consulta = "UPDATE `carrera` SET `nombre` = '$nombre' WHERE `carrera`.`id` = $id;";
        $query = mysqli_query($link, $consulta);
    }

    function mostrar($id) {
        global $link;
        $consulta = "SELECT * FROM `carrera` WHERE id = $id";
        $query = mysqli_query($link, $consulta);
        return $query;
    }

}
