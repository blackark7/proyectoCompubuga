<?php

include_once '../conexion.php';

class disponibilidadModelo {

    function insertar($id, $nl, $nma, $nmi, $nj, $nv, $ns, $nd, $tl, $tma, $tmi, $tj, $tv, $ts, $td, $ml, $mma, $mmi, $mj, $mv, $ms, $md) {
        global $link;
        $consulta = "INSERT INTO `disponibilidad_docente` (`id`, `idDocente`, `nl`, `nma`, `nmi`, `nj`, `nv`, `ns`, `nd`, `tl`, `tma`, `tmi`, `tj`, `tv`, `ts`, `td`, `ml`, `mma`, `mmi`, `mj`, `mv`, `ms`, `md`) VALUES (NULL,'$id', '$nl', '$nma', '$nmi', '$nj', '$nv', '$ns', '$nd', '$tl', '$tma', '$tmi', '$tj', '$tv', '$ts', '$td', '$ml', '$mma', '$mmi', '$mj', '$mv', '$ms', '$md');";
        $query = mysqli_query($link, $consulta);
    }
    function modificar($id, $nl, $nma, $nmi, $nj, $nv, $ns, $nd, $tl, $tma, $tmi, $tj, $tv, $ts, $td, $ml, $mma, $mmi, $mj, $mv, $ms, $md) {
        global $link;
        $consulta = "UPDATE `disponibilidad_docente` SET `nl` = '$nl', `nma` = '$nma', `nmi` = '$nmi', `nj` = '$nj', `nv` = '$nv', `ns` = '$ns', `nd` = '$nd', `tl` = '$tl', `tma` = '$tma', `tmi` = '$tmi', `tj` = '$tj', `tv` = '$tv', `ts` = '$ts', `td` = '$td', `ml` = '$ml', `mma` = '$mma', `mmi` = '$mmi', `mj` = '$mj', `mv` = '$mv', `ms` = '$ms', `md` = '$md' WHERE `disponibilidad_docente`.`idDocente` = $id;";
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
    
      

    function mostrar($id) {
        global $link;
        $consulta = "SELECT * FROM `disponibilidad_docente` WHERE `idDocente` = $id";
        $query = mysqli_query($link, $consulta);
        return $query;
    }

}

