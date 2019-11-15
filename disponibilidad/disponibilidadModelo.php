<?php

include_once '../conexion.php';

class disponibilidadModelo {

    function insertar($id, $nl, $nma, $nmi, $nj, $nv, $ns, $nd, $tl, $tma, $tmi, $tj, $tv, $ts, $td, $ml, $mma, $mmi, $mj, $mv, $ms, $md) {
        global $link;
        $consulta = "INSERT INTO `disponibilidad_docente` (`id`, `idDocente`, `nl`, `nma`, `nmi`, `nj`, `nv`, `ns`, `nd`, `tl`, `tma`, `tmi`, `tj`, `tv`, `ts`, `td`, `ml`, `mma`, `mmi`, `mj`, `mv`, `ms`, `md`) VALUES (NULL,'$id', '$nl', '$nma', '$nmi', '$nj', '$nv', '$ns', '$nd', '$tl', '$tma', '$tmi', '$tj', '$tv', '$ts', '$td', '$ml', '$mma', '$mmi', '$mj', '$mv', '$ms', '$md');";
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
        $consulta = "SELECT * FROM `disponibilidad_docente` WHERE `idDocente` = $id";
        $query = mysqli_query($link, $consulta);
        return $query;
    }

}

