<?php

include_once '../conexion.php';

class horarioModelo {

    function insertar($idDocente,$idMateria,$dia,$horaInicio,$horaFin) {
        global $link;
        $consulta = "INSERT INTO `horario` (`id`, `idDocente`, `idMateria`, `dia`, `horaInicio`, `horaFin`) VALUES (NULL, '$idDocente', '$idMateria', '$dia', '$horaInicio', '$horaFin');";
        $query = mysqli_query($link, $consulta);
    }
    

}

